<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = Blog::Paginate(20);
        return view('admin.view.blog.blog_list', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.view.blog.blog_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if ($request->hasFile('image')) {
            $image = $request->image;
            $destinationPath = 'uploads/blog';
            $extension = $image->getClientOriginalExtension();
            $fileName = rand(11111, 99999) . '.' . $extension;
            $image->move($destinationPath, $fileName);

        }
        $blog = new Blog();
        $blog->fill($request->toArray());
        $blog->photo = $fileName;
        $blog->save();
        $blogs = Blog::Paginate(20);
        return view('admin.view.blog.blog_list', compact('blogs'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
        return view('admin.view.blog.blog_edit', compact('blog'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
        if ($request->hasFile('image')) {
            $myFile = public_path("uploads/blog/$blog->photo");
            if (is_file($myFile)) {
                unlink($myFile)  ;
            }
            $image = $request->image;
            $destinationPath = 'uploads/blog';
            $extension = $image->getClientOriginalExtension();
            $fileName = rand(11111, 99999) . '.' . $extension;
            $image->move($destinationPath, $fileName);
            $blog->photo = $fileName;
        }
        $blog->fill($request->toArray());
        $blog->save();
        $blogs = Blog::Paginate(20);
        return view('admin.view.blog.blog_list', compact('blogs'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
        $blog->delete();
        $blogs = Blog::Paginate(20);
        return view('admin.view.blog.blog_list', compact('blogs'));
    }
}
