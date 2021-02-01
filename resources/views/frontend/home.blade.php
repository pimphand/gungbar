 

	@extends('frontend.layout.index')

	@section('content')
    <!-- Banner Area -->    
    <section class="banner_area">
		<!-- bdr -->
    	<div class="container ">
    		<div class="row">
				<div id="root"></div>
    			<div class="col-lg-8 pr-10" >
					<h2 class="wow fadeInUp" >
						<b>ALorem ipsum dolor sit amet, consectetur adipiscing elit, </b>
					</h2>
					
					<p class="wow fadeInUp" data-wow-delay="0.3s">
						enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<a class="theme_btn wow fadeInUp" data-wow-delay="0.7s"  href="{{ url('/register/personal') }}" style="border-radius:5px;">
						Daftar Personal
						<i class=" fa fa-user" style="padding-left:20px"></i>
					</a>
					<a class="theme_btn wow fadeInUp" data-wow-delay="0.7s"  href="{{ url('/register/grup') }}" style="border-radius:5px;">
						Daftar Grup
						<i class=" fa fa-users" style="padding-left:20px"></i>
					</a>
					
    			</div>
    			<div class="col-lg-4 banner_i">

    				<!-- <img src="images/rs-banner-3.png" alt="" class="rs_banner">
    				<img src="images/banner-i-2.png" alt="" class="images_1">
					<img src="images/banner-i-1.png" alt="" class="images_2 wow slideInRight"> -->

    				<img src="{{ url('frontend') }}/images/img/header/header.png" alt="" class="rs_banner">
    				<img src="{{ url('frontend') }}/images/img/header/header.png" alt="" class="images_1"> 
    			</div>
    		</div>
    	</div>
    </section>
    <!-- Banner Area --> 
	
    <!-- Client Logo Area -->    
    <section class="client_logo_area">
    	<div class="container " style="float: center;"  >
			<h6 class="end-client title-client" style="background-color:#ff5174; padding:20px; color: white ; " >Dukungan Kami</h6>
		</div>
		<div class="owl-carousel cl_slide bg-color-end" >

			<a href="#" class="item"><img src="https://pngimg.com/uploads/github/github_PNG40.png"  style="width: 70px" alt=""></a> 
			<a href="#" class="item"><img src="https://pngimg.com/uploads/github/github_PNG40.png"  style="width: 70px" alt=""></a>  
			<a href="#" class="item"><img src="https://pngimg.com/uploads/github/github_PNG40.png" 	style="width: 70px" alt=""></a>  
			<a href="#" class="item"><img src="https://pngimg.com/uploads/github/github_PNG40.png"  style="width: 70px" alt=""></a>  
			
		</div> 
    </section> 
	<!-- Client Logo Area -->
	
	<section class="client_logo_area " >
		<a href="{{ url('/harga') }}" class="color-blue-bold-end theme_btn"><b>Lihat Paket Harga</b> <i class=" fa fa-arrow-right" style="padding-left:20px;"></i></a>
	</section>

    <!-- Digital Modules  --> 
    <section class="digital_modules">
		<div class="container">
			<div class="tittle">
				<h2 class="color-blue-bold-end"> <b> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </b></h2>
				<!-- <p>Cloud management is how admins have control over everything that operates in a cloud: the users, data, applications</p> -->
			</div>

			<!-- Reporting -->
			<div class="row reporting_area">
				<div class="col-lg-6 wow fadeInLeft">
					<!-- <h5>Easy Reporting</h5> -->
					<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					<a href="{{ url('/signup') }}" class="theme_btn">Daftar Sekarang <i class=" fa fa-arrow-right" style="padding-left:20px"></i></a>
				</div>
				<div class="col-lg-6 wow fadeInRight">
					<div class="reporting_img">
						<img src="{{ url('frontend') }}/images/img/2/artboard-2.png" alt="img_2">
						<img src="{{ url('frontend') }}/images/img/2/artboard-3.png" alt="" class="img_2">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Digital Modules  -->   

    <!-- Smarter way to collect  -->  
    <section class="smarter_collect">
    	<div class="container">

			<div class="title text-center" style="padding-bottom:40px;">

				<h2 class="color-blue-end"> <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </h2>
				<!-- <p class="color-pink-end">Cloud management is how admins have control over everything <br> that operates in a cloud: the users, data, applications</p> -->
				
			</div>
			
    		<div class="row">
    			<div class="col-lg-7 smarter_text">
    				<div class="media">
    					<div class="media-left media-end">
							<img src="{{ url('frontend') }}/images/img/3/icon_3.1.png"  alt="">
    					</div>
    					<div class="media-body">
    						<a href="#" class="heding">Lorem ipsum dolor sit amet,</a>
    						<p>Lorem ipsum dolor sit amet,</p>
    					</div>
    				</div>
    				<div class="media">
    					<div class="media-left media-end">
							<img src="{{ url('frontend') }}/images/img/3/icon_3.2.png" alt="">
    					</div>
    					<div class="media-body">
    						<a href="#" class="heding">Lorem ipsum dolor sit amet,</a>
    						<p>Lorem ipsum dolor sit amet,</p>
    					</div>
    				</div>
    				<div class="media">
    					<div class="media-left media-end">  							
							<img src="{{ url('frontend') }}/images/img/3/icon_3.3.png"  alt="">

    					</div>
    					<div class="media-body">
    						<a href="#" class="heding">Lorem ipsum dolor sit amet</a>
    						<p>Lorem ipsum dolor sit amet,</p>
    					</div>
					</div>
    				<div class="media">
    					<div class="media-left media-end"> 
							<img src="{{ url('frontend') }}/images/img/3/icon_3.4.png"  alt="">

    					</div>
    					<div class="media-body">
    						<a href="{{ url('/#') }}" class="heding">Lorem ipsum dolor sit amet,</a>
    						<p>Lorem ipsum dolor sit amet,</p>
    					</div>
					</div>
					
					<!-- <div class=" text-center" style="padding-top:30px">
						<a href="#" class="btn btn-outline-primary btn-sm text-center"><i class="fa fa-arrow-down"></i></a>
					</div> -->

    			</div>
    			<div class="col-lg-5 pt-5 mt-5">
    				<img src="https://kinsta.com/wp-content/uploads/2018/04/what-is-github-1-1.png" alt="" width="100%" >
    			</div>
			</div>
			<!-- <div class="title text-center">

				<a href="#" class="theme_btn ">Get Started quickly</a>
			</div> -->
    	</div>
    </section>
	<!-- Smarter way to collect  -->  
 

    <!-- Testimonial Area  -->
    <section class="testimonial_area">
    	<div class="container">
			<div class="title text-center">
				<h3 class="color-blue-end"> <b>Testimonial  <span class="color-pink-end">Lorem ipsum dolor sit amet,</span> </b> </h3>
			</div>
    		<div class="row">
				<div class="col-lg-12">

					<div class="carousel testimonial_s slide smarter_collect" data-ride="carousel">
						<div class="carousel-inner ">

							<div class="carousel-item active ">
								<div class="client-end ">
									<div class="container">
										<div class="row">
											<div class=" col-lg-3 col-sm-12">
												<img src="https://sdtimes.com/wp-content/uploads/2018/06/GitHub-Mark.png" class="img-client" alt="" >
											</div>
											<div class="title-client-end col-lg-9 col-sm-12"  >
												<h3 class="color-blue-end pt-4"> Jhon Doe </h3>
												<a href="#" class="color-pink-end "> Lorem ipsum dolor sit amet,  </a>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
												</p>
												
												<!-- <button class="btn bg-pink-end text-white">Lihat lebih lanjut</button> -->
											</div>
										</div>
									</div>
								</div>
							</div>  

							<div class="carousel-item ">
								<div class="client-end ">
									<div class="container">
										<div class="row">
											<div class=" col-lg-3 col-sm-12">
												<img src="https://sdtimes.com/wp-content/uploads/2018/06/GitHub-Mark.png" class="img-client" alt="" >
											</div>
											<div class="title-client-end col-lg-9 col-sm-12 pt-4" >

												<h3 class="color-blue-end">Jhon Doe</h3>
												<a href="#" class="color-pink-end">  Lorem ipsum dolor sit amet, </a>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
											
												</p>

											</div>
										</div>

									</div>
								</div>
							</div>

						</div> 
						<style>
						    .carousel-indicator li{
                                float: left;
						    }
						</style>
						
						<ol class="carousel-indicators">
							<li style="float: left;" data-target=".testimonial_s" data-slide-to="0" class="active"></li>
							<li style="float: left;" data-target=".testimonial_s" data-slide-to="1" ></li> 
							<!-- <li data-target=".testimonial_s" data-slide-to="2"></li> -->
						</ol>
					</div>
				</div>
    		</div>
    	</div>
    </section>
    <!-- Testimonial Area  -->

  	<section class="platform_facilitates">
		<div class="container">
			<div class="tittle text-center ">

				<h3 class="color-blue-end"> <b> Lorem ipsum dolor sit amet, consectetur adipiscing elit, </b></h3>
				<br>

				<p class="color-pink-end">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
				<br>
				
			</div>
			<div class="row platform_row" >
				<div class="owl-carousel cl_slide" >

					<div class="col-lg-12 col-md-12 wow fadeIn card-end-fitur" >
						<div class="platform">
							<div style="height: 120px;">
								<a href="#"> <b>LOREAM IPSUM DOLOR SIT AMET,</b>   </a>
							</div>
							<div style="height: 190px;">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
							<!-- <div class="icons"> -->
								<img src="{{ url('frontend') }}/images/img/6/icon-end-1.png" class="img-content-end"  alt="">
							<!-- </div> -->
						
						</div>
					</div>
					<!-- platform -->
					<div class="col-lg-12 col-md-12 wow fadeIn  card-end-fitur" data-wow-delay="0.3s">
						<div class="platform">
							
							<div style="height: 120px;">
								<a href="#"> <b>LOREAM IPSUM DOLOR SIT AMET,</b>   </a>
							</div>

							<div style="height: 190px;">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>

							<!-- <div class="icons-end" style="height: 245;"> -->
								<img src="{{ url('frontend') }}/images/img/6/icon-end-2.png" class="img-content-end"  alt="">
							<!-- </div> -->
						
						</div>	
					</div>
					<!-- platform -->
					<div class="col-lg-12 col-md-12  wow fadeIn  card-end-fitur" data-wow-delay="0.6s">
						<div class="platform">
							<div style="height: 120px;">
								<a href="#"> <b>LOREAM IPSUM DOLOR SIT AMET,</b>   </a>
							</div>
							<div style="height: 190px;">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						
						
							<!-- <div class="icons"> -->
								<img src="{{ url('frontend') }}/images/img/6/icon-end-3.png" class="img-content-end" alt="">
							<!-- </div> -->
						
						</div>
					</div>
					<div class="col-lg-12 col-md-12  wow fadeIn  card-end-fitur" data-wow-delay="0.6s">
						<div class="platform">
							<div style="height: 120px;">
								<a href="#"> <b>LOREAM IPSUM DOLOR SIT AMET,</b>   </a>
							</div>
							<div style="height: 190px;">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						
							<!-- <div class="icons"> -->
								<img src="{{ url('frontend') }}/images/img/6/icon-end-4.png" class="img-content-end" alt="">
							<!-- </div> -->
						
						</div>
					</div> 

					
				</div>
				<!-- <a href="#" class="item"><img src="images/client-logo-1.png" alt=""></a> 
				<a href="#" class="item"><img src="images/client-logo-2.png" alt=""></a> 
				<a href="#" class="item"><img src="images/client-logo-3.png" alt=""></a> 
				<a href="#" class="item"><img src="images/client-logo-4.png" alt=""></a> 
				<a href="#" class="item"><img src="images/client-logo-5.png" alt=""></a> 
				<a href="#" class="item"><img src="images/client-logo-6.png" alt=""></a> 
				<a href="#" class="item"><img src="images/client-logo-7.png" alt=""></a>  -->
			</div>
		</div>
	</section>

 
		
	@endsection
    
     