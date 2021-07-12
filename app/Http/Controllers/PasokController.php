<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pasok;
use App\barang;
class PasokController extends Controller
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
            'barang_id'=> 'required',
            'jumlah'=>'required',
            'tgl_pasok'=>'required'
        ]);

    }
    public function index()
    {
        $barang = pasok::all();

        return view('pasok.index',['pasok'=> pasok::with('barang')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $barang = barang::all();

        return view('pasok.create',compact('barang'));
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
        $pasok = new pasok;
       $pasok->barang_id = $request->barang_id;
       $pasok->jumlah = $request->jumlah;
       $pasok->tgl_pasok = $request->tgl_pasok;
        $pasok->save();
        return redirect('/pasok')->with('success','Insert Pasok Success');
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
        $barang = barang::all();
        $pasok = pasok::find($id);
        return view('pasok.edit', compact('pasok','barang'));
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
        $this->_validation($request);
        $pasok = pasok::find($id);
        $pasok->barang_id = $request->input('barang_id');
        $pasok->jumlah = $request->input('jumlah');
        $pasok->tgl_pasok = $request->input('tgl_pasok');
        $pasok->save();
        return redirect('/pasok')->with('success','Update Pasok Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasok = pasok::find($id);
        $pasok->delete();
        return redirect('/pasok')->with('success','Delete Pasok Success');
    }
}
