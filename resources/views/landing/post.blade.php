    @foreach ($barang as $b)
                    @if($b['gambar'])
                    <img src="{{ asset('storage/'.$b['gambar']) }}" width="200px" height="300" alt="">
                    @else
                        Nothing image
                        @endif
                <h4>{{$b->nama_barang}}</h4>
                <h5>{{$b->kategori->jenis_kategori}}</h5>
                <h5><strong>Stok  : {{$b->stok}}</strong> </h5>
                <h5><strong>Price : ${{number_format($b->harga_jual,0,',','.')}}</strong></h5><br>
                <a href="{{url('/detail')}}/{{$b->id}}" class="btn btn-primary">Detail</a>
                @endforeach
                {{ $barang->links() }}
