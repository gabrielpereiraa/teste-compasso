<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product\Product;
use Illuminate\Support\Facades\DB;
use App\Models\Store\Store;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $stores = Store::where('user_id', Auth::user()->id)->count();

        $products = DB::table('products')
            ->join('stores', 'products.store_id', '=', 'stores.id')
            ->where('user_id', Auth::user()->id)
            ->count();

        return view('home', compact('stores', 'products'));
    }
}
