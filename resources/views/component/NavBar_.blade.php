<div class="sidebar">
    <!-- Sidebar  -->
    <nav id="sidebar" style="background: palegoldenrod">
        <div id="dismiss">
            <i class="fa fa-arrow-right"></i>
        </div>
        <ul class="list-unstyled components">
            <li class="active"> <a href="/"> <i class="fa fa-home"></i> &nbsp;Beranda </a></li>
            <li> <a href="/cari-produk"> <i class="fa fa-cube"></i> &nbsp;Desain</a></li>
            <li> <a href="/profil"> <i class="fa fa-cube"></i> &nbsp;Profil</a></li>
            <li> <a href="#service"> <i class="fa fa-puzzle-piece"></i> &nbsp;Service</a></li>
            <li> <a href="#contact"> <i class="fa fa-volume-control-phone"></i> &nbsp; Hubungi Kami</a></li>
            <hr>

            @if (Auth::check())
                <li class="active"> <a href="/"> <i class="fa fa-user-alt-slash"></i> &nbsp;Admin </a></li>
                <li> <a href="/list-desain"> <i class="fa fa-cube"></i> &nbsp;List Desain</a></li>
                <li> <a href="/buat-desain-baru"> <i class="fa fa-puzzle-piece"></i> &nbsp;Tambah Desain</a></li>
                {{-- <li> <a href="#contact"> <i class="fa fa-server"></i> &nbsp; Pengaturan</a></li> --}}
            @endif


        </ul>
    </nav>
</div>
