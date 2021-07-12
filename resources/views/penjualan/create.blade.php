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
    <h2 class="display-6">Add Penjualan</h2>
</div>
<div class="row">
    @csrf
    <div class="col-md-8 offset-sm-2">
        <form id="penjualan" action="{{ url("/penjualan")}}" method="post" autocomplete="on">
            {{ csrf_field() }}
            <div class="form-group">

                <input type="text" value="{{ Auth::user()->id}} " name="user_id" hidden="hidden">
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama Barang  @error('barang_id') ! {{$message}} @enderror</label>
                <div class="input-field">

             <input type="text" id="barang_id" class="form-control mdb-autocomplete" >
            </div></div>
            <div class="form-group">
                <input type="text" id="id" name="barang_id" class="form-control prc" value="" hidden="hidden">
            </div>
            <div class="form-group">
                <label for="harga" >Harga/pc</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                <input type="text" id="harga_jual" name="harga_jual" class="form-control prc" value="" disabled="disabled"></div>
            </div>
                        <div class="form-group">
                <label for="jumlah" @error('jumlah')
                class="text-danger"
            @enderror>Jumlah  @error('jumlah') ! {{$message}} @enderror </label>
                <input type="text" id="jumlah" name="jumlah"  class="form-control prc">
            </div>
            <div class="form-group">
                <label for="total_harga" >Harga Total</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                <input type="text" id="total_harga" name="total_harga" class="form-control prc"></div>
            </div>
            <div class="form-group" id="datetimepicker">
                <label for="tgl_jual" @error('tgl_jual')
                class="text-danger"
            @enderror>Tanggal Penjualan  @error('tgl_jual') ! {{$message}} @enderror </label>
                <input type="date" name="tgl_jual" class="form-control prc">
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $.ajax({
            type:'get',
            url:'{!!URL::to('findbarang')!!}',
            success:function(response){
                console.log(response);
                var barangArray= response;
                var databarang={};
                var databarang2={};

                for(var i=0;i<barangArray.length;i++){
                    databarang[barangArray[i].nama_barang]=null;
                    databarang2[barangArray[i].nama_barang]=barangArray[i];
                }
                console.log("databarang2");
                console.log(databarang2);

                $('#barang_id').autocomplete({
                data: databarang,
                onAutocomplete:function(reqdata){
                    console.log(reqdata);
                    $('#harga_jual').val(databarang2[reqdata]['harga_jual']);
                    $('#id').val(databarang2[reqdata]['id']);

                }
                });

            //end
            }
        })
        $(function(){
            $('#jumlah, #harga_jual').keyup(function(){
               var jumlah = parseFloat($('#jumlah').val()) || 0;
               var harga_jual = parseFloat($('#harga_jual').val()) || 0;
               $('#total_harga').val(jumlah * harga_jual);
            });
         });
         $('.datepicker').datepicker();
    });
</script>

@endsection
