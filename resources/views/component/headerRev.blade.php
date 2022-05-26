<head>
    <meta charset="utf+8">
    <title>RSUD Kota Mataram</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Admin SIMRS" name="keywords">
    <meta content="Admin SIMRS" name="description">

    <!-- Favicon -->
    <link href=" {{ asset('website/img/icon.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href=" {{ asset('website/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href=" {{ asset('website/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href=" {{ asset('website/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=" {{ asset('website/css/style.css') }}" rel="stylesheet">
    <link href=" {{ asset('website/css/styleAdd.css') }}" rel="stylesheet">
    <script src=" {{ asset('website/tinymce/tinymce.min.js') }}"></script>
</head>
<!-- Topbar Start -->
@include('sweetalert::alert')
<div class="container-fluid bg-dark py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left">
                <div class="d-inline-flex align-items-center" style="padding-top: 30px">
                    <a class="text-white px-3" target="_blank"
                        href="https://www.facebook.com/RSKotaMataram/?ref=bookmarks">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-3" target="_blank" href="https://twitter.com/">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-3" target="_blank" href="/login">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-3" target="_blank" href="https://www.instagram.com/rsudkotamataram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-3" target="_blank"
                        href="https://www.youtube.com/channel/UCbkQRsKcdgpaM1TLw8jiBzw">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">

                    @if (Auth::check())
                        <a class="text-white pr-3" href="/logout"> <b> Logout </b></a>
                        {{-- <span class="text-white">|</span> --}}
                    @else
                        {{-- <a class="text-white pr-3" href="/login">Login</a> --}}
                    @endif

                    <a class="text-white" href=""><img class=""
                            src=" {{ asset('website/rsud/kelasb.png') }}" alt="Image"></a>
                    <a class="text-white" href=""><img class=""
                            src=" {{ asset('website/rsud/pemkot.png') }}" alt="Image"></a>
                    <a class="text-white" href=""><img class=""
                            src=" {{ asset('website/rsud/paripurna.png') }}" alt="Image"></a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Topbar End -->

@if (Auth::check())
    @include('component/navbar/navbar-admin')
@else
    @include('component/navbar/navbar')
@endif


<!-- Under Nav Start -->
<div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 text-left mb-3 mb-lg-0">
                <div class="d-inline-flex text-left">
                    <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                    <div class="d-flex flex-column">
                        <h5><b> {{ $company->title_organisasi }} </b> </h5>
                        <p class="m-0">{{ $company->alamat }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-left text-lg-center mb-3 mb-lg-0">
                <div class="d-inline-flex text-left">
                    <h1 class="flaticon-email font-weight-normal text-primary m-0 mr-3"></h1>
                    <div class="d-flex flex-column">
                        <h5>Email</h5>
                        <p class="m-0">{{ $company->email }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 text-left text-lg-right mb-3 mb-lg-0">
                <div class="d-inline-flex text-left">
                    <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3"></h1>
                    <div class="d-flex flex-column">
                        <h5>Hubungi Kami</h5>
                        <p class="m-0">
                            <a href="tel: (0370) 640774">
                                {{ $company->telpon }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 text-left text-lg-right mb-3 mb-lg-0">
                <div class="d-inline-flex text-left">
                    <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3"></h1>
                    <div class="d-flex flex-column">
                        <h5>Fax </h5>
                        <p class="m-0">
                            <a href="tel: (0370) 640774">
                                {{ $company->fax }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Under Nav End -->
