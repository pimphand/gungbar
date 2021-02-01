@extends('frontend.layout.index')
@section('content')

    <!-- Banner Area -->
    <section class="banner_area">
        <!-- bdr -->
        <div class="container ">
            <div id="root"></div>
            {{-- <div class="col-lg-6 banner_i d-none d-sm-block">

                <!-- <img src="images/rs-banner-3.png" alt="" class="rs_banner">
                    <img src="images/banner-i-2.png" alt="" class="images_1">
                    <img src="images/banner-i-1.png" alt="" class="images_2 wow slideInRight"> -->

                <img src="{{ url('frontend') }}/images/img/header/header.png" alt="" class="rs_banner">
                <img src="{{ url('frontend') }}/images/img/header/header.png" alt="" class="images_1">
            </div> --}}
            <h2 class="wow fadeInUp">
                <b>Daftar Akun Grup / Perusahaan</b>
            </h2>
            <p class="wow fadeInUp" data-wow-delay="0.3s">
                Buat akun baru untuk <a class="color-pink-end" href="{{ url('register/personal') }}">Personal</a>
            </p>
            @if (Session::has('success'))
                <div class="alert alert-primary wow fadeInUp" data-wow-delay="0.7s">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                        <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <span>
                        <b> Success - </b> {{ Session::get('success') }}
                    </span>
                </div>
            @endif

            @if (Session::get('error'))
                <div class="alert alert-danger wow fadeInUp" data-wow-delay="0.7s">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                        <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <span>
                        <b> Error - </b> {{ Session::get('error') }}
                    </span>
                </div>
            @endif
            <form class="wow fadeInUp mt-4 row" data-wow-delay="0.3s" method="post" action="{{ url('register/group') }}"
                enctype="multipart/form-data">
                {{ csrf_field() }} 
                    <div class="col-lg-2 form-group mb-3">
                        <label for="title">Titel</label>
                        <select name="title" id="title" class="form-control">
                            <option value="Mr.">Mr.</option>
                            <option value="Mrs.">Mrs.</option>
                        </select>
                    </div>
                    <div class=" col-lg-5 form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
                        <input type="text" class="form-control" name="firstname" required>
                    </div>
                    <div class="col-lg-5 form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
                        <input type="text" class="form-control" name="lastname" required>
                    </div>
                    <div class="col-lg-5 form-group  mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="col-lg-4 form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label">No. Telephone</label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                    <div class="col-lg-3 form-group mb-3">
                        <label for="pic">PIC</label>
                        <select name="pic_name" id="pic" class="form-control">
                            <option value="Training">Training</option>
                            <option value="Finance">Finance</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="col-lg-5 form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Perusahaan / Organisasi</label>
                        <input type="text" class="form-control" name="nama_perusahaan" required>
                    </div>
                    <div class="col-lg-4 form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label">No. Telp. Kantor</label>
                        <input type="text" class="form-control" name="phone_company">
                    </div>
                    <div class="col-lg-3 form-group mb-3">
                        <label for="business_title">Kategory Industry</label>
                        <select name="category_industry" id="business_title" class="form-control">
                            <option value="Agriculture">Agriculture</option>
                            <option value="Construction">Construction</option>
                            <option value="Financial">Financial</option>
                        </select>
                    </div>
                    <div class="col-lg-8 form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat Lengkap</label>
                        <input type="text" class="form-control" name="alamat_perusahaan" required>
                    </div>

                    <div class="col-lg-4 form-group mb-3">
                        <label for="">Pilih Negara</label>
                        <select name="negara" id="negara" class="form-control" required>
                            <option value="">Pilih Negara</option>
                            <option value="Indonesia">Indonesia</option>
                        </select>
                    </div>
                    <div class="col-lg-3 form-group mb-3">
                        <label for="">Pilih Provinsi</label>
                        <select name="provinsi" id="provinsi" class="form-control" required>
                            <option value="">Pilih Provinsi</option>
                            <option value="jawa timur">Jawa Timur</option>
                        </select>
                    </div>
                    <div class="col-lg-3 form-group mb-3">
                        <label for="">Pilih Kota</label>
                        <select name="kota" id="kota" class="form-control" required>
                            <option value="">Pilih Kota</option>
                            <option value="Madiun">Madiun</option>
                        </select>
                    </div>
                    <div class="col-lg-3 form-group mb-3">
                        <label for="">Pilih Kecamatan</label>
                        <select name="distrik" id="distrik" class="form-control" required>
                            <option value="">Pilih Kecamatan</option>
                            <option value="Kartoharjo">Kartoharjo</option>
                        </select>
                    </div>
                    <div class="col-lg-3 form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Pos</label>
                        <input type="text" class="form-control" name="kode_pos" required>
                    </div>
                    <div class="col-lg-12">
                        <div class=" form-group  mb-3">
                            <label for="exampleInputPassword1" class="form-label">Upload Foto</label>
                            <input type="file" name="photo" class="form-control" required>
                        </div>    
                    </div>

                <div class=" wow fadeInUp col-lg-12 mb-3  mt-5">
                    <h4>Daftar Calon Anggota</h4>
                </div>
                     
                <div class="col-lg-12  optionBox ">
                    <div class="pg" id="pg-img">
                        <div class="block row" > 
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Depan</label>
                                        <input type="text" class="form-control" name="nama_depan_anggota[]" required >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Belakang</label>
                                        <input type="text" class="form-control" name="nama_belakang_anggota[]" required >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email Untuk Login</label>
                                        <input type="email" class="form-control" name="email_anggota[]" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nomor HP</label>
                                        <input type="text" class="form-control" name="phone_anggota[]" required >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No. Telp Kantor/Ext</label>
                                        <input type="text" class="form-control" name="phone1_anggota[]" required >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Jabatan</label>
                                        <input type="text" class="form-control" name="jabatan_anggota[]" required>
                                    </div>
                                </div>
                                <div class="col-lg-2 remove">
                                    <div class="btn-group ">

                                        <button type="button" class="btn btn-sm btn-danger remove" onclick="deleteImg()"><i class="fa fa-trash"></i></button>
                                        
                                    </div>

                                </div> 
                        </div> 
                        
                    </div>
                </div>

                <div class="col-lg-12 mt-5">

                    <button type="button" class="btn btn-primary btn-sm add" id="add-image">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>

                <div class="col-lg-12">
                    <button class="theme_btn" id="" type="submit" style="border-radius:5px;float:right">
                        Lanjutkan
                        <i class=" fa fa-arrow-right" style="padding-left:20px"></i>
                    </button>

                    <p>Sudah mempunyai akun ? <a class="color-pink-end" href="{{ url('login') }}">Masuk</a> </p>
                </div>
            </form>

            <!-- <a href="#" class="theme_btn wow fadeInUp" data-wow-delay="0.7s">Create Account</a> -->
            <!-- 5079f7 -->


        </div>
        </div>
    </section>
    <!-- Banner Area -->


@endsection


@section('js')
    <script>
        
        $('.add').click(function() {
                $('.block:last').after(`
                    <div class="block row mt-4" > 
                        <div class="col-lg-4">
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Depan</label>
                                    <input type="text" class="form-control" name="nama_depan_anggota[]" required >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Belakang</label>
                                    <input type="text" class="form-control" name="nama_belakang_anggota[]" required >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email Untuk Login</label>
                                    <input type="email" class="form-control" name="email_anggota[]" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor HP</label>
                                    <input type="text" class="form-control" name="phone_anggota[]" required >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">No. Telp Kantor/Ext</label>
                                    <input type="text" class="form-control" name="phone1_anggota[]" required >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jabatan</label>
                                    <input type="text" class="form-control" name="jabatan_anggota[]" required>
                                </div>
                            </div>
                            <div class="col-lg-2 remove">
                                <div class="btn-group ">

                                    <button type="button" class="btn btn-sm btn-danger remove" onclick="deleteImg()"><i class="fa fa-trash"></i></button>
                                    
                                </div>

                            </div> 
                        </div>
                    </div>
                `);
            });
            $('.optionBox').on('click','.remove',function() {
                $(this).parent().remove();
            });

    </script>
@endsection