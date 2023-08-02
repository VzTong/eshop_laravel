<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function detailsClient(string $id)
    {
        $Special_Offer = DB::table('products')
                                ->where('prd_code', 'SP04')
                                ->orderBy('id', 'desc')
                                ->take(4)
                                ->get();
        $data = Products::findOrFail($id);
        return view("clients.products.details", compact("data"))
                ->with('Special_Offer', $Special_Offer);
    }

    public function special_offers(){
        $Special_Offer = DB::table('products')
                                ->where('prd_code', 'SP04')
                                ->orderBy('id', 'desc');
        return view("clients.products.special_offers")
                ->with('Special_Offer', $Special_Offer);
    }
    public function kitchen(){
        $kitchen = DB::table('products')
                                ->where('prd_code', 'K01')
                                ->orderBy('id', 'desc')
                                ->get();
        return view("clients.products.kitchen")
                ->with('kitchen', $kitchen);
    }
    public function personal_Care(){
        $personal_Care = DB::table('products')
                                ->where('prd_code', 'PC02')
                                ->orderBy('id', 'desc')
                                ->get();
        return view("clients.products.personal_Care")
                ->with('personal_Care', $personal_Care);
    }
    public function household(){
        $household = DB::table('products')
                                ->where('prd_code', 'H03')
                                ->orderBy('id', 'desc')
                                ->get();
        return view("clients.products.household")
                ->with('household', $household);
    }
}
