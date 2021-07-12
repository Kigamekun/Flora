<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use App\kategori;

class landingController extends Controller
{
    public function index(Request $request){
        $kategori = kategori::simplePaginate(9);
        $barang = barang::simplePaginate(9);

        return view('landing.index',compact('barang','kategori'));
    }
    public function detail($id){
        $barang = barang::where('id',$id)->first();
        $kategori = kategori::all();
        return view('landing.detail',compact('barang','kategori'));
    }
    public function search(){
        $search_text = $_GET['query'];
        $barang = barang::where('nama_barang','LIKE','%'.$search_text.'%')->with('kategori')->get();
        return view('landing.search',compact('barang'));
    }
}
