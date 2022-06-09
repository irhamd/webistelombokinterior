@extends('body')
@section('content')
    <div class="fixed-bottom">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 alert bg-dark">
            <div class="address">
                <h3 class="text text-warning">Hubungi Kami </h3>
                <ul class="loca">
                    <li style="display:  flex">
                        <a href="Javascript:void(0)"><img src="icon/loc.png" alt="#" />
                        </a>
                        Jln. Banda No. 9 Mataram <br> Gunungsari NTB
                    </li>
                    <li>
                        <a href="Javascript:void(0)"><img src="icon/2.png" alt="#" /> &nbsp; <img src="icon/whatsapp.png"
                                alt="#" /></a>(+62)
                        813-3188-0750 &nbsp; <b class="text text-warning"> (Yuda) </b>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 position-static fixed-top">
                    <h2>Lombok Interior</h2>
                    <form class="news">
                        <input class="newslatter" placeholder="Cari produk ..." type="text" name=" Enter Your Email">
                        <button class="submit">Cari</button>
                    </form>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="address">
                                <h3>Brand </h3>
                                <a href="/"> <img class="logo2" src="images/logo1.png" alt="logo"></a>

                            </div>
                            <br>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="address">
                                <h3>Kategori </h3>
                                <ul class="Links_footer">
                                    <li class="active"><a href=""> <i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Dapur </a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Perkantoran </a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Kamar Tidur</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Ruang
                                            Kerja </a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="address">
                                <h3>Kontak Kami </h3>
                                <ul class="loca">
                                    <li style="display:  flex">
                                        <a href="Javascript:void(0)"><img src="icon/loc.png" alt="#" /></a>
                                        Jln. Banda No. 9 Mataram <br> Gunungsari NTB
                                    </li>
                                    <li>
                                        <a href="Javascript:void(0)"><img src="icon/2.png" alt="#" /></a>(+62)
                                        813-3188-0750
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="viewport">
            <ul class="list">

                @foreach ($kategori as $item)
                    <li class="item">{{ $item->kategori  }}</li>
                @endforeach

            </ul>
        </div>
    </div>

    <div id="client" class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Daftar Produk <span class="black"> Kursi</span></h2>
                        <strong></strong>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($data as $item)
                    <div class="col-md-6">
                        <div class="clients_img" style="border-radius: 4px">
                            <a href="/detailproduk?post_desain={{ $item->id }}">
                                <img class="gambar" src="/post/upload/{{ $item->gambar }}" style="width: 100%;">
                            </a>
                            <ul class="sociel1">
                                <li> <a href="Javascript:void(0)"><i class="fa fa-eye" style="color: grey">
                                        </i> </a> </li>
                                <li>
                                    <p style="padding: 3px 10px 0px 5px"> {{ $item->view }} </p>
                                </li>
                                <li> <a href="Javascript:void(0)"><i class="fa fa-comments-o" style="color: grey">
                                        </i> </a> </li>
                                <li>
                                    <p style="padding: 3px 10px 0px 5px"> {{ $item->komentar }} </p>
                                </li>
                                <li> <a href="Javascript:void(0)"><i class="fa fa-shopping-cart" style="color: grey"> </i>
                                    </a>
                                </li>
                                <li>
                                    <p style="padding: 3px 10px 0px 5px"> {{ $item->beli }} </p>
                                </li>

                            </ul>
                            <p>
                                <a href="/detailproduk?post_desain={{ $item->id }}">
                                    <h4 class="upper"> <b> {{ $item->namaproduk }} </b> </h4>
                                </a> <br>
                                {{ $item->deskripsi }}
                                <b> <a class="" href="/detailproduk?post_desain={{ $item->id }}">Lihat
                                        ...</a> </b>
                            </p>
                            <p class="dalam"> </p>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="row text-center">
                <p>Copyright 2022 @<a href="https://html.design/">YudishRaden</a></p>
                <ul class="sociel">
                    <li> <a href="Javascript:void(0)"><i class="fa fa-facebook-f"></i></a>
                    </li>
                    <li> <a href="Javascript:void(0)"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li> <a href="Javascript:void(0)"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                    <li> <a href="Javascript:void(0)"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
