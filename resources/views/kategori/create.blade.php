@extends('kategori')
@section('main')
<div class="row">
    <h2 class="display-6">Add Kategori</h2>
</div>
<div class="row">

    <div class="col-md-8 offset-sm-2">
        <form action="{{ url("/kategori")}}" method="post">
            @csrf
            <div class="form-group">
                <label @error('jenis_kategori')
                    class="text-danger"
                @enderror>Jenis Kategori @error('jenis_kategori') ! {{$message}} @enderror </label>
                <input type="text" name="jenis_kategori" class="form-control" value="{{old('jenis_kategori')}}">
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
</div>
@endsection
