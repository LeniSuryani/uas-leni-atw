@extends('userproduk.template')

@section('content')

<!-- isi -->
<div class="electronics">
    <div class="container" style="margin-top: -80px;">

        <div class="clearfix"></div>

        <div class="ele-bottom-grid">
            <h3>Koleksi <span>Lenstore </span></h3>
            <p>Kami menyediakan koleksi dengan berkualitas premium dan limited edition</p>

            @foreach($list_produk as $produk)
            <div class="col-md-3 product-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="{{url("public/$produk->foto")}}" alt="" class="pro-image-front">
                        <img src="{{url("public/$produk->foto")}}" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>

                    </div>
                    <div class="item-info-product ">
                        <p>{{$produk->nama}}</p>
                        <div class="info-product-price" style="margin-top: -20px;">
                            <span class="item_price">{{$produk->harga}}</span>
                            <!-- <del>$700.71</del> -->
                        </div>
                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="clearfix"></div>
            <div class="text-center mt-3">
                {!! $list_produk->links() !!}
            </div>
        </div>
    </div>
</div>
<!-- //content -->

@endsection