<!-- Header Area -->
    <header class="main_header_area">   
		<nav class="navbar navbar-expand-lg"> 
			<div class="navbar-brand">
				<a class="logo" href="{{url('/')}}"><img src="https://pngimg.com/uploads/github/github_PNG40.png" width="40px" alt=""></a>   
			</div>
			<!-- Small Divice Menu-->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar_supported"  aria-label="Toggle navigation"> 
				<i class="fas fa-bars"></i>
			</button>
			<!-- Left Nav bar -->
			<div class="collapse navbar-collapse navbar_supported"> 
				<ul class="navbar-nav">
					<li><a href="{{ url('/') }}"> <b> Home</b></a></li> 
					<li><a href="{{ url('/') }}"> <b> Home</b></a></li> 
					<li><a href="{{ url('/') }}"> <b> Home</b></a></li> 
					<li><a href="{{ url('/') }}"> <b> Home</b></a></li> 
					<li><a href="{{ url('/') }}"> <b> Home</b></a></li> 
				</ul>
			</div>
			<!-- Right Nav bar -->
			
			<style>
                			    
                .dropdown-profile {
                  position: relative;
                  display: inline-block;
                }
                
                .dropdown-content-profile {
                  display: none;
                  position: absolute;
                  background-color: #fff;
                  border-top-right-radius:10px;
                  border-bottom-right-radius:10px;
                  border-bottom-left-radius:10px;
                  min-width: 160px;
                  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                  padding: 12px 20px;
                  margin-top:20;
                  z-index: 1;
                }
                
                .dropdown-profile:hover .dropdown-content-profile {
                  display: block;
                }
                .profile-menu:hover{
                    margin:10;
                }
            </style>
			@if(auth()->user())
    			<ul class="right_nav">
    				<li> 
                <div class="dropdown-profile">
                    
                    <div class="profile">
                      <div class="container-image-profile">
                          <img src="{{asset(auth()->user()->photo)}}">
                      </div>
                      <p class="color-pink-end">{{auth()->user()->name}}</p>
                    </div>
                    <div class="dropdown-content-profile" style="margin-top: 10px">
                        <a href="{{url('profile')}}"  class="color-blue-end profile-menu"   >
                            <p style="margin:5px 10px" > <i class="fa fa-user" style="margin-right:10px"></i> Profil</p>
                        </a>
                        @if (auth()->user()->account_type == 'group' && auth()->user()->pic == 1)
                            
                          <a href="{{url('member/data-anggota')}}"  class="color-blue-end profile-menu" >
                              <p style="margin:5px 10px" > <i class="fa fa-users" style="margin-right:10px"></i> Anggota</p>
                          </a>
                        @endif
                        <a href="{{url('logout')}}" class="color-blue-end profile-menu" >
                            <p style="margin:5px 10px"> <i class="fa fa-sign-out-alt" style="margin-right:10px"></i> Keluar</p>
                        </a>
                    </div>
                </div> 
    				</li>
          </ul> 
      @else 
        
        <ul class="right_nav">
          <li> 
            <a href="{{url('/login')}}" class="theme_btn" style="border-radius:5px;"> <i class="fa fa-sign-in-alt" style="margin-right:10px"></i> Masuk </a>
          </li>
        </ul> 
			@endif
		</nav>
    </header>
    <!-- Header Area -->