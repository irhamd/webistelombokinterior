    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row pb-3">

                @foreach ($alwaysshow as $datas)
                    <div class="col-md-4">
                        <div class="card border-0 mb-2">
                            <img class="card-img-top" src="post/upload/{{ $datas->image }}" alt="">
                            <div class="card-body bg-white p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <a class="btn btn-primary" href="/single?post={{ $datas->id }}"><i class="fa fa-history"></i></a>
                                    <h5 class="m-0 ml-3 mt-1">
                                        {{ date('d/m/Y', strtotime($datas->tanggal)) }}</h5>
                                </div>
                                <p style="line-height: 120%"> <a href="/single?post={{ $datas->id }}"> <b>
                                            {{ $datas->long_title }} </b> </a> </p>
                                <div class="d-flex">
                                    <small class="mr-3"><i class="fa fa-user text-primary"></i> Post by Admin</small>
                                    <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web
                                        Design</small>
                                    <small class="mr-3"><i class="fa fa-comments text-primary"></i> 0</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->
