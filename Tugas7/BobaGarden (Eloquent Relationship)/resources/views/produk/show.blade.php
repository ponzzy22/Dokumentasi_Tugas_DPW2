@extends('layout.v_template_produk')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    DETAIL DATA PRODUK
                </div>
                <div class="card-body">
                    <h3>{{$produk->nama}}</h3>
                    <hr>
                    <p>
                       Rp. {{number_format($produk->harga)}} |
                       Stok : {{$produk->stok}} |
                       Berat : {{$produk->berat}} kg |
                       Seller : {{$produk->seller->name}} |
                      

                    </p>
                    <p>
                        {{$produk->deskripsi}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection