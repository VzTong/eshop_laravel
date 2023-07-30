<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $All_data= DB::table('products')
                        ->orderByDesc('id')
                        ->get();
        $Kitchen = DB::table('products')
                        ->where('prd_code', 'K01')
                        ->orderBy('id', 'desc')
                        ->take(4)
                        ->get();
        $Personal_Care = DB::table('products')
                                ->where('prd_code', 'PC02')
                                ->orderBy('id', 'desc')
                                ->take(4)
                                ->get();
        $Household = DB::table('products')
                            ->where('prd_code', 'H03')
                            ->orderBy('id', 'desc')
                            ->take(4)
                            ->get();
        $Special_Offer = DB::table('products')
                                ->where('prd_code', 'SP04')
                                ->orderBy('id', 'desc')
                                ->take(4)
                                ->get();
        return view('clients.home.index')
                ->with('All_data', $All_data)
                ->with('Kitchen', $Kitchen)
                ->with('Personal_Care', $Personal_Care)
                ->with('Household', $Household)
                ->with('Special_Offer', $Special_Offer);
    }

}
