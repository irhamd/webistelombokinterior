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
                    <h2> <span class="black_bg">Our </span> Services</h2>
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
                <div class="service_img">
                    <figure><img src="images/img333.jpg"></figure>
                    <p class="dalam"> </p>
                </div>
            </div>
            <div class="col-md-12">
                <ul class="sociel text-center" style="margin-top: 15px">
                    <li> <a href="Javascript:void(0)"><i class="fa fa-eye" style="color: grey">
                            </i> </a> </li>
                    <li>
                        <p style="padding: 3px 10px 0px 5px; "> 162 </p>
                    </li>
                    <li> <a href="Javascript:void(0)"><i class="fa fa-comments-o" style="color: grey">
                            </i> </a> </li>
                    <li>
                        <p style="padding: 3px 10px 0px 5px; "> 0 </p>
                    </li>
                    <li> <a href="Javascript:void(0)"><i class="fa fa-shopping-cart" style="color: grey"> </i> </a>
                    </li>
                    <li>
                        <p style="padding: 3px 10px 0px 5px; "> 2 </p>
                    </li>
                </ul>
                <div class="service_box">
                    <h3>Design</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable
                        content of a page when looking at its layout. The point of using Lorem Ipsum is that
                        it has a more-or-less normal distribution of letters, as opposed to using 'Content
                        here, content here', making it look</p>
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
                    <div class="titlepage">
                        <h2>What Is Say <span class="black"> Clients</span></h2>
                        <strong></strong>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="clients_img">
                        <i><img src="images/icon.png" alt="#" /></i>
                        <p style="padding: 10px; text-align: justify">It is a long established fact that a reader will bQe distracted by the readable
                            content of a page when looking at its of Lorem Ipsum as their default mo
                            It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look
                            It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look

                        </p>
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
