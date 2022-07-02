@extends('body')
@section('content')
    @include('component/header')





    <!-- clients -->
    <div class="container">
        <br>
        <div class="row">
            <div class=" col-xl-4 col-lg-4 col-md-4 col-sm-12" style="justify-content: center">
                <div class="titlepage">
                    <h2> <span class="black_bg">PROFIL </span> KAMI</h2>
                </div>
            </div>

        </div>

        <div class="fixed-bottom">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 alert" style="background: #343a40c4">
                <div class="address">
                    <h3 class="text text-warning">Hubungi Kami </h3>
                    <ul class="loca">
                        <li>
                            <a href="https://api.whatsapp.com/send/?phone=%2B6281331880750&text&app_absent=0" target="_blank"><img src="icon/2.png" alt="#" /> &nbsp; <img src="icon/whatsapp.png"
                                    alt="#" />&nbsp; {{ $profil->nowa }} &nbsp; <b class="text text-warning"> (Yuda) </b> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="service_img" style="justify-content: center; text-align: center">
                    <figure><img style="width: 80%" class="image-border" src="/images/profilfoto.jpeg">
                    </figure>
                    <p class="dalam"> </p>
                    <br>
                </div>
            </div>
            <div class="col-md-12">
                <ul class="sociel text-center">
                    <li> <a href="Javascript:void(0)"><i class="fa fa-eye" style="color: grey; margin-top : -15px">
                            </i> </a> </li>
                    <li>
                        <p style="padding: 3px 10px 0px 5px; "> 9 </p>
                    </li>
                    <li> <a href="Javascript:void(0)"><i class="fa fa-comments-o" style="color: grey; margin-top : -15px">
                            </i> </a> </li>
                    <li>
                        <p style="padding: 3px 10px 0px 5px; "> </p>
                    </li>
                    <li> <a href="Javascript:void(0)"><i class="fa fa-shopping-cart"
                                style="color: grey; margin-top : -15px"> </i> </a>
                    </li>
                    <li>
                        <p style="padding: 3px 10px 0px 5px; "> 0 </p>
                    </li>
                </ul>
                <div class="service_box" style="text-align: justify">
                    <h3>Apa itu Interior Lombok?</h3>
                    <p> ILO Interior merupakan salah satu perusahaan yang bergerak dalam bidang Interior fumiture di Kota
                        Mataram. Didirikan tahun 2016, ILO Interior telah berpengalaman menangani berbagai kebutuhan
                        interior klien. dengan teknisi dan sumber daya manusia yang berpengalaman di bidangnya.
                        Berawal dari sebuah usaha dalam lingkup kecil yang mempunyai pengalaman dalam bidang pembangunan dan
                        pabrikasi furniture. Sekarang ILO Interior berkembang menjadi sebuah perusahaan yang bergerak di
                        bidang interior desain, arsitektur, kontraktor produk interior dan fumiture untuk hotel, bungalow,
                        rumah hunian, apartemen, kantor, ruko, restoran, serta pabrik.
                        Inovasi dan inspirasi selalu menjadi penyemangat dalam menjalankan semua proyek. ILO Interior
                        berusaha memberikan pelayanan produk yang premium bagi klien.
                    </p>

                    <h3>VISI kami </h3>
                    <p style="text-align: justify"> Menjadikan ILO Interior sebagai perusahan andalan yang bisa memberikan solusi terbaik dalam hal
                        desain interior dan furniture custom.
                        Making 1LO interior as a mainstay company that can provide the best solutions in terms of interior
                        design and custom furniture.
                    </p>

                    <h3>MISI kami </h3>
                    <p style="text-align: justify"> Penuh inovasi dalam pengerjaan proyek
                        Memberikan kualitas, ketepatan dan harga yang kompetitif
                        Memberikan desain yang mendetail pada klien
                        -
                        Full of innovation in project work
                        Providing quality, accuracy, and competitive 481 prices Provide a detailed design to the clients
                    </p>

                    <h3>SERVIS kami </h3>
                    <p style="text-align: justify"> Workshop ILO Interior Berlokasi di Komplek Taman Sejahtera, Ampenan Utara, Kota Mataram. ILO
                        Interior didukung oleh staf dan tenaga kerja profesional dan ahli dalam bidangnya yang dapat di
                        sesuaikan dengan tuntutan proyek. Kami memiliki kapasitas produksi hingga 3000 M2 per bulan untuk
                        menyesuaikan pekerjaan.
                        ILO interior workshop is located in Komplek Taman Sejahtera, North Ampenan, Mataram. ILO interior
                        are supported by staff and professionals and experts in their fields which can be adjusted to the
                        demands of the project We have o production capacity up to 3000 M2 per month to match</p>


                    <h3>Jalur Bisnis </h3>
                    <p style="text-align: justify"> Lingkup pekerjaan ILO Interior meliputi: ILO's scope of work includes: Konsep Desain Design Concept
                        Desain Interior Design interior Furniture Custom Custom Furniture Konstruksi Construction Pemasangan
                        Installation Perabot Interior Interior furniture Pekerjaan Sipil Civil works </p>


                    <a class="read_more" href="/cari-produk">Pesan</a>
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
                {{-- <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
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
                </div> --}}
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="map_section">
                        <div id="map">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
