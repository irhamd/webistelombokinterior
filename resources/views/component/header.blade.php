<header>
    <div class="sidebar">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fa fa-arrow-right"></i>
            </div>
            <ul class="list-unstyled components">
                <li class="active"> <a href="/"> <i class="fa fa-home"></i> &nbsp;Beranda </a></li>
                <li> <a href="/cari-produk"> <i class="fa fa-cube"></i> &nbsp;Desain</a></li>
                <li> <a href="#service"> <i class="fa fa-puzzle-piece"></i> &nbsp;Service</a></li>
                <li> <a href="#contact"> <i class="fa fa-volume-control-phone"></i> &nbsp; Hubungi Kami</a></li>
                <hr>
                <li class="active"> <a href="/"> <i class="fa fa-user-alt-slash"></i> &nbsp;Admin </a></li>
                <li> <a href="/cari-produk"> <i class="fa fa-cube"></i> &nbsp;List Desain</a></li>
                <li> <a href="#service"> <i class="fa fa-puzzle-piece"></i> &nbsp;Tambah Desain</a></li>
                <li> <a href="#contact"> <i class="fa fa-server"></i> &nbsp; Pengaturan</a></li>
            </ul>
        </nav>
    </div>

    <!-- header inner -->
    <div class="header">
        <div class="container-fluid" style="background-color:#ffd7002e; border-radius:5px; color: black;">
            <div class="row py-3">
                <div class="col-lg-3 logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="/"><img src="images/logo.png" alt="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="right_header_info">
                        <ul>
                            <li class="d_none">
                                <a href="/cari-produk"><img style="margin-right: 15px;" src="icon/1.png" alt="#" />
                                    Desain Interior </a>
                            </li>
                            <li class="d_none">
                                <a href="https://api.whatsapp.com/send/?phone=%2B6281331880750&text&app_absent=0"
                                    target="_blank">
                                    <img style="margin-right: 15px;" src="icon/whatsapp.png" alt="#" />(+62)
                                    813-3188-0750</a>
                            </li>
                            <li class="d_none">
                                <a href="https://www.instagram.com/lombok.interior/?igshid=YmMyMTA2M2Y%3D"
                                    target="_blank"><img style="margin-right: 15px;" src="icon/3.png"
                                        alt="#" />lombok.interior</a>
                            </li class="d_none">
                            <li class="d_none">
                                <a href="Javascript:void(0)" data-toggle="modal" data-target="#login">
                                    <img style="margin-left: 10px;" src="icon/5.png" alt="#" /></a>
                            </li>


                            <!-- Modal -->
                            <div class="modal fade" id="login" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form class="" method="POST" action="/auth-sign-in">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                        <input class="form-control" placeholder="ID" type="text"
                                                            name="sign_id">
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"
                                                        style="margin-top: -10px">
                                                        <input class="form-control" placeholder="password"
                                                            type="password" name="password">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-warning">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- <li class="d_none">
                                <a href="Javascript:void(0)"><img style="margin-right: 15px;"
                                        src="icon/4.png" alt="#" /></a>
                            </li> --}}
                            <li>
                                <button type="button" id="sidebarCollapse">
                                    <img src="images/menu_icon.png" alt="#" />
                                </button>
                            </li>
                            <br>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>
