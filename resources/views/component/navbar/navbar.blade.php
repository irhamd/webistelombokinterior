<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container position-relative" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="/" class="navbar-brand">
                {{-- <h1 class="m-0 display-5 text-white"><span class="text-primary">i</span>DESIGN</h1> --}}
                {{-- <h1 class="m-0 display-5 text-white"><span class="text-primary">RSUD</span> KOTA MATARAM</h1> --}}
                <h1 class="display-5 text-white"> <img class=""
                        src=" {{ asset('website/rsud/logorsud.png') }}" alt="Image"> </h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="/" class="nav-item nav-link active">HOME</a>
                    <a href="/posting" class="nav-item nav-link">BERITA</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">PROFIL &nbsp;</a>
                        <div class="dropdown-menu">
                            <a href="/profil" class="dropdown-item"> Sejarah Singkat</a>
                            <a href="/visimisi" class="dropdown-item">Visi & Misi</a>
                            <a href="/sdm" class="dropdown-item">Sumber Daya Manusia</a>
                            <a href="/dokter" class="dropdown-item"> Dokter Spesialis </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">INFORMASI &nbsp;</a>
                        <div class="dropdown-menu">
                            <a href="/ereservasi" class="dropdown-item">E - Reservasi</a>
                            <a href="/videofoto" class="dropdown-item">Foto / Video</a>
                            <a href="/tarif" class="dropdown-item">Tarif Layanan</a>
                            <a href="/pelayananrs" class="dropdown-item">Standar Pelayanan Rumah Sakit</a>
                            <a href="/infokamar" class="dropdown-item">Informasi Kamar</a>
                        </div>
                    </div>

                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">LAYANAN &nbsp;</a>
                        <div class="dropdown-menu">
                            <a href="/igd" class="dropdown-item">IGD</a>
                            <a href="/icu" class="dropdown-item">ICU</a>
                            <a href="/picu" class="dropdown-item">PICU</a>
                            <a href="/nicu" class="dropdown-item">NICU</a>
                            <a href="/ruangoprasi" class="dropdown-item">Ruang Operasi</a>
                            <a href="/rawatjalan" class="dropdown-item">Rawat Jalan</a>
                            <a href="/rawatinap" class="dropdown-item">Rawat Inap</a>
                            <a href="/nifas" class="dropdown-item">Ruang Bersalin dan NIFAS</a>
                           
                        </div>
                    </div>


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">PENUNJANG &nbsp;</a>
                        <div class="dropdown-menu">
                            <a href="/farmasi" class="dropdown-item">Instalasi Farmasi</a>
                            <a href="/lab" class="dropdown-item">Instalasi Laboratorium</a>
                            <a href="/radio" class="dropdown-item">Instalasi Radiologi</a>
                            <a href="/gizi" class="dropdown-item">Instalasi Gizi</a>
                            <a href="/perawatan" class="dropdown-item">Instalasi Kesehatan Lingkungan</a>
                            <a href="/sarana" class="dropdown-item">Instalasi Perawatan Sarana</a>
                            <a href="/rm" class="dropdown-item">Instalasi Rekam Medis</a>
                            <a href="/cssd" class="dropdown-item">Instalasi CSSD</a>
                            <a href="/kamarjenazah" class="dropdown-item">Instalasi Kamar Jenazah</a>
                            <a href="/simrs" class="dropdown-item">Instalasi SIMRS</a>
                        </div>
                    </div>
                    {{-- <a href="/" class="nav-item nav-link">KONTAK KAMI</a> --}}
                    <a href="/pscmems" class="nav-item nav-link">PSC 119</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
