@extends('body')
@section('content')
    @include('component/header')


    <div class="col-md-12 gradien1">
        <br />
        <div class="col-md-12">
            <form action="/post-desain-baru?id_desain={{ request()->get('id_desain') }}" method="post"
                data-toggle="validator" role="form" enctype="multipart/form-data">
                @csrf

                @if (Session::has('status'))
                    <p class="alert alert-success"> {{ Session::get('status') }}</p>
                @else
                    {{-- <p class="alert alert-danger"> GAGAL !. !</p> --}}
                @endif



                <div class="box box-primary" style="height: 80%">
                    <div class="box-header with-border">
                        <h3 class="titleJudul text-center alert-warning alert"> DESAIN PRODUK </h3>

                    </div>
                    <div class="box-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Nama Produk </label>
                                <input name="namaproduk" value="{{ $edit ? $edit->long_title : '' }}" 
                                    type="text" class="form-control form-control-lg" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label> Kategori Produk </label>
                                <select class="form-select form-select-lg form-control form-control-lg" name="kategori">
                                    <option>Dapur</option>
                                    <option>Teras</option>
                                    <option>Kantor</option>
                                    <br>
                                </select>

                            </div>

                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control form-control-lg" name="deskripsi" required> {{ $edit ? $edit->deskripsi : '' }} </textarea>
                            </div>

                            <div class="">
                                <div class="">
                                    <label for="Image" class="form-label w-100">Gambar Produk &nbsp;</label>
                                    <input class="alert alert-warning" type="file" id="formFile" name="image"
                                        onchange="preview()">
                                </div>
                                <img id="frame" src={{ $edit ? "post/upload/$edit->image" : '' }}
                                    class="img-fluid img-thumbnail" />
                                <br /><br />
                            </div>





                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="nav-tabs-custom">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1">
                                            <textarea name="body_desain" required id="postinger" class="form-control" style="height: 100vh;">
                                            {{ $edit ? $edit->body : '' }}
                                        </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            function preview() {
                                frame.src = URL.createObjectURL(event.target.files[0]);
                            }

                            function clearImage() {
                                document.getElementById('formFile').value = null;
                                frame.src = "";
                            }
                        </script>


                        <button id="btnPrint" class="float-kiri btn btn-warning btn-lg" style="width: 250px"> <span
                                class="fa fa-share-alt"></span> Publish</button>

                        <br /><br /><br />

                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="pull-right">
                            </div>

                        </div>
                        <!-- /.box-footer -->
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        var editor_config = {
            path_absolute: "/",
            selector: "textarea#postinger",
            plugins: 'tabfocus',
            forced_root_block: 'div',
            tabfocus_elements: ':prev,:next',
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | image | fontselect fontsizeselect | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
            relative_urls: false,
            file_browser_callback: function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName(
                    'body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document
                    .getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file: cmsURL,
                    title: 'Cari Gambar',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no"
                });
            }
        };
        tinymce.init(editor_config);
    </script>
@endsection
