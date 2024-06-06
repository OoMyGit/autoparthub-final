<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{

    public function Cart(Request $request)
        {
            return view("cart");
        }

    public function store( Request $request){
       // $user = Session::get('id_user');
        $user =  LoginController::getUserID();;
       
        $item_id = $request->input('id_product');
        //dd($user);
 

        DB::table('Cart')->insert([
           'id_product' => $item_id,
           'id_user' => $user,
           'quantity' => 1
        ]);
        return route('cart');
       
    }
    public function destroy($id)
    {
        $cart = DB::table('Cart')->find($id);
        if ($cart) {
            $cart->delete();
        }
        return route('Cart');
    
    }
    
}