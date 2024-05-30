<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{

    public function BlogDetails(Request $request)
        {
            return view("blog-details");
        }
}