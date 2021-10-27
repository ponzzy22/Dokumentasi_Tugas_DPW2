@extends('layout.v_template_produk')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    FILTER
                </div>
                <div class="card-body">
                    <form action="{{ url('produk/filter') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Stok</label>
                        <input type="text" class="form-control" name="stok">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Harga Min</label>
                                <input type="text" class="form-control" name="harga_min"  value="{{$harga_min ?? "" }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Harga Max</label>
                                <input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? "" }}">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" class="btn btn-dark float-right"><i class="fa fa-search"></i>CARI</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    DATA PRODUK
                    <a href="{{url('produk/create')}}" class="btn btn-success float-right"><i class="fa fa-plus"></i> TAMBAH</a>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>User</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>                            
                            </thead>
                            <tbody>
                                @foreach ($list_produk as $produk)
                                <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$produk->seller->name}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{url('produk', $produk->id)}}" class="btn btn-primary"><i class="fa fa-info"></i></a> |
                                    <a href="{{url('produk', $produk->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a> |
                                    <form action="{{url('produk', $produk->id)}}" method="post" class="form-inline" onsubmit="return confirm('Yakin kan aku')">
                                    @csrf
                                    @method("delete")
                                    <button class="btn btn-danger" ><i class="fa fa-trash"></i></button>
                                    </div>
                                    </form>
                                </td>
                                <td>{{$produk->nama}}</td>
                                <td>{{$produk->harga}}</td>
                                <td>{{$produk->stok}}</td>   
                              
                                @endforeach
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection