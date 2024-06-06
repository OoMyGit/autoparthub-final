<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validate the request first
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        // Check if the 'remember me' option was checked
        $remember = $request->has('remember');

        $user = $request->only("username", "password");

        // Retrieve the user credentials from the database
        $acc = DB::table(`User`)
            ->where('username', '=', $user['username'])
            ->first();

        // Debug output
        dd($acc);

        if($acc !== null){
            if (password_verify($request->password, $acc->password)) {

                if ($remember == true) {
                    // Set cookies for username and user ID (not password)
                    Cookie::queue('username', $acc->username, 60 * 24 * 7);
                    Cookie::queue('id_user', $acc->id_user, 60 * 24 * 7);
                } else {
                    // Store user ID in the session
                    Session::put('id_user', $acc->id_user);
                    Session::put('username', $acc->username);
                }
    
                return view('index');
            } else {
                return redirect('login')->withErrors(['error' => 'Login Failed! Please Try Again.']);
            }
            return redirect('login')->withErrors(['error' => 'Login Failed! User Not Found Please Sign Up.']);
        }

    }

    public static function getUserID()
    {
        if (Session::get('id_user') != null) {
            $id = Session::get('id_user');
        } else if (Cookie::get('id_user') != null) {
            $id = Cookie::get('id_user');
        }

        return $id;
    }

    public function logout(Request $request)
    {
        if (Session::has('id_user') || Cookie::get('id_user') != null) {
            Session::forget('id_user');
            Session::forget('username');
            Session::forget('password');

            Cookie::queue(Cookie::forget('id_user'));
            Cookie::queue(Cookie::forget('username'));
            Cookie::queue(Cookie::forget('password'));
        }
        return redirect('/')->with('success', 'Account successfully logged out');
    }
}
