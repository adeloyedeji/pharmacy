<?php

namespace App\Http\Controllers;

use App\Order;
use App\WalletTransaction;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Unicodeveloper\Paystack\Facades\Paystack;

class PaymentController extends Controller
{
    /**
     * Redirect the User to Paystack Payment Page
     * This handles any kind of payment on the application
     * that will go through Paystack
     * @return Url
     */
    public function redirectToGateway(Request $request)
    {
        // Paystack receives the amount in Kobo, so we multiply by 100 to get the Naira equivalent
        $request->amount = $request->amount * 100;

        if ($request->type == 'card'){
            $this->payWithCard($request);
        }

        return Paystack::getAuthorizationUrl()->redirectNow();
    }


    /**
     * Obtain Paystack payment information
     * This handles all the callback for any payment
     * that will go through Paystack.
     * If the payment is of the type 'funding', fund the users account
     * through the fundWallet method.
     */

    public function paymentCallBack(){

        $paymentDetails = Paystack::getPaymentData();

        if ($paymentDetails['status'] == true && $paymentDetails['data']['metadata']['custom_field']['type'] == 'funding'){

            return $this->fundWallet();
        }

        if ($paymentDetails['status'] == true && $paymentDetails['data']['metadata']['custom_field']['type'] == 'card'){

            return $this->payWithCardCallback();
        }
        else{
            dd($paymentDetails['data']['metadata']['custom_field']['type']);
        }


    }

    /**
     * Fund User's Wallet
     * Get the Authenticated user, get how much he payed on PayStack
     * Fund his account with the equivalent amount.
     *
     */
    public function fundWallet(){

        $user = Auth::user();
        $paymentDetails = Paystack::getPaymentData();

        //Paystack returns the amount in Kobo, so we divide by 100 to convert to Naira
        $amount = $paymentDetails['data']['amount'] / 100;

        $wallet = $user->wallet()->first();

        $current_balance = $wallet->balance;

        $new_balance = $current_balance + $amount;

        $wallet->balance = $new_balance;

        // Also save it in the wallet transaction history
        $wallet_transaction = new WalletTransaction();

        $wallet_transaction->type = 'Credit';
        $wallet_transaction->amount = $amount;

        $wallet->walletTransaction()->save($wallet_transaction);
        $wallet->save();

        return redirect()->route('dashboard');
    }

    /**
     * Allow users to pay via their wallet.
     * Save the user's order.
     * Get the user's wallet balance.
     * Check if is current balance is greater than or equal to the order total price.
     * Debit his wallet and mark his order as paid.
     */

    public function payWithWallet(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:195',
            'phone' => 'required',
            'email' => 'email',
            'address' => 'required'

        ]);

        $user = Auth::user();
        $order = new Order();

        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->amount = $request->amount;
        $order->payment_type = 'Wallet';
        $order->reference = str_random(6);
        $order->cart = serialize(Cart::content());


        $wallet = $user->wallet()->first();

        $current_balance = $wallet->balance;

        if ($current_balance >= $request->amount)
        {
            $order->status = 'Paid';

            // Debit the User the order amount
            $new_balance = bcsub($current_balance, $request->amount);

            $wallet->balance = $new_balance;



            $wallet_transaction = new WalletTransaction();
            $wallet_transaction->type = 'Debit';
            $wallet_transaction->amount = $request->amount;


            $wallet->walletTransaction()->save($wallet_transaction);
            $wallet->save();

            Session::flash('success', 'Order Successful!');

        }else{
            $order->status = 'Unpaid';
            Session::flash('fail', 'Order Failed! Wallet Balance Low');
        }

        $user->orders()->save($order);

        return redirect()->route('dashboard');

    }

    /**
     * Allow users to pay on Pickup.
     * Save the user's order.
     * Register the transaction with a Reference Number.
     * Mark the order as Unpaid.
     */
    public function payOnPickup(Request $request)
    {
//        $this->validate($request, [
//            'name' => 'required|max:195',
//            'phone' => 'required',
//            'email' => 'email',
//            'address' => 'required'
//
//        ]);

        $user = Auth::user();
        $order = new Order();

        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->amount = $request->amount;
        $order->payment_type = 'On Pickup';
        $order->reference = str_random(6);
        $order->status = 'Unpaid';
        $order->pickup_date = $request->date;
        $order->pickup_time = $request->time;
        $order->cart = serialize(Cart::content());

        $user->orders()->save($order);
        Session::flash('success', 'Order Successfully placed!');

        return redirect()->route('dashboard');


    }

    public function payWithCard(Request $request){

        $this->validate($request, [
            'name' => 'required|max:195',
            'phone' => 'required',
            'email' => 'email',
            'address' => 'required'

        ]);

        $user = Auth::user();

        $order = new Order();

        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->amount = $request->amount;
        $order->payment_type = 'Card';
        $order->reference = str_random(6);
        $order->cart = serialize(Cart::content());
        $order->status = 'Unpaid';

        $user->orders()->save($order);

        /*
         * Add the order id and transaction type to the information going to paystack.
         * This will enable us know the product that was payed for when the payment calls back.
         *
         * */

        request()->metadata = json_encode(['custom_field' => ['order_id' => $order->id, 'type' => 'card']]);

        return $this;

    }

    public function payWithCardCallback(){

        $paymentDetails = Paystack::getPaymentData();


        if ($paymentDetails['data']['status'] == 'success'){

            $order = Order::find($paymentDetails['data']['metadata']['custom_field']['order_id']);



            $order->reference = request()->trxref;
            $order->status = 'paid';

            $order->save();

            Session::flash('success', 'Transaction Successful. Your Reference ID is: ' . request()->trxref);

            return redirect()->route('dashboard')->with('transaction_ref', request()->trxref);

        }else{

            dd('payment failed');
        }

        return $this;
    }

}
