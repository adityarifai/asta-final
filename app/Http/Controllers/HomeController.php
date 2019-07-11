<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class HomeController extends Controller
{
    public function layanan()
    {
        $data['produks'] = Produk::all();
        return view('services', $data);
    }

    public function fortofolio()
    {
        return view('portofolio');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
