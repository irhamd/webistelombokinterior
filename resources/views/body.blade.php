<!DOCTYPE html>
<html lang="id">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Lombok Interior</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="website/css/styleAdd.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/icon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <script src=" {{ asset('website/tinymce/tinymce.min.js') }}"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <div class="wrapper">
        <div id="content">

            <!-- header -->
            @yield('content')
            <!-- end map -->
            <!--  footer -->
            <footer>
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Lombok Interior</h2>
                                <br>
                                {{-- <form class="news">
                                    <input class="newslatter" placeholder="Enter Your Email" type="text"
                                        name=" Enter Your Email">
                                    <button class="submit">Subscribe</button>
                                </form> --}}
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                        <div class="address">
                                            <h3>About </h3>
                                            <a href="/"> <img class="logo1" src="images/logo1.png"
                                                    alt="logo"></a>
                                            <ul class="sociel">
                                                <li> <a href="Javascript:void(0)"><i class="fa fa-facebook-f"></i></a>
                                                </li>
                                                <li> <a href="Javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li> <a href="Javascript:void(0)"><i class="fa fa-linkedin-square"
                                                            aria-hidden="true"></i></a></li>
                                                <li> <a href="Javascript:void(0)"><i class="fa fa-instagram"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                        <div class="address">
                                            <h3>Quick link </h3>
                                            <ul class="Links_footer">
                                                <li class="active"><a href="/"> <i class="fa fa-angle-right"
                                                            aria-hidden="true"></i>Home </a>
                                                </li>
                                                <li><a href="/cari-produk"><i class="fa fa-angle-right"
                                                            aria-hidden="true"></i>Desain </a> </li>
                                                <li><a href="#service"><i class="fa fa-angle-right"
                                                            aria-hidden="true"></i> Service</a> </li>
                                                {{-- <li><a href="#client"><i class="fa fa-angle-right"
                                                            aria-hidden="true"></i>Clients </a> </li> --}}
                                                <li><a href="#contact"><i class="fa fa-angle-right"
                                                            aria-hidden="true"></i>Contact </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                        <div class="address">
                                            <h3>Keep in touch </h3>
                                            <ul class="loca">
                                                <li>
                                                    <a href="Javascript:void(0)"><img src="icon/1.png" alt="#" /></a>
                                                    <span class="offf">Corporate Office
                                                        Address:</span><br>There are many variations of <br>passages
                                                </li>
                                                <li>
                                                    <a href="Javascript:void(0)"><img src="icon/2.png" alt="#" /></a>(
                                                    +1234567890 )
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copyright">
                        <div class="container">
                            <div class="row">
                                <p>Copyright 2022<a href="">Fhd@team</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end footer -->
        </div>
    </div>
    <div class="overlay"></div>
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

        });
    </script>
    <script>
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
        // Australia.
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 13,
                center: {
                    lat: -8.568492,
                    lng: 116.079669,
                },
            });

            var image = 'images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: -8.568492,
                    lng: 116.079669,
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
    </script>
    <!-- end google map js -->
</body>

</html>
