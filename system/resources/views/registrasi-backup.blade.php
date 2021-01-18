@extends('userproduk.template')

@section('content')


<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 text-center">
            <hr>
            <h3 style="font-weight:bolder">REGISTRASI</h3>
            <hr>
            <div class="card text-left">
                <div class="card-body">

                    @include('template.utils.notif')
                    <form action="{{url('register')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            @include('template.utils.errors', ['item' => 'nama'])
                            <input type="text" name="nama" id="" class="form-control ggg">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Username</label>
                            @if($errors->has('username'))
                            <label for="" class="label text-danger" style="background: white;"> {{$errors->get('username')[0]}}</label>
                            @endif
                            <input type="text" name="username" id="" class="form-control ggg">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Email</label>
                            @if($errors->has('email'))
                            <label for="" class="label text-danger" style="background: white;"> {{$errors->get('email')[0]}}</label>
                            @endif
                            <input type="" name="email" id="" class="form-control ggg">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">No-Handphone</label>
                                    <input type="text" name="no_hp" id="" class="form-control ggg">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Password</label>
                                    <input type="" name="password" id="" class="form-control ggg">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-4" style="width: 100%;">Submit</button>
                        <div style="display: flex; margin-top: 15px; justify-content:center;">

                            <a class="btn btn-outline-dark" href="{{url('template')}}"> KEMBALI</a>
                            <p style="margin-top: 5px;">|</p>
                            <a class="btn btn-outline-dark" href="{{url('login')}}"> LOGIN</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection