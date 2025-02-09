@extends('template.template')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Detail Data Produk
                </div>
                <div class="card-body">
                    <h3>{{$produk->nama}}</h3>
                    <hr>
                    <p>
                        {{$produk->harga}} <br>
                        Stok: {{($produk->stok)}} <br>
                        Berat: {{($produk->berat)}} gr
                    </p>
                    <br>
                    <p>
                        {!! nl2br($produk->deskripsi) !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection