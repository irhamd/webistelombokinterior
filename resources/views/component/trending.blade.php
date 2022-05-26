<!-- Features Start -->
<div class="container-fluid bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10 col text-center mb-4 text-uppercase ">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Postingan Terakhir</h6>
                    <h1 class="mb-4"> <a href="/single?post={{ $lastpost ? $lastpost[0]->id : "" }}"> {{ $lastpost ?  $lastpost[0]->long_title : '' }} </a> </h1>
                 
            </div>
        </div>

        <div class="row">
            @foreach ($lastpost as $item)
                <div class="col-lg-6 py-3">
                    <div class="container-fluid bg-light">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div
                                        class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                                        {{-- <img class="h-100 w-100" src="post/upload/{{ $item->images }}" alt=""> --}}
                                        <img class="h-100 w-100" src="post/upload/{{ $item->image }}" alt="">

                                    </div>
                                </div>
                                <div class="col-lg-12 pr-lg-5">
                                    <h6 class="text-primary font-weight-normal mt-1">
                                        {{ \Carbon\Carbon::parse($item->tanggal)->isoFormat('dddd, D MMMM Y') }}</h6>
                                    <h3 class="mb-4 section-title"> <a href="/single?post={{ $item->id }}">
                                            {{ $item->long_title }} </a> </h3>
                                    <p class="mb-4"> {{ $item->deskripsi }} </p>
                                    <ul class="list-inline">
                                        <li>
                                            <h5><i class="far fa-check-square text-primary mr-3"></i>Best service </h5>
                                        </li>
                                        <li>
                                            <h5><i class="far fa-check-square text-primary mr-3"></i>Smile </h5>
                                        </li>
                                        <li>
                                            <h5><i class="far fa-check-square text-primary mr-3"></i>Best innovation
                                            </h5>
                                        </li>
                                    </ul>
                                    <a href="/single?post={{ $item->id }}" class="btn btn-primary mt-3 py-2 px-4">Baca</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
    </div>
</div>
<!-- Features End -->
