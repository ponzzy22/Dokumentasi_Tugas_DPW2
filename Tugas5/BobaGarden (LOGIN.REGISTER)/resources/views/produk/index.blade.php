@extends('layout.v_template_produk')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    DATA PRODUK
                    <a href="{{url('produk/create')}}" class="btn btn-success float-right"><i class="fa fa-plus"></i> TAMBAH</a>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>                            
                            </thead>
                            <tbody>
                                @foreach ($list_produk as $produk)
                                <tr>
                                <td>{{$loop->iteration}}</td>
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