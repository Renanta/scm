<?php

namespace App\Http\Controllers;

use App\Pesanan;
use App\Stock;
use App\Suplier;
use Illuminate\Http\Request;
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
    public function index()
    {
        if (Auth::user()->role == 1) {
            $data = Suplier::all();
            return view('suplier.supliers.index', compact('data'));
        } else if (Auth::user()->role == 2) {
            $data = Stock::all();
            return view('contractor.stocks.index', compact('data'));
        } else {
            $data = Pesanan::all();
            return view('stakeholder.pesanan.index', compact('data'));
        }
    }
}
