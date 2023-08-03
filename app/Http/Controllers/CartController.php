<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function showCart(Request $request){
        return view('clients.cart.showCart');
    }

    public function add_cart(Request $request){
        $prd_id = $request->IDprd_hidden;
        $quantity_prd = $request->qty;
        $prd_info = DB::table('products')->where('id', $prd_id)->first();

        $data['id'] = $prd_id;
        $data['qty'] = $quantity_prd;
        $data['name'] = $prd_info->prd_names;
        $data['price'] = $prd_info->prd_selling_price;

        $cart = new Cart($data);
    }
}
