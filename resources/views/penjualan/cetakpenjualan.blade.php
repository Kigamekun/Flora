@extends('laporan')
@section('main')
<p align="center"><b>Laporan Penjualan</b></p>
<div class="row">
<div class="col-md-12">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Kode Penjualan</th>
                <th>Nama User</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Harga/pcs</th>
                <th>Harga Total</th>
                <th>Tanggal Penjualan</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($cetakpertanggal as $k)
            <tr>
                <td>{{$k->kode}}</td>
                <td>{{$k->user->nama_user}}</td>
                <td>{{$k->barang->nama_barang}}</td>
                <td>{{$k->jumlah}}</td>
                <td>${{number_format($k->barang->harga_jual,0,',','.')}}</td>
                <td>${{number_format($k->total_harga,0,',','.')}}</td>
                <td>{{$k->tgl_jual->format('d/m/Y')}}</td>


            </tr>
            @endforeach
        </tbody>

    </table>
    <script type="text/javascript">
        window.print();
    </script>
</div>
</div>
@endsection
