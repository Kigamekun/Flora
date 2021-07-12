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
<div class="row">
<div class="col-md-12">
   <div class="form-group">
       <label for="tglawal"> Tanggal Awal</label>
        <input type="date" name="tglawal" id="tglawal" class="form-control">
   </div>
      <div class="form-group">
       <label for="tglawal"> Tanggal Akhir</label>
        <input type="date" name="tglakhir" id="tglakhir" class="form-control">
   </div>
   <a href="" onclick="this.href='/penjualan/cetakjual/'+document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value" target="_blank" class="btn btn-primary">Cetak Penjualan <i class="fas fa-print"></i></a>
</div>
</div>
@endsection
