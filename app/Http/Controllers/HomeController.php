<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Review;
use Redirect;
use App\Category;
use App\Product;
use Auth;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{

    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Blog::take(2)->latest()->get();



        return view('index', compact('posts', 'wines', 'toys', 'pastries'));
    }


    public function about()
    {
        return view('about');
    }

    public function service()
    {
        return view("service");
    }

    /**
     * Show the single product.
     *
     * @return \Illuminate\Http\Response
     */
    public function singleProduct($slug)
    {


        $product = Product::where('slug', $slug)->first();

        $category = $product->categories()->first();

	 $reviews = Review::where('product_id',$product->id)->get();


        $related_products = $category->products()->get();

        return view('single_product')->with(['product' => $product, 'related_products' => $related_products, 'reviews'=>$reviews]);

    }

    public function singleCategory($category)
    {
        $category = Category::where('name', $category)->first();

        $category_product = $category->products()->inRandomOrder()->get();

        return view('single_category')->with(['products' => $category_product, 'category' => $category]);
    }

    public function subCategory($category , $subcat) {
        $sub_cat = SubCategory::where('name', $subcat)->first();

        if($sub_cat && count($sub_cat) > 0) {
            $category = Category::where('name', $category)->first();

            $products = Product::where('sub_category_id', $sub_cat->id)->inRandomOrder()->get();

            return view('sub_category')->with(['products' => $products, 'category' => $category, 'sub_category' => $sub_cat]);
        }

        abort(404);

    }

    /*
     * This is the search function for all products
     *
     * */

    public function search()
    {
        $query = Input::get('query');

        $results = Product::where('title','like','%'.$query.'%')->latest()->paginate(30);
        $latest = Product::take(2)->latest()->get();

        return view('result')->with(['products' => $results, 'latest' => $latest, 'query' => $query]);
    }

    public function blog()
    {
        $posts = Blog::all();
        return view('blog', compact('posts'));
    }

    public function blogDetails($slug)
    {
        $post = Blog::where('slug', $slug)->first();

        return view('blog_details', compact('post'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function sendContact(Request $request)
    {
        Session::flash('success', 'Message Sent! We will get back to you ASAP!');
        return redirect()->back();
    }

    public function bakery()
    {
        return view('bakery');
    }

    public function logout(Request $request) {
      Auth::logout();
      return redirect('/');
    }

    public function storeReviewForProduct(Request $request, $id)
    {

        $validatedData = $request->validate([
            'comment' => 'required',
        ]);

        $product = Product::find($id);

        // this will be added when we add user's login functionality
        //$this->user_id = Auth::user()->id;

        $product_reviews = new Review();
        $product_reviews->comment = $request->comment;
        $product_reviews->rating = $request->rating;
        $product->reviews()->save($product_reviews);

        // recalculate ratings for the specified product
        $reviews = Review::where('product_id',$id)->get();

        $avgRating = $reviews->avg('rating');
        $product->rating_cache = round($avgRating,1);
        $product->rating_count = $reviews->count();
        $product->save();

        return Redirect::to('product/'.$product->slug);
    }



}
