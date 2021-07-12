<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\penjualan;
use App\barang;
use App\User;

use DB;

class PenjualanController extends Controller
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
            'tgl_jual'=>'required'
            ]);
        }
    public function index()
    {
        $penjualan = penjualan::paginate(10);
        $barang = barang::all();
        $user = User::all();
        return view('penjualan.index',compact('barang','penjualan','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $penjualan = penjualan::all();
        $barang = barang::all();
        $user = User::all();
        // return view('penjualan.create',compact('barang','penjualan','user'));

    return view('penjualan.create')->with('barang', $barang)->with('user', $user);
    }
    public function getbarang(){
        $barang = barang::all();
        return response()->json($barang);
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
        $prefix = "PJN-".date('dis');  
        $penjualan= new penjualan;
       $penjualan->user_id = $request->user_id;
       $penjualan->barang_id = $request->barang_id;
       $penjualan->kode = $prefix;
       $penjualan->jumlah = $request->jumlah;
       $penjualan->total_harga = $request->total_harga;
       $penjualan->tgl_jual = $request->tgl_jual;
      
        $penjualan->save();
        return redirect('/penjualan')->with('success','Insert Penjualan Success');
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
        $user = User::all();
        $barang = barang::all();
        $penjualan = penjualan::find($id);
        return view('penjualan.edit', compact('penjualan','barang','user'));
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
        $penjualan = penjualan::find($id);
        $penjualan->user_id = $request->input('user_id');
        $penjualan->barang_id = $request->input('barang_id');
        $penjualan->jumlah = $request->input('jumlah');
        $penjualan->total_harga = $request->total_harga;
        $penjualan->tgl_jual = $request->input('tgl_jual');
         $penjualan->save();
         return redirect('/penjualan')->with('success','Update Penjualan Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penjualan = penjualan::find($id);
        $penjualan->delete();
        return redirect('/penjualan')->with('success','Delete Penjualan Success');
    }
    // public function getEmployees($departmentid=0){

    // 	// Fetch Employees by Departmentid
    //     $empData['data'] = Employees::orderby("name","asc")
    //     			->select('id','name')
    //     			->where('department',$departmentid)
    //     			->get();

    //     return response()->json($empData);

    // }
    public function cetakform(){
        return view('penjualan.cetakform');
    }
    public function cetakpenjualanpertanggal($tglawal,$tglakhir){
        //dd(["Tanggal Awal :".$tglawal,"Tanggal Akhir :".$tglakhir]);
        $cetakpertanggal = penjualan::with('barang')->with('user')->whereBetween('tgl_jual',[$tglawal,$tglakhir])->get();
        return view('penjualan.cetakpenjualan',compact('cetakpertanggal'));
    }
}
