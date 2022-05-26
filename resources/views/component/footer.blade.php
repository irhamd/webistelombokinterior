<!-- Footer Start -->
@php
$data = [
    'alamat' => 'Jl. Bung Karno No. 3 Pagutan Raya, Mataram, Nusa Tenggara Barat',
    'telpon' => '(0370) 640774',
    'email' => 'rsud_mataram@yahoo.com'
];
@endphp

<div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6">
            <h4 class="text-primary mb-4">Location</h4>
            <div class="follow">

                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="237" height="221" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=rsud%20kota%20mataram&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                            href="https://www.embedgooglemap.net/blog/20-off-discount-for-elegant-themes-divi-sale-coupon-code-2019/"></a>
                    </div>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 221px;
                            width: 237px;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 221px;
                            width: 237px;
                        }

                    </style>
                </div>

            </div>

        </div>
        <div class="col-lg-3 col-md-6">
            <h4 class="text-primary mb-4">Alamat</h4>
            <p><i class="fa fa-map-marker mr-2"></i> {{ $data['alamat'] }} </p>
            <p><i class="fa fa-phone mr-2"></i>{{ $data['telpon'] }}</p>
            <p><i class="fa fa-envelope mr-2"></i>{{ $data['email'] }}</p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;"
                    href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;"
                    href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;"
                    href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;"
                    href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <h4 class="text-primary mb-4">Popular Links</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="http://www.ntbprov.go.id/" target="_blank"><i
                        class="fa fa-angle-right mr-2"></i>PROVINSI NTB</a>
                <a class="text-white mb-2" href="http://mataramkota.go.id/" target="_blank"><i
                        class="fa fa-angle-right mr-2"></i>KOTA MATARAM</a>
                <a class="text-white mb-2" href="http://kemkes.go.id/" target="_blank"><i
                        class="fa fa-angle-right mr-2"></i> KEMENKES RI</a>
                <a class="text-white mb-2" href="http://www.sip-ppid.mataramkota.go.id/"><i
                        class="fa fa-angle-right mr-2"></i>PPID KOTA MATARAM</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <h4 class="text-primary mb-4">Saran Dan Masukkan Anda</h4>
            <form action="">
                <div class="form-group">
                    <input type="text" class="form-control border-0" placeholder="Nama" required="required" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0" placeholder="No. HP" required="required" />
                </div>
                <div class="form-group">
                    <textarea class="form-control border-0" placeholder="Masukkan Anda" required="required"> </textarea>
                </div>
                <div>
                    <button class="btn btn-lg btn-primary btn-block border-0" type="submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>
    <div class="container border-top border-secondary pt-5">
        <p class="m-0 text-center text-white">
            &copy; <a class="text-white font-weight-bold" href="#">simrs#administrator#RSUDKotaMataram</a> &nbsp;All
            Rights Reserved.
            Designed by
            <a class="text-white font-weight-bold" href="https://htmlcodex.com">FHDEV</a>
        </p>
    </div>
</div>
<a href="#" class="btn btn-lg btn-primary back-to-top">
    <i class="fa fa-angle-double-up"></i>
</a>

@include('component/assets/mainJS')
