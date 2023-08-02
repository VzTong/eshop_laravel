<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FavoritesController extends Controller
{
    public function favorites(){
        $user = Auth::user();
        $favorites = $user->favorites;

        return view('clients.home.favorites')
                ->with('favorites', $favorites);
    }
}
