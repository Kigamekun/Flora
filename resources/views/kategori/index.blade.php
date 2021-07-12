@extends('kategori')
@section('main')
@if(session()->get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('success')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<a href="{{ url('kategori/create')}}" class="btn btn-primary mb-1">Add New</a>
<div class="row">

<div class="col-md-12">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Jenis Kategori</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategori as $e=>$k)
            <tr>
                <td>{{$e+1}}</td>
                <td>{{$k->jenis_kategori}}</td>
                <td><a class="btn btn-primary btn-sm" href="{{ url("/kategori/{$k->id}/edit")}}"><i class="fa fa-edit"></i></a>

                    <form action="{{url('kategori/'.$k->id)}}" class="d-inline" onsubmit="return confirm('Are you sure deleted data?')"  method="POST">
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
    {{ $kategori->links() }}
</div>
</div>
@endsection
