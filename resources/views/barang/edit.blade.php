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
<div class="row">
    <h2 class="display-6">Edit Barang</h2>
</div>
<div class="row">
    <div class="col-md-8 offset-sm-2">
        <form action="{{ url("/barang/{$barang->id}") }}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label @error('kategori_id')
                class="text-danger"
            @enderror>Nama Kategori @error('kategori_id') ! {{$message}} @enderror</label>
                <select name="kategori_id" class="form-control">
                    <option value="">-- Select Kategori --</option>
                    @foreach($kategori as $item)
                    <option value="{{$item->id}}"{{old('kategori_id',$barang->kategori_id == $item->id ? 'selected' : null)}}>{{$item->jenis_kategori}}</option>
                    @endforeach
                </select>
             </div>
            <div class="form-group">
                <label for="nama_barang"  @error('nama_barang')
                class="text-danger"
            @enderror>Nama Barang  @error('nama_barang') ! {{$message}} @enderror</label>
                <input type="text" name="nama_barang" class="form-control" value="{{$barang->nama_barang}}">
            </div>

            <div class="form-group">
                <label for="stok"  @error('stok')
                class="text-danger"
            @enderror>Stok Barang  @error('stok') ! {{$message}} @enderror</label>
                <input type="text" name="stok" class="form-control" value="{{$barang->stok}}">
            </div>
            <div class="form-group">
                <label for="harga_jual"  @error('harga_jual')
                class="text-danger"
            @enderror>Harga Jual  @error('harga_jual') ! {{$message}} @enderror</label>
            <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="text" name="harga_jual" class="form-control" value="{{$barang->harga_jual}}"></div>
            </div>
            <div class="form-group">
                @if($barang['gambar'])
                <img src="{{url('storage/'.$barang['gambar'])}}" width="200px" class="img-fluid" alt="">
                @else
                Image Not Found
                @endif
            </div>
            <div class="form-group">
                <label for="gambar"  @error('gambar') class="text-danger"
            @enderror>Gambar  @error('gambar') ! {{$message}} @enderror</label>
                <input type="file" name="gambar" class="form-control"><label class="text-danger" >Gambar Max 2 MB</label>
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
</div>
@endsection
