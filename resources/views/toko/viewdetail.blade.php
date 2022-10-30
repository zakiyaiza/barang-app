@extends('layouts.header')

@section ('contain1')
<section class="masthead bg-secondary text-white text-center">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    @foreach($barang  as $item)
        <div class="row">
        <div class="col-4">
            <img src="{{asset('asset/img_produk')}}/{{$item->foto}}" alt="" class="img-fluid rounded">
        </div>
        <div class="col-8">
            <div class=" justify-content-start" style="text-align:start;">
                <h2>{{$item->nama_barang}}</h2>
                <p>harga : Rp.{{$item->harga}}</p>
                <p>{{$item->detail}}</p>
                <p class="card-text">Stock : {{$item->stock}}</p>
                <div class="button">
                    <a href="">
                        <button type="button" class="btn btn-light">Beli Sekarang</button>
                    </a>
                </div>
                
            </div> 
        </div>
        </div>
   </div>
   @endforeach
</div>
</div>
</section>

@endsection
