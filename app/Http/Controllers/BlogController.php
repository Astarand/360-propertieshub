<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function Blog()
    {
        return view('Pages.Blogs.blog');
    }
    public function Blog1()
    {
        return view('Pages.Blogs.blog1');
    }
    public function Blog2()
    {
        return view('Pages.Blogs.blog2');
    }
    public function Blog3()
    {
        return view('Pages.Blogs.blog3');
    }
    public function Blog4()
    {
        return view('Pages.Blogs.blog4');
    }
}
