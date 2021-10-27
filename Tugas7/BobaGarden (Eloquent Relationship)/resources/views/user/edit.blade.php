@extends('layout.v_template_produk')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    TAMBAH DATA USER
                   <div class="card-body"> 

                       <form action="{{url('user', $user->id)}}" method="post">
                        @csrf
                        @method("put")

                       <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="name" value="{{$user->name}}">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Email</label>
                                <input type="text" class="form-control" name="email" value="{{$user->email}}">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="control-label">Password</label>
                                <input type="text" class="form-control" name="password" value="{{$user->password}}">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="control-label">No HP</label>
                                <input type="text" class="form-control" name="no_handphone" value="{{$user->detail->no_handphone}}">
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