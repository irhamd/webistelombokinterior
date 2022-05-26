<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container position-relative" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="" class="navbar-brand">
                {{-- <h1 class="m-0 display-5 text-white"><span class="text-primary">i</span>DESIGN</h1> --}}
                {{-- <h1 class="m-0 display-5 text-white"><span class="text-primary">RSUD</span> KOTA MATARAM</h1> --}}
                <h1 class="display-5 text-white"> <img height="70" class="w-100"
                        src=" {{ asset('website/rsud/logorsud.png') }}" alt="Image"> </h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0 bg-secondary">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">  POSTING &nbsp;</a>
                        <div class="dropdown-menu">
                            <a href="/buat_berita" class="dropdown-item"> <i class="fa fa-caret-square-o-down"></i> &nbsp; Buat Berita</a>
                            <a href="/data_posting" class="dropdown-item"> <i class="fa fa-caret-square-o-down"></i> &nbsp; List Berita</a>
                            <a href="/" class="dropdown-item">  <i class="fa fa-caret-square-o-down"></i> &nbsp; Buat Artikel</a>
                            <a href="/" class="dropdown-item"> <i class="fa fa-caret-square-o-down"></i> &nbsp; List Artikel</a>
                             
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> MENU &nbsp;</a>
                        <div class="dropdown-menu">
                            <a href="/" class="dropdown-item"> <i class="fa fa-caret-square-o-down"></i> &nbsp; E - Reservasi</a>
                            <a href="/" class="dropdown-item"> <i class="fa fa-caret-square-o-down"></i> &nbsp;  Kegiatan</a>
                            <a href="/" class="dropdown-item"> <i class="fa fa-caret-square-o-down"></i> &nbsp; Foto / Video</a>
                            <a href="/" class="dropdown-item"> <i class="fa fa-caret-square-o-down"></i> &nbsp;  Tarif Layanan</a>
                            <a href="/" class="dropdown-item"> <i class="fa fa-caret-square-o-down"></i> &nbsp; Standar Pelayanan Rumah Sakit</a>
                            <a href="/" class="dropdown-item"> <i class="fa fa-caret-square-o-down"></i> &nbsp; Informasi Kamar</a>
                        </div>
                    </div>
                    <a href="project.html" class="nav-item nav-link pl-3">PENGATURAN</a>



                </div>
            </div>
        </nav>
    </div>
</div>
{{-- @include('component/assets/mainJS') --}}
<!-- Navbar End -->
