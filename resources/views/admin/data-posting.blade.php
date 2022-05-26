@include('component/header')


<div class="container-fluid bg-light pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col text-center mb-4">
                <h6 class="text-primary font-weight-normal mb-3"> Daftar Berita</h6>
                <h1 class="mb-4">DAFTAR BERITA RSUD KOTA MATARAM </h1>
            </div>
        </div>

        <div class="row pb-3">
            @foreach ($data as $datas)
                <div class="col-md-3 mb-3">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="post/upload/{{ $datas->image }}" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 "> <a href="/single?post={{ $datas->id }}">
                                        {{ $datas->short_title }} </a> </h5>
                            </div>
                            <p>{{ $datas->deskripsi }}</p>
                            <div class="">
                                <small class="mr-3"><i class="fa fa-history text-primary"></i> &nbsp;
                                    {{ date('d-m-Y', strtotime($datas->tanggal)) }}</small>
                                <small class="mr-3"> <a href="/buat_berita?id_post={{ $datas->id }}"> <i class="fa fa-edit text-primary"></i>  Edit </a></small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 0</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="col-md-12 mb-4">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center mb-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <br />
    </div>
</div>
