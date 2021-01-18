@extends('template.template')

@section('content')
<!-- card-->
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body bg-warning">
                    <div class="market-update-block clr-block-2 d-flex">
                        <div class="col-md-4 market-update-right">
                            <i style="font-size: 50px" class="fas fa-tshirt"> </i>
                        </div>
                        <div class="col-md-8 market-update-left">
                            <h4>PRODUK</h4>
                            <h3>13,500</h3>

                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body bg-info">
                    <div class="market-update-block clr-block-1 d-flex">
                        <div class="col-md-4 market-update-right">
                            <i style="font-size: 50px" class="fa fa-delicious"></i>
                        </div>
                        <div class="col-md-8 market-update-left">
                            <h4>KATEGORI</h4>
                            <h3>1,250</h3>

                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body bg-success">
                    <div class="market-update-block clr-block-3 d-flex">
                        <div class="col-md-4 market-update-right">
                            <i style="font-size: 50px" class="fa fa-usd"></i>
                        </div>
                        <div class="col-md-8 market-update-left">
                            <h4>DISKON</h4>
                            <h3>1,500</h3>

                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- akhir card-->

@endsection