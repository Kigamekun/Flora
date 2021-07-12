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
<div class="row">
    <h2 class="display-6">Edit Pasok</h2>
</div>
<div class="row">

    <div class="col-md-8 offset-sm-2">
        <form action="{{ url("/pasok/{$pasok->id}") }}" method="post">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label @error('barang_id')
                class="text-danger"
            @enderror>Nama Barang   @error('barang_id') ! {{$message}} @enderror</label>
                <select name="barang_id" class="form-control">
                    <option value="">-- Select Barang --</option>
                    @foreach($barang as $item)
                    <option value="{{$item->id}}"{{old('barang_id',$pasok->barang_id == $item->id ? 'selected' : null)}}>{{$item->nama_barang}}</option>
                    @endforeach
                </select>
             </div>
            <div class="form-group">
                <label for="jumlah"  @error('jumlah')
                class="text-danger"
            @enderror>Jumlah   @error('jumlah') ! {{$message}} @enderror</label>
                <input type="text" name="jumlah" class="form-control" value="{{$pasok->jumlah}}">
            </div>
            <div class="form-group">
                <label for="tgl_pasok"  @error('tgl_pasok')
                class="text-danger"
            @enderror>Tanggal Pasok   @error('tgl_pasok') ! {{$message}} @enderror</label>
                <input type="date" name="tgl_pasok" class="form-control" value="{{$pasok->tgl_pasok}}">
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
</div>
@endsection
