@extends('dashboard')
@section('main')
<div class="row">
    <div class="table-responsive table-bordered col-sm-5 ml-auto mrauto mt-2">
    <div class="page-header">
    <span class="fas fa-folder text-primary mt-2 ">
    Data Barang</span>
    <a href="{{url ('/barang')}}">
        <i class="fas fa-search mt-2 float-right"> Tampilkan</i></a>
    </div>
    <table class="table mt-3">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nama Kategori</th>
            <th>Nama Barang</th>
            <th>Merk Barang</th>
            <th>Stok</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($barang as $k)
        <tr>
            <td>{{$k->id}}</td>
            <td>{{$k->kategori->jenis_kategori}}</td>
            <td>{{$k->nama_barang}}</td>
            <td>{{$k->merk_barang}}</td>
            <td>{{$k->stok}}</td>
            <td>{{$k->harga_beli}}</td>
            <td>{{$k->harga_jual}}</td>

        </tr>
        @endforeach
    </tbody>

    </table>
    {{ $barang->links() }}
    </div>
    <div class="table-responsive table-bordered col-sm-5 ml-auto mrauto mt-2">
    <div class="page-header">
    <span class="fas fa-folder text-warning mt-2"> Data Kategori</span>
    <a href="{{ url('/kategori')}}"><i class="fas fa-search
    text-primary mt-2 float-right"> Tampilkan</i></a>
    </div>
    <div class="table-responsive">
    <table class="table mt-3" id="table-datatable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Jenis Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategori as $k)
            <tr>
                <td>{{$k->id}}</td>
                <td>{{$k->jenis_kategori}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
    {{ $kategori->links() }}
    </div>
    </div>
    <div class="table-responsive table-bordered col-sm-5 ml-auto mrauto mt-2">
        <div class="page-header">
        <span class="fas fa-folder text-success mt-2"> Data Penjualan</span>
        <a href="{{ url('/penjualan')}}"><i class="fas fa-search
        text-primary mt-2 float-right"> Tampilkan</i></a>
        </div>
        <div class="table-responsive">
        <table class="table mt-3" id="table-datatable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Harga/pc</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Tanggal Penjualan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penjualan as $pe)
                <tr>
                    <td>{{$pe->id}}</td>
                    <td>{{$pe->barang->nama_barang}}</td>
                    <td>{{$pe->barang->harga_jual}}</td>
                    <td>{{$pe->jumlah}}</td>
                    <td>{{$pe->total_harga}}</td>
                    <td>{{$pe->tgl_jual}}</td>
                </tr>
                @endforeach
            </tbody>

        </table>
        {{ $penjualan->links() }}
        </div>
        </div>
         <div class="table-responsive table-bordered col-sm-5 ml-auto mrauto mt-2">
    <div class="page-header">
    <span class="fas fa-folder text-danger mt-2"> Data Pasok</span>
    <a href="{{ url('/pasok')}}"><i class="fas fa-search
    text-primary mt-2 float-right"> Tampilkan</i></a>
    </div>
    <div class="table-responsive">
    <table class="table mt-3" id="table-datatable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Tanggal Pasok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pasok as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->barang->nama_barang}}</td>
                <td>{{$p->jumlah}}</td>
                <td>{{$p->tgl_pasok}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
    {{ $pasok->links() }}
    </div>
    </div>

    </div>
    @endsection
