@extends('layout.v_template_produk')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    TAMBAH DATA USER
                    <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                        </div>
                    @endif
                    
                        <form action="{{url('user')}}" method="post">
                        @csrf
                        <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Email</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="control-label">Password</label>
                                <input type="text" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="control-label">No HP</label>
                                <input type="text" class="form-control" name="no_handphone">
                            </div>
                        </div>
                </div>
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