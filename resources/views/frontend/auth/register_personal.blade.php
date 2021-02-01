@extends('frontend.layout.index')

@section('css')
    <style>
        #korespondensi-field{
            display: none;
        }
    </style>
@endsection

@section('content')

   <!-- Banner Area -->
   <section class="banner_area" >
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
                   <h2 class="wow fadeInUp" >
                       <b>Daftar Akun Personal</b>
                   </h2>
                   <p class="wow fadeInUp" data-wow-delay="0.3s" class="mb-2">
                       Buat akun baru untuk <a class="color-pink-end" href="{{url('register/grup')}}">Grup / Perusahaan</a>
                   </p>
                   @if (Session::has('success'))
                       <div class="alert alert-primary wow fadeInUp" data-wow-delay="0.7s">
                           <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                               <i class="nc-icon nc-simple-remove"></i>
                           </button>
                           <span>
                               <b> Success - </b> {{Session::get('success')}}
                           </span>
                       </div>
                   @endif

                   @if (Session::get('error'))
                       <div class="alert alert-danger wow fadeInUp" data-wow-delay="0.7s">
                           <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                               <i class="nc-icon nc-simple-remove"></i>
                           </button>
                           <span>
                               <b> Error - </b> {{Session::get('error')}}
                           </span>
                       </div>
                   @endif
                       <form class="wow fadeInUp mt-4 row" data-wow-delay="0.3s" method="post" action="{{url('register/personal')}}" enctype="multipart/form-data" >
                           {{ csrf_field() }} 
                                <div class="col-lg-2 form-group mb-3">
                                    <label for="title">Titel</label>
                                    <select name="title" id="title" class="form-control">
                                        <option value="Mr.">Mr.</option>
                                        <option value="Mrs.">Mrs.</option>
                                    </select>
                                </div>
                                <div class="col-lg-5 form-group  mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
                                    <input type="text" class="form-control" name="firstname"  required>
                                </div>
                                <div class="col-lg-5 form-group  mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
                                    <input type="text" class="form-control" name="lastname"  required>
                                </div>
                                <div class="col-lg-6 form-group  mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="col-lg-6 form-group  mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email Alternatif</label>
                                    <input type="email" class="form-control" name="email_alternatif" >
                                </div>
                                <div class="col-lg-12 form-group mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Posisi / Jabatan</label>
                                    <input type="text" class="form-control" name="jabatan" required>
                                </div>
                                <div class="col-lg-6 form-group mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Perusahaan / Instansi</label>
                                    <input type="text" class="form-control" name="nama_perusahaan" required>
                                </div>
                                <div class="col-lg-6 form-group mb-3">
                                    <label for="">Kategori Industri</label>
                                    <select name="kategori" id="kategori" class="form-control" required>
                                        <option value="">Pilih Kategori Industri</option>
                                        <option value="ICT">ICT</option>
                                        <option value="OIL GAS">OIL GAS</option>
                                    </select>
                                </div>
                                <div class="col-lg-8 form-group mb-3">
                                    <label for="exampleInputEmail1" class="form-label" >Alamat Perusahaan</label>
                                    <input type="text" class="form-control" name="alamat_perusahaan" required>
                                </div>
                                <div class="col-lg-4 form-group mb-3">
                                    <label for="">Pilih Negara</label>
                                    <select name="negara" id="negara" class="form-control" required>
                                        <option value="">Pilih Negara</option>
                                        <option value="Indonesia">Indonesia</option>
                                    </select>
                                </div>
                                <div class=" col-lg-3 form-group mb-3">
                                    <label for="">Pilih Provinsi</label>
                                    <select name="provinsi" id="provinsi" class="form-control" required>
                                        <option value="">Pilih Provinsi</option>
                                        <option value="Jawa Timur">Jawa Timur</option>
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
                                <hr>
                                
                                <div class="col-lg-12 form-group mb-3">
                                    <div class=" form-check">
                                        <input class="form-check-input" type="checkbox" name="korespondensi" value="korespondensi" id="korespondensi">
                                        <label class="form-check-label" for="korespondensi">
                                            Tambahkan Alamat Korespondensi 
                                        </label>
                                    </div> 
                                </div> 
                                
                                <div class="col-lg-8 form-group mb-3" id="korespondensi-field">
                                    <label for="exampleInputEmail1" class="form-label" >Alamat Korespondensi</label>
                                    <input type="text" class="form-control" name="alamat_korespondensi"  >
                                </div>
                                <div class="col-lg-4 form-group mb-3" id="korespondensi-field">
                                    <label for="">Pilih Negara</label>
                                    <select name="negara_korespondensi" id="negara_korespondensi" class="form-control"  >
                                        <option value="">Pilih Negara</option>
                                        <option value="Indonesia">Indonesia</option>
                                    </select>
                                </div>
                                <div class=" col-lg-3 form-group mb-3" id="korespondensi-field">
                                    <label for="">Pilih Provinsi</label>
                                    <select name="provinsi_korespondensi" id="provinsi_korespondensi" class="form-control"  >
                                        <option value="">Pilih Provinsi</option>
                                        <option value="Jawa Timur">Jawa Timur</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 form-group mb-3" id="korespondensi-field">
                                    <label for="">Pilih Kota</label>
                                    <select name="kota_korespondensi" id="kota_korespondensi" class="form-control"  >
                                        <option value="">Pilih Kota</option>
                                        <option value="Madiun">Madiun</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 form-group mb-3" id="korespondensi-field">
                                    <label for="">Pilih Kecamatan</label>
                                    <select name="distrik_korespondensi" id="distrik_korespondensi" class="form-control"  >
                                        <option value="">Pilih Kecamatan</option>
                                        <option value="Kartoharjo">Kartoharjo</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 form-group mb-3" id="korespondensi-field">
                                    <label for="exampleInputEmail1" class="form-label">Kode Pos</label>
                                    <input type="text" class="form-control" name="kode_pos_korespondensi"  >
                                </div>
 

                                <div class="col-lg-4 form-group mb-3">
                                    <label for="exampleInputEmail1" class="form-label">No HP</label>
                                    <input type="text" class="form-control" name="phone" required>
                                </div>
                                <div class="col-lg-4 form-group mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nomor Telepon (Opsional)</label>
                                    <input type="text" class="form-control" name="phone_company">
                                </div> 

                                <div class="col-lg-4 form-group  mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                                    <input type="password" name="password" class="form-control"  required >
                                </div>
                                
                                <div class="col-lg-6  form-group  mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Upload Foto</label>
                                    <input type="file" name="photo" class="form-control"  required >
                                </div> 

                                <div class="col-lg-6  form-group  mb-3">
                                    <h5>Sertifikasi dari IIA yang dimiliki :</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="sertifikasi[]" value="CIA" id="CIA">
                                        <label class="form-check-label" for="CIA">
                                            CIA
                                        </label>
                                    </div> 
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="sertifikasi[]" value="CRMA" id="CRMA">
                                        <label class="form-check-label" for="CRMA">
                                            CRMA
                                        </label>
                                    </div> 
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="sertifikasi[]" value="CCSA" id="CCSA">
                                        <label class="form-check-label" for="CCSA">
                                            CCSA
                                        </label>
                                    </div> 
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="sertifikasi[]" value="CGAP" id="CGAP">
                                        <label class="form-check-label" for="CGAP">
                                            CGAP
                                        </label>
                                    </div> 
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="sertifikasi[]" value="CESA" id="CESA">
                                        <label class="form-check-label" for="CESA">
                                            CESA
                                        </label>
                                    </div> 
                                </div>  
                                
                                <div class="col-lg-12">
                                    <button class="theme_btn" type="submit" style="border-radius:5px;float:right">
                                        Daftar Sekarang
                                        <i class=" fa fa-arrow-right" style="padding-left:20px"></i>
                                    </button>
                                    <p>Sudah mempunyai akun ? <a class="color-pink-end" href="{{url('login')}}">Masuk</a> </p>
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
        $('#korespondensi').on('click', function(){
            
            $(this).each(function(){ 
                if(this.checked){
                    $('div[id^="korespondensi-field"]').show('slow')
                } else {

                    $('div[id^="korespondensi-field"]').hide('slow')
                }
            });
        });
    </script>
@endsection