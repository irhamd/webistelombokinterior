@extends('body')
@section('content')
    @include('component/header')


    <!-- end designs -->
    <!-- service -->
    <br>
    <div class="container">
        <div class="row">
            <div class=" col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="titlepage">
                    <h2> <span class="black_bg">Detail </span> Desain</h2>
                </div>
            </div>
            <div class=" col-xl-8 col-lg-8 col-md-8 col-sm-12">
                <ul class="retail">
                    <li><a href="Javascript:void(0)">RESIDENTAL</a></li>
                    <li><a href="Javascript:void(0)">RETAIL DESIGN</a></li>
                    <li><a href="Javascript:void(0)">SPACE ADAPTATION</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="service_img w-100">
                    <figure><img src="/post/upload/{{ $single->gambar }}"></figure>
                    <p class="dalam"> </p>
                </div>
            </div>
            <div class="col-md-12">
                <ul class="sociel text-center" style="margin-top: 15px">
                    <li> <a href="Javascript:void(0)"><i class="fa fa-eye" style="color: grey; margin-top : -15px">
                            </i> </a> </li>
                    <li>
                        <p style="padding: 3px 10px 0px 5px; "> {{ $single->view }} </p>
                    </li>
                    <li> <a href="Javascript:void(0)"><i class="fa fa-comments-o" style="color: grey; margin-top : -15px">
                            </i> </a> </li>
                    <li>
                        <p style="padding: 3px 10px 0px 5px; "> {{ $single->komentar }} </p>
                    </li>
                    <li> <a href="Javascript:void(0)"><i class="fa fa-shopping-cart"
                                style="color: grey; margin-top : -15px"> </i> </a>
                    </li>
                    <li>
                        <p style="padding: 3px 10px 0px 5px; "> {{ $single->beli }} </p>
                    </li>
                </ul>
                <div class="service_box">
                    <h3>{{ $single->namaproduk }}</h3>
                    <p> {{ $single->deskripsi }} </p>
                    <a class="read_more" href="/cari-produk">Pesan</a>
                </div>
            </div>

        </div>
    </div>
    <!-- end service -->
    <!-- clients -->
    <div id="client" class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="clients_img" style="padding: 20px 30px ; text-align: justify">
                        <i><img src="images/icon.png" alt="#" /></i>
                        <div class="col-md-12">
                            <div class="titlepage">
                                <h2>{{ $single->namaproduk }}</h2>
                                <strong></strong>
                            </div>
                        </div>
                        {!! html_entity_decode($single->body_desain) !!}
                        <br><br>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end our clients -->
    <!-- map -->
    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Hubungi Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <form id=" color_chang" class="main_form">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <input class="form-control" placeholder="Name" type="text" name="Name">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <input class="form-control" placeholder="Email" type="text" name="Email">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <input class="form-control" placeholder="Nomor HP" type="text" name="Nomor HP">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <textarea class="textarea" placeholder="Pesan" type="text" name="Pesan"></textarea>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <button class="send">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="map_section">
                        <div id="map">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
