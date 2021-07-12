<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;
use App\barang;
use App\pasok;
use App\penjualan;
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
            $kategori = kategori::simplePaginate(10);
            $barang = barang::simplePaginate(5);
            $pasok = pasok::simplePaginate(10);
            $penjualan = penjualan::simplePaginate(5);
            return view('dashboard.index',compact('barang','kategori','pasok','penjualan'));
    }
}
