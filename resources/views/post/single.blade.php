@extends('body')
@section('main_body')
    <!-- Page Header Start -->
    <hr>
    <!-- Page Header Start -->

    <!-- Detail Start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="d-flex flex-column text-left mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Detail posting</h6>
                    <h1 class="mb-4 section-title">{{ $single->long_title }}</h1>
                    <div class="d-index-flex mb-2">
                        <span class="mr-3"><i class="fa fa-calendar text-primary"></i>
                            {{ \Carbon\Carbon::parse($single->tanggal)->isoFormat('dddd, D MMMM Y') }} </span>
                        <span class="mr-3"><i class="fa fa-link text-primary"></i> Web desain </span>
                        <span class="mr-3"><i class="fa fa-comments text-primary"></i> 0</span>
                    </div>
                </div>
                <img class="card-img-top" src="post/upload/{{ $single->image }}" alt="">
                <br /><br />
                <div>
                    {!! html_entity_decode($single->body) !!}
                    <br />
                    <hr />
                    <br />
                </div>
                <div class="mb-5 mx-n3">
                    <h3 class="mb-4 ml-3 section-title">Berita Terkait</h3>
                    <div class="owl-carousel service-carousel position-relative">
                        @foreach ($alwaysshow as $item)
                            <div class="d-flex flex-column bg-light mx-3 p-4">
                                <img class="card-img-top" src="post/upload/{{ $item->image }}" alt="Gambar">
                                <h5 class="mb-3"> <a href="/single?post={{ $item->id }}">
                                        {{ $item->long_tile }} </a></h5>
                                <p class="m-0"> {{ $item->deskripsi }} </p>
                            </div>
                        @endforeach

                    </div>
                </div>

                <div class="">
                    <h3 class="mb-4 section-title">0 Komentar</h3>
                    <p> Mohon masukan dan saran anda ... </p>
                </div>

                <div class="bg-light p-5">
                    <h3 class="mb-4 section-title">Berikan Komentar</h3>
                    <form>
                        <div class="form-group">
                            <label for="name">Nama *</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">No. HP *</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="message">Komentar *</label>
                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <input type="submit" value="Kirim" class="btn btn-primary px-3">
                        </div>
                    </form>
                </div>
            </div>

            @include('/post/single-left')
        </div>
    </div>

    <!-- Footer End -->
@endsection
