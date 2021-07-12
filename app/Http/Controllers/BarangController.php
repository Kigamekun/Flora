<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use App\kategori;
use DB;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    private function _validation(Request $request){
        $validation = $request->validate([
            'kategori_id'=> 'required',
            'nama_barang'=>'required|max:60',
            'stok'=>'required',
            'harga_jual'=>'required',
            'gambar'=> 'required|mimes:jpg,png,jpeg,gif,svg|image|max:2048'
        ]);

    }
    public function index()
    {
        $barang = barang::all();

        return view('barang.index',['barang'=> barang::with('kategori')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori::all();

        return view('barang.create',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->_validation($request);
       if($request->file('gambar')){
           $gambar = $request->file('gambar')->store('gambar','public');
       }
       else {
           $gambar = null;
       }
       $barang = new barang;
       $barang->kategori_id = $request->kategori_id;
       $barang->nama_barang = $request->nama_barang;

       $barang->stok = $request->stok;

       $barang->harga_jual = $request->harga_jual;
       $barang->gambar = $gambar;


        $barang->save();
        return redirect('/barang')->with('success','Insert Barang Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = kategori::all();
        $barang = barang::find($id);
        return view('barang.edit', compact('barang','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->file('gambar')){
            $gambar = $request->file('gambar')->store('gambar','public');
            $data = barang::find($id);
            if ($data->gambar){
                Storage::delete('public/'.$data->gambar);
                $data->gambar = $gambar;
            }
            else{
                $data->gambar = $gambar;
            }
            $data->save();
        }
        else{
            $gambar=null;
        }
        $barang = barang::find($id);
        $barang->kategori_id = $request->input('kategori_id');
        $barang->nama_barang = $request->input('nama_barang');
        $barang->stok = $request->input('stok');
        $barang->harga_jual = $request->input('harga_jual');
        $barang->gambar =
        $barang->save();

        return redirect('/barang')->with('success','Update Barang Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = barang::find($id);
        $barang->delete();
        return redirect('/barang')->with('success','Delete Barang Success');
    }

}
