@extends('userproduk.template')

@section('content')


<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 text-center">
            <hr>
            <h3 style="font-weight:bolder">LOGIN</h3>
            <hr>
            <div class="card text-left">
                <div class="card-body">

                    @include('template.utils.notif')
                    <form action="{{url('login')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Alamat email anda ketika mendaftar</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary mt-4" style="width: 100%;">Submit</button>



                        <div style="display: flex; margin-top: 15px; justify-content:center">
                            <a style="padding-right: 10px;border-right: 2px solid black; text-decoration: none; color:black" href="{{url('template')}}"> KEMBALI</a>

                            <a style="text-decoration: none; color: black; margin-left: 10px;" href="{{url('register')}}"> DAFTAR</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection