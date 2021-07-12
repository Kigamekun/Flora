@extends('pasok')
@section('main')
@if(session()->get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('success')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<meta name="csrf-token" content="{{ csrf_token() }}">
<a href="{{ url('pasok/create')}}" class="btn btn-primary mb-1">Add New</a>
<div class="row">
<div class="col-md-12">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Tanggal Pasok</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pasok as $e=>$k)
            <tr>
                <td>{{$e+1}}</td>
                <td>{{$k->barang->nama_barang}}</td>
                <td>{{$k->jumlah}}</td>
                <td>{{$k->tgl_pasok->format('d/m/Y')}}</td>
                <td><a class="btn btn-primary btn-sm" href="{{ url("/pasok/{$k->id}/edit")}}"><i class="fa fa-edit"></i></a>

                        <form action="{{url('pasok/'.$k->id)}}" class="d-inline" onsubmit="return confirm('Are you sure deleted data?')"  method="POST">
                        @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </button>
                    </form>
                    </form></td>

            </tr>
            @endforeach
        </tbody>

    </table>
    {{ $pasok->links() }}
</div>
</div>
@endsection
@push('page-script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


@endpush
@push('after-script')

@endpush

