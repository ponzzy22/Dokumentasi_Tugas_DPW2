@extends('layout.v_template_user')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    DATA USER
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($list_user as $user)
                                <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{url('user', $user->id)}}" class="btn btn-primary"><i class="fa fa-info"></i></a> |
                                    <form action="{{url('user', $user->id)}}" method="post" class="form-inline" onsubmit="return confirm('Yakin kan aku')">
                                    @csrf
                                    @method("delete")
                                    <button class="btn btn-danger" ><i class="fa fa-trash"></i></button>
                                    </div>
                                    </form>
                                </td>
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