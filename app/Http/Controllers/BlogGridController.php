<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogGridController extends Controller
{

    public function BlogGrid(Request $request)
        {
            return view("blog-grid");
        }
}