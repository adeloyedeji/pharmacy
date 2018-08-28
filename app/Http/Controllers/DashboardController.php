<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    /**
     * Show the user dashboard index.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $wallet = Auth::user()->wallet()->first();

        $wallet_transactions = $wallet->walletTransaction()->take(4)->get();

        $orders = Auth::user()->orders()->latest()->take(4)->get();


	$orderNumber = count(Auth::user()->orders()->get());


	return view('dashboard.index', compact('wallet_transactions', 'orders','orderNumber'));
    }

    /**
     * Show the user dashboard wallet.
     *
     * @return \Illuminate\Http\Response
     */

    public function wallet()
    {

        $wallet = Auth::user()->wallet()->first();

        $debit_wallet_transactions = $wallet->walletTransaction()->where('type', 'debit')->take(4)->get();
        $credit_wallet_transactions = $wallet->walletTransaction()->where('type', 'credit')->take(4)->get();

        $total_debit = $wallet->walletTransaction()->where('type', 'debit')->sum('amount');
        $total_credit = $wallet->walletTransaction()->where('type', 'credit')->sum('amount');

        return view('dashboard.wallet')->with([
            'debit_wallet_transactions' => $debit_wallet_transactions,
            'credit_wallet_transactions' => $credit_wallet_transactions,
            'total_debit' => $total_debit,
            'total_credit' => $total_credit
        ]);
    }

    // Displays a single order detail to a user.

    /*
     * Displays a single order detail to a user.
     * The order must belong to that user before it can be viewed.
     * */

    public function orderDetails($id)
    {
        $order = Order::where('id', $id)->first();

        // Check if the order belongs to the logged in user.

        if ($order->user_id == Auth::user()->id){

            $products = unserialize($order->cart);
            return view('dashboard.order_details', compact('products', 'order'));
        }

        return redirect()->back();

    }

    // Shows the view to edit profile.

    public function showProfile()
    {
        return view('dashboard.profile');
    }

    // Allows users to edit profile details.

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required',
            'name' => 'max:225',

        ]);

        $user = User::where('id', Auth::user()->id)->first();

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;

        $user->save();

        Session::flash('success', 'Profile Updates!');
        return redirect()->back();
    }

    // Allows users to change password

    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'password_old' => 'required|string|min:6',
            'password' => 'required|string|min:6|confirmed',

        ]);

        $user = Auth::User();

        if (Hash::check(Input::get('password_old'), $user['password']) && Input::get('password') == Input::get('password_confirmation')){

            $user->password = bcrypt(Input::get('password'));
            $user->save();

            Session::flash('success', 'Password Changed Successfully');

        }
        else{

            Session::flash('fail', 'Password Change Failure');

        }

        return redirect()->back();
    }
	public function order(){
        $order = Auth::user()->orders()->get();
        //dd($order);

        return view('dashboard.order',compact('order'));
    }
}
