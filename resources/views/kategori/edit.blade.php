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
<div class="row">
    <h2 class="display-6">Edit Kategori</h2>
</div>
<div class="row">

    <div class="col-md-8 offset-sm-2">
        <form action="{{ url("/kategori/{$kategori->id}") }}" method="post">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label @error('jenis_kategori')
                class="text-danger"
            @enderror>Jenis Kategori @error('jenis_kategori') ! {{$message}} @enderror </label>
                <input type="text" name="jenis_kategori" class="form-control" value="{{$kategori->jenis_kategori}}">
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
</div>
@endsection
