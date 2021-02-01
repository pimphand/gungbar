@extends('frontend.layout.index')
@section('content')
     
   <!-- Banner Area -->
   <section class="banner_area" >
       <!-- bdr -->
       <div class="container ">
            <div class="row">
                
                <div id="root"></div>
                <div class="col-lg-6 banner_i d-none d-sm-block">

                    <!-- <img src="images/rs-banner-3.png" alt="" class="rs_banner">
                    <img src="images/banner-i-2.png" alt="" class="images_1">
                    <img src="images/banner-i-1.png" alt="" class="images_2 wow slideInRight"> -->

                    <img src="{{ url('frontend') }}/images/img/header/header.png" alt="" class="rs_banner">
                    <img src="{{ url('frontend') }}/images/img/header/header.png" alt="" class="images_1"> 
                </div>
                <div class="col-lg-6">
                    <h2 class="wow fadeInUp" >
                        <b>Masuk Akun</b>
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="0.3s">
                        Masuk dengan email dan password anda
                    </p>
                    <form class="wow fadeInUp mt-4 form-group" data-wow-delay="0.3s" method="post" action="{{url('register/group')}}" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" required> 
                            </div>
                            <div class=" mb-3">
                                <label for="exampleInputEmail1" class="form-label">Password</label>
                                <input type="text" class="form-control" name="password" required> 
                            </div>
                            <button class="theme_btn" type="submit" style="border-radius:5px;float:right">
                                Masuk
                                <i class=" fa fa-sign-in-alt" style="padding-left:20px"></i>
                            </button>
                    </form> 
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <p>Belum mempunyai akun ? <a class="color-pink-end" href="{{url('register/personal')}}">Daftar Personal</a> <br> or <br> <a class="color-pink-end" href="{{url('register/grup')}}">Daftar Grup / Perusahaan</a></p>
                        </div>
                    </div>
                   
                   <!-- <a href="#" class="theme_btn wow fadeInUp" data-wow-delay="0.7s">Create Account</a> -->
                   <!-- 5079f7 --> 
                </div>  
            </div>
           </div>
       </div>
   </section>
   <!-- Banner Area --> 

   
    
@endsection