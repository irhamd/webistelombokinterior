@extends('body')
@section('main_body')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary">
        <div class="container">
            <div class="row align-items-center py-4">
                <div class="col-md-8 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-secondary text-uppercase">RIWAYAT BERITA RSUD KOTA MATARAM</h1>
                </div>
                <div class="col-md-4 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="">Branda</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Riwayat Posting</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Blog Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal mb-3">Postingan Kami</h6>
                    <h1 class="mb-4">BERITA DAN INFORMASI RSUD KOTA MATARAM </h1>
                </div>
            </div>

            <div class="row pb-3">
                @foreach ($data as $datas)
                    <div class="col-md-4 mb-4">
                        <div class="card border-0 mb-2">
                            <img class="card-img-top" src="post/upload/{{ $datas->image }}" alt="">
                            <div class="card-body bg-white p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                    <h5 class="m-0 ml-3 "> <a href="/single?post={{ $datas->id }}">
                                            {{ $datas->short_title }} </a> </h5>
                                </div>
                                <p>{{ $datas->deskripsi }}</p>
                                <div class="d-flex">
                                    <small class="mr-3"><i class="fa fa-history text-primary"></i> &nbsp;
                                        {{ date('d/m/Y', strtotime($datas->tanggal)) }}</small>
                                    <small class="mr-3"><i class="fa fa-folder text-primary"></i> Posting</small>
                                    <small class="mr-3"><i class="fa fa-comments text-primary"></i> 0</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex">
                {{-- {!! $data->links() !!} --}}
            </div>
            <br />
        </div>
    </div>
    </div>
    <!-- Blog End -->

    <!-- Footer End -->
@endsection
