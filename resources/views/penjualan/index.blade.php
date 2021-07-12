@extends('penjualan')
@section('main')
@if(session()->get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('success')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<a href="{{ url('penjualan/create')}}" class="btn btn-primary mb-1">Add New</a><p align="right">
<a class="fas fa-print" href="{{ url("/penjualan/cetakform")}}"> Print</a></p>
<div class="row">
<div class="col-md-12">
    <table class="table table-striped">
        <thead>
            <tr>
            <th>#</th>
                <th>Kode Penjualan</th>
                <th>Nama User</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Harga/pcs</th>
                <th>Harga Total</th>
                <th>Tanggal Penjualan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penjualan as $e=>$k)
            <tr>
            <td>{{$e+1}}</td>
                <td>{{$k->kode}}</td>
                <td>{{$k->user->nama_user}}</td>
                <td>{{$k->barang->nama_barang}}</td>
                <td>{{$k->jumlah}}</td>
                <td>${{number_format($k->barang->harga_jual, 0,',','.')}}</td>
                <td>${{number_format($k->total_harga,0,',','.')}}</td>
                <td>{{$k->tgl_jual->format('d/m/Y')}}</td>
                <td><a class="btn btn-primary btn-sm" href="{{ url("/penjualan/{$k->id}/edit")}}"><i class="fa fa-edit"></i></a>

                    <form action="{{url('penjualan/'.$k->id)}}" class="d-inline" onsubmit="return confirm('Are you sure deleted data?')"  method="POST">
                    @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                        </button>
                </form></td>

            </tr>
            @endforeach
        </tbody>

    </table>
    {{ $penjualan->links() }}
</div>
</div>
@endsection
