@extends('template.template')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Detail Data User
                </div>
                <div class="card-body">
                    <h3>{{$user->nama}}</h3>
                    <hr>
                    <p>
                        Username: @ {{$user->username}} <br>
                        Email: {{$user->email}} <br>
                        No-Handphone: {{$user->detail->no_hp}} <!-- $user = merujuk pada model user, ->detail = merujuk pada function yg ada pada mode user -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection