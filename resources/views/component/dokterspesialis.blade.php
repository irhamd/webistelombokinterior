<div class="col-md-12 col-sm-12 p-0 py-sm-5">

    <h6 class="text-primary font-weight-normal text-uppercase mb-3 ml-3">Tenaga Medis </h6>
    <h1 class="mb-4 section-title ml-3"> Dokter Spesialis </h1>
    <div class="owl-carousel team-carousel position-relative p-0 py-sm-5">

        @foreach ($karyawan as $item)
            <div class="team d-flex flex-column text-center mx-3">
                <div class="position-relative">
                    <img class="img-fluid w-100"
                        src="tenagamedis/dokterspesialis/{{ $item->foto }}"
                        alt="">
                    <div
                        class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-facebook-f"></i></a>
                        {{-- <a class="btn btn-outline-primary text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a> --}}
                    </div>
                </div>
                <div class="d-flex flex-column bg-secondary text-center py-3">
                    <h5 class="text-white">{{ $item->namakaryawan }}</h5>
                    <p class="m-0 yellow">{{ $item->jabatan }}</p>
                </div>
            </div>
        @endforeach


    </div>
</div>

