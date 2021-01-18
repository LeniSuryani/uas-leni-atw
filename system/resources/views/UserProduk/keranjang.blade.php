@extends('userproduk.template')

@section('content')

<!-- isi -->
<div class="checkout">
    <div class="container">

        <h3>My Shopping Bag</h3>

        <div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
            <table class="timetable_sub">
                <thead>
                    <tr>
                        <th>Remove</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Product Name</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tr class="rem1">
                    <td class="invert-closeb">
                        <div class="rem">
                            <div class="close1"> </div>
                        </div>
                        <script>
                            $(document).ready(function(c) {
                                $('.close1').on('click', function(c) {
                                    $('.rem1').fadeOut('slow', function(c) {
                                        $('.rem1').remove();
                                    });
                                });
                            });
                        </script>
                    </td>
                    <td class="invert-image"><a href="single.html"><img src="{{url('public')}}/uas-atw/images/w4.png" alt=" " class="img-responsive" /></a></td>
                    <td class="invert">
                        <div class="quantity">
                            <div class="quantity-select">
                                <div class="entry value-minus">&nbsp;</div>
                                <div class="entry value"><span>1</span></div>
                                <div class="entry value-plus active">&nbsp;</div>
                            </div>
                        </div>
                    </td>
                    <td class="invert">Hand Bag</td>
                    <td class="invert">$45.99</td>
                </tr>
                <tr class="rem2">
                    <td class="invert-closeb">
                        <div class="rem">
                            <div class="close2"> </div>
                        </div>
                        <script>
                            $(document).ready(function(c) {
                                $('.close2').on('click', function(c) {
                                    $('.rem2').fadeOut('slow', function(c) {
                                        $('.rem2').remove();
                                    });
                                });
                            });
                        </script>
                    </td>
                    <td class="invert-image"><a href="single.html"><img src="{{url('public')}}/uas-atw/images/ep3.png" alt=" " class="img-responsive" /></a></td>
                    <td class="invert">
                        <div class="quantity">
                            <div class="quantity-select">
                                <div class="entry value-minus">&nbsp;</div>
                                <div class="entry value"><span>1</span></div>
                                <div class="entry value-plus active">&nbsp;</div>
                            </div>
                        </div>
                    </td>
                    <td class="invert">Watches</td>
                    <td class="invert">$45.99</td>

                </tr>


                <!--quantity-->
                <script>
                    $('.value-plus').on('click', function() {
                        var divUpd = $(this).parent().find('.value'),
                            newVal = parseInt(divUpd.text(), 10) + 1;
                        divUpd.text(newVal);
                    });

                    $('.value-minus').on('click', function() {
                        var divUpd = $(this).parent().find('.value'),
                            newVal = parseInt(divUpd.text(), 10) - 1;
                        if (newVal >= 1) divUpd.text(newVal);
                    });
                </script>
                <!--quantity-->
            </table>
        </div>


        <div class="container mt-5 d-flex justify-content-between">
            <div class="checkout-left-basket animated wow slideInLeft mr-2" data-wow-delay=".5s">
                <h4>Shopping basket</h4>
                <ul>
                    <li>Hand Bag <i>-</i> <span>$45.99</span></li>
                    <li>Watches <i>-</i> <span>$45.99</span></li>
                    <li>Sandals <i>-</i> <span>$45.99</span></li>
                    <li>Wedges <i>-</i> <span>$45.99</span></li>
                    <li>Total <i>-</i> <span>$183.96</span></li>
                </ul>
            </div>
            <div class="card ml-2">
                <div class="card-body">
                    <form class="bg-light p-5 text-left" style="border-radius: 10px">
                        <h3 class="text-bold" style="font-size: 20px;">ALAMAT PENGIRIMAN</h3>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Nama harus sesuai dengan KTP</div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="" class="control-label">Provinsi</label>
                                    <select name="" class="form-control" onchange="gantiProvinsi(this.value)">
                                        <option value="">Pilih Provinsi</option>
                                        @foreach($list_provinsi as $provinsi)
                                        <option value="{{$provinsi->id}}">{{$provinsi->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="control-label">Kabupaten</label>
                                    <select name="" class="form-control" id="Kabupaten" onchange="gantiKabupaten(this.value)">
                                        <option value="">Pilih Kabupaten</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="control-label">Kecamatan</label>
                                    <select name="" class="form-control" id="kecamatan" onchange="gantiKecamatan(this.value)">
                                        <option value="">Pilih Provinsi</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="control-label">Desa</label>
                                    <select name="" class="form-control" id="desa">
                                        <option value="">Pilih Provinsi</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Ekspedisi</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //content -->


@endsection


@push('script')
<script>
    function gantiProvinsi(id) {
        $.get("api/provinsi/" + id, function(result) {
            result = JSON.parse(result)
            option = ""
            for (item of result) {
                option += `<option value="${item.id}">${item.name}</option>`;
            }
            $("#Kabupaten").html(option)
        });
    }

    function gantiKabupaten(id) {
        $.get("api/kabupaten/" + id, function(result) {
            result = JSON.parse(result)
            option = ""
            for (item of result) {
                option += `<option value="${item.id}">${item.name}</option>`;
            }
            $("#kecamatan").html(option)
        });
    }

    function gantiKecamatan(id) {
        $.get("api/kecamatan/" + id, function(result) {
            result = JSON.parse(result)
            option = ""
            for (item of result) {
                option += `<option value="${item.id}">${item.name}</option>`;
            }
            $("#desa").html(option)
        });
    }
</script>
@endpush

</body>

</html>