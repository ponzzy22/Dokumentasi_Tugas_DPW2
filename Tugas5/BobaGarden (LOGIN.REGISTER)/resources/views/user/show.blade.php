@extends('layout.v_template_user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    DETAIL DATA USER
                </div>
                <div class="card-body">
                    <h3>{{$user->name}}</h3>
                    <hr>
                    <p>
                       Email : {{($user->email)}} |
                       Password : {{$user->password}} |
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection