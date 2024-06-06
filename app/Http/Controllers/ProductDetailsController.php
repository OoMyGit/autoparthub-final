<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailsController extends Controller
{
    public function ProductDetails(Request $request, $id)
    {
        // Fetch product details using raw SQL query
        $product = DB::table('product')
            ->join('category', 'product.id_category', '=', 'category.id_category')
            ->select('product.*', 'category.nama_category')
            ->where('product.id_product', $id)
            ->first();

        // Check if product exists
        if (!$product) {
            abort(404);
        }

        return view('product-details', compact('product'));
    }
    
    public function updateQuantity(Request $request, $id)
    {
        $newQuantity = $request->input('quantity');

        if ($newQuantity >= 0) {
            DB::table('product')
                ->where('id_product', $id)
                ->update(['stock' => $newQuantity]);

            return response()->json(['success' => true, 'quantity' => $newQuantity]);
        } else {
            return response()->json(['success' => false, 'message' => 'Quantity cannot be negative']);
        }
    }
}
