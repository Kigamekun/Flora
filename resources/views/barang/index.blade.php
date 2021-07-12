@extends('barang')
@section('main')
@if(session()->get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('success')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<a href="{{ url('barang/create')}}" class="btn btn-primary mb-1">Add New</a>
<div class="row">
<div class="col-md-12">
    <table id="table" class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Kategori</th>
                <th>Nama Barang</th>

                <th>Stok</th>

                <th>Harga Jual</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $e=>$k)
            <tr>
                <td>{{$e+1}}</td>
                <td>{{$k->kategori->jenis_kategori}}</td>
                <td>{{$k->nama_barang}}</td>

                <td>{{$k->stok}}</td>

                <td>${{number_format($k->harga_jual,0,',','.')}}</td>
                <td>@if($k['gambar'])
                    <img src="{{ asset('storage/'.$k['gambar']) }}" width="70" height="100" alt="">
                    @else
                        Nothing image
                        @endif

                </td>
                <td><a class="btn btn-primary btn-sm" href="{{ url("/barang/{$k->id}/edit")}}"><i class="fa fa-edit"></i></a>

                    <form action="{{url('barang/'.$k->id)}}" class="d-inline" onsubmit="return confirm('Are you sure deleted data?')"  method="POST">
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
    {{ $barang->links() }}
</div>

</div>
@endsection
@push('script')
<script>
    $(document).ready(function() {
  $('#table').DataTable();
} );
</script>
@endpush
