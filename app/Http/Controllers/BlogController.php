<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Image;

class BlogController extends Controller
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
        $posts = Blog::latest()->latest()->get();
        return view('cms.all_posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.add_blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Blog();

        $post->title = $request->title;
        $post->description = $request->description;
        $post->slug = str_slug($request->title . time());

        $image = $request->file('image');
        $image2 = $request->file('image');


        $file_name = str_slug('blog' . time()) . '.' . $image->getClientOriginalExtension();
        $file_name2 = 'thumb_' . str_slug('blog' . time()) . '.' . $image2->getClientOriginalExtension();

        $location = 'blog/' . $file_name;
        $location2 = 'blog/thumb/' . $file_name2;

        Image::make($image)->resize(770, 446, function ($constraint) {
            $constraint->aspectRatio();})->save($location);
        Image::make($image2)->resize(570, 310, function ($constraint) {
            $constraint->aspectRatio();})->save($location2);

        $post->image = $location;
        $post->thumb = $location2;
        $post->save();

        Session::flash('success', 'Post Created!');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Blog::where('id', $id)->first();

        return view('cms.edit_blog', compact('post'));
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
        $post = Blog::where('id', $id)->first();
        $post->title = $request->title;
        $post->description = $request->description;

        if ($request->hasFile('image')) {


            $file_name = $post->image;
            $file_name_thumb = $post->thumb;




            if (file_exists($file_name ) && file_exists($file_name_thumb)) {

                @unlink($file_name);
                @unlink($file_name_thumb);
            }


            $image = $request->file('image');
            $image2 = $request->file('image');


            $file_name = str_slug('blog' . time()) . '.' . $image->getClientOriginalExtension();
            $file_name2 = 'thumb_' . str_slug('blog' . time()) . '.' . $image2->getClientOriginalExtension();

            $location = 'blog/' . $file_name;
            $location2 = 'blog/thumb/' . $file_name2;

            Image::make($image)->resize(770, 446, function ($constraint) {
                $constraint->aspectRatio();})->save($location);

            Image::make($image2)->resize(570, 310, function ($constraint) {
                $constraint->aspectRatio();})->save($location2);

            $post->image = $location;
            $post->thumb = $location2;

        }

        $post->save();

        Session::flash('success', 'Post Update!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
