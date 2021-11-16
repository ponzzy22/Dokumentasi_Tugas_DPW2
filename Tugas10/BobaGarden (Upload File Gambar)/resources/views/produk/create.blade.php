@extends('layout.v_template_produk')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    TAMBAH DATA PRODUK
                   <div class="card-body">
                       <form action="{{url('produk')}}" method="post" enctype="multipart/form-data">
                        @csrf
                       <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="control-label">Harga</label>
                                <input type="text" class="form-control" name="harga">
                            </div>
                        </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">Foto</label>
                                    <input type="file" class="form-control" name="foto" accept=".png">
                                </div>
                            </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="control-label">Berat</label>
                                <input type="text" class="form-control" name="berat"nam>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="control-label">Stok</label>
                                <input type="text" class="form-control" name="stok">
                            </div>
                        </div>
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control">
                        
                    </textarea>
                </div>
                
                    <button class="btb btn-dark float-right"><i class="fa fa-save"></i>SIMPAN</button>     
                </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection