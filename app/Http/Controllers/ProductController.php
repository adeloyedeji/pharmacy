<?php

namespace App\Http\Controllers;

use App\Order;
use App\Prescription;
use App\Product;
use App\SubCategory;
use App\User;
use App\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();

        return view('cms.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.add_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'title' => 'required|max:191',
            'price' => 'required|integer',
            'category' => 'required',
            'overview' => 'max:225',
            'image' => 'image',
        ]);

        $product = new Product();

        $product->title = $request->title;
        $product->price = $request->price;
        $product->overview = $request->overview;
        $product->description = $request->description;
        $product->slug = str_slug($request->title) . time();
        $product->category_id = $request->category;
        $product->sub_category_id = $request->subcategory;
        $product->unit = $request->unit;

        if ($request->hasFile('image')) {

            $image = $request->image;

            $file_name = str_slug($request->title) . time() . '.' . $image->getClientOriginalExtension();
            $file_name2 = str_slug('product thumb') . time() . '.' . $image->getClientOriginalExtension();
            $file_name3 = str_slug('product small') . time() . '.' . $image->getClientOriginalExtension();


            $location = 'products/' . $file_name;
            $location2 = 'products/thumbs/' . $file_name2;
            $location3 = 'products/smallest/' . $file_name3;

            Image::make($image)->resize(468, 468, function ($constraint) {
                $constraint->aspectRatio();})->save($location);

            Image::make($image)->resize(268, 268, function ($constraint) {
                $constraint->aspectRatio();})->save($location2);

            Image::make($image)->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();})->save($location3);

            $product->image1 = $location;
            $product->thumb1 = $location2;
            $product->small1 = $location3;

        }
        else{

            $product->image1 = 'products/default.jpg';
            $product->thumb1 = 'products/thumbs/default-thumb.jpg';
            $product->small1 = 'products/smallest/default-smallest.jpg';
        }
	$stock = new stock();
$stock->product_count = $request->stock;
        $product->save();
$product->stock()->save($stock);

        Session::flash('success', 'Product Added!');

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        if ($product  == null) {

           return Redirect::back();
        }
        return view('cms.view_product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

       $product = Product::find($id);
        if ($product != null) {

            $stock = Stock::where('product_id',$product->id)->first();
            return view('cms.edit_product', compact('product','stock'));
        }

        return Redirect::back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'title' => 'required|max:191',
            'price' => 'required|integer',
            'category' => 'required',
            'overview' => 'max:225',
            'image' => 'image',

        ]);

        $product = Product::find($id);

        $product->title = $request->title;
        $product->price = $request->price;
        $product->overview = $request->overview;
        $product->description = $request->description;
        $product->category_id = $request->category;
        $product->sub_category_id = $request->subcategory;
        $product->unit = $request->unit;

        if ($request->hasFile('image')) {


            $file_name = $product->image1;
            $file_name2 = $product->thumb1;
            $file_name3 = $product->small1;



            if (file_exists($file_name ) && file_exists($file_name2) && file_exists($file_name3 )){

                @unlink($file_name);
                @unlink($file_name2);
            }



            $image = $request->image;

            $file_name = str_slug($request->title) . time() . '.' . $image->getClientOriginalExtension();
            $file_name2 = str_slug('product thumb') . time() . '.' . $image->getClientOriginalExtension();
            $file_name3 = str_slug('product small') . time() . '.' . $image->getClientOriginalExtension();

            $location = 'products/' . $file_name;
            $location2 = 'products/thumbs/' . $file_name2;
            $location3 = 'products/smallest/' . $file_name3;




            Image::make($image)->resize(468, 468, function ($constraint) {
                $constraint->aspectRatio();})->save($location);

            Image::make($image)->resize(268, 268, function ($constraint) {
                $constraint->aspectRatio();})->save($location2);

            Image::make($image)->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();})->save($location3);

            $product->image1 = $location;
            $product->thumb1 = $location2;
            $product->small1 = $location3;

        }

$stock = Stock::where('product_id',$product->id)->first();
        $product->save();
        if ($stock == null) {
            $stock = new Stock();
            $stock->product_count = $request->stock;
            $product->stock()->save($stock);
        }else{
            $stock->product_count = $request->stock;
            $stock->save();
        }


        Session::flash('success', 'Product Updated!');

        return redirect()->route('product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $product = Product::find($id);
        $category = $product->category;

        $file_name = $product->image1;
        $file_name_thumb = $product->thumb1;
        $file_name_small = $product->small1;

        if (file_exists($file_name ) && file_exists($file_name_thumb) && file_exists($file_name_small)){

            @unlink($file_name);
            @unlink($file_name_thumb);
            @unlink($file_name_small);
        }

        $product->delete();

        Session::flash('success', 'Product Deleted!');

        return redirect()->back();

    }

    public function getSubcategory($category_id)
    {
        $subcategories = SubCategory::where('category_id', $category_id)->select('id', 'name')->get();

        return $subcategories;
    }

    public function adminIndex()
    {
        $users = User::get();
        $orders = Order::get();
        $sales = Order::where('status', 'Paid')->get();
        return view('cms.index', compact('users', 'orders', 'sales'));
    }

    /*
     * This shows the list of all prescriptions on the admin.
     *
     */

    public function allPrescription()
    {
        $prescriptions = Prescription::get();

        return view('cms.prescriptions', compact('prescriptions'));
    }
}
