@extends('body')
@section('content')
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js"
        integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>

    <script>
        function hapusProduk(id, nama) {
            Swal.fire({
                title: 'Hapus desain produk "' + nama + '" ?',
                text: "Pastikan anda yakin untuk menghapus produk ini  .!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '/hapus-desain?id=' + id
                }
            })
        }

        function ubahData(id) {
            window.location.href = '/buat-desain-baru?id_post=' + id
        }
    </script>

    @if (Session::has('hapus'))
        @if (Session::get('hapus') == 1)
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Sukses !',
                    text: 'Anda telah menghapus salah satu desain produk .',
                    footer: '<a href="">iLo Interior </a>'
                })
            </script>
        @else
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Gagal Hapus produk !',
                    footer: '<a href="">iLo Interior !</a>'
                })
            </script>
        @endif
    @endif

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 position-static fixed-top">
                    <h2>Lombok Interior </h2>
                    <form class="news">
                        <input class="newslatter" placeholder="Cari produk ..." type="text" name="cari"
                            value="{{ request()->get('cari') }}">
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

                                    <li><a href="/list-desain?id_kategori=1"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Tempat Tidur </a>
                                    </li>
                                    <li><a href="/list-desain?id_kategori=1"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Kitchen Set</a>
                                    </li>
                                    <li><a href="/list-desain?id_kategori=6"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Ruang Tamu </a> </li>
                                    <li><a href="/list-desain?id_kategori=5"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Design </a> </li>
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
                    <a href="/list-desain?id_kategori={{ $item->id }}">
                        <li class="item" style="margin-right: 5px">
                            {{ $item->kategori }} </li>
                    </a>
                @endforeach

            </ul>
        </div>
    </div>

    <div id="client" class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Daftar Produk <span class="black"> </span></h2>
                        <strong></strong>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($data as $item)
                    <div class="col-md-6">
                        <div class="clients_img" style="border-radius: 4px">
                            <a href="/detailproduk?post_desain={{ $item->id }}">
                                <img class="gambar" src="/post/upload/{{ $item->gambar }}">
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
                            <br>
                            <button class="btn btn-warning btn-sm" onclick="ubahData({{ $item->id }})"> <i
                                    class="fa fa-edit"></i> Ubah </button>
                            <button class="btn btn-danger btn-sm"
                                onclick="hapusProduk({{ $item->id }}, '{{ $item->namaproduk }}')"> <i
                                    class="fa fa-remove"></i> Hapus </button>
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
    <p class="text-center">
        @if ($data->count() == 0)
            <center class="alert alert-danger">
                <h1> "{{ request()->get('cari') }}" Produk / desain tidak ditemukan ! </h1>
            </center>
        @endif
    </p>
    <div class="copyright" style="margin-top: 0px">
        <div class="container">
            <div class="row text-center">
                <p>Copyright 2022 @<a href="">YudishRaden</a></p>
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
