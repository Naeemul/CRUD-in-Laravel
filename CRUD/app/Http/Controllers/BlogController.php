<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function home()
    {
        $allBlog = new Blog();
        return view('home', ['blogs' => $allBlog->all()]);
    }
    public function addBlog()
    {
        return view('addBlog');
    }
    public function addBlogComplete(Request $req)
    {
        Blog::createBlog($req);
        return redirect()->route('addBlog')->with('msg', 'Blog added successfully');
    }
    public function manageBlog()
    {
        $blogs = new Blog();
        return view('manageBlog', ['blogs' => $blogs->all()]);
    }
    public function deleteBlog($id)
    {
        Blog::destroy('id', $id);
        return redirect()->back();
    }
    public function updateBlog($id)
    {
        $result = Blog::find($id);
        return view('updateBlog', ['blog' => $result]);
    }
    public function updateBlogComplete(Request $updateValue,$id)
    {
        Blog::updateBlog($updateValue, $id);
        return redirect()->route('manageBlog')->with('msg', 'Blog updated successfully');
    }
}
