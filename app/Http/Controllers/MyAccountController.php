<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyAccountController extends Controller
{

    public function MyAccount(Request $request)
        {
            return view("my-account");
        }
}