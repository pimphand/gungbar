

@extends('frontend.layout.index')

@section('content')
    

    <style> 
        .twPc-div {
            background: #fff none repeat scroll 0 0;
            border: 1px solid rgba(0,0,0,0.1);
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            border-radius: 10px;
            height: auto;
        }
        .twPc-bg {
            background-image: url("https://www.adventistreview.org/assets/public/gcsession2015/headers/gcCommBackground.jpg");
            background-position: 0 50%;
            background-size: 100% auto;
            border-bottom: 1px solid #e1e8ed;
            border-radius: 10px 10px 0 0;
            height: 135px;
            width: 100%;
        }
        .twPc-block {
            display: block !important;
        }
        .twPc-button {
            margin: -35px -10px 0;
            text-align: right;
            width: 100%;
        }
        .twPc-avatarLink {
            background-color: #fff;
            border-radius: 50%;
            display: inline-block !important;
            float: left;
            margin: -30px 5px 0 8px;
            max-width: 100%;
            padding: 1px;
            vertical-align: bottom;
        }
        .twPc-avatarImg {
            border: 2px solid #fff;
            border-radius: 50%;
            box-sizing: border-box;
            color: #fff;
            height: 82px;
            width: 82px;
        }
        .twPc-divUser {
            margin: 10px 0 0;
        }
        .twPc-divName {
            font-size: 18px;
            font-weight: 700;
            line-height: 21px;
        }
        .twPc-divName a {
            color: inherit !important;
        }
        .twPc-divStats {
            margin-left: 11px;
            padding: 10px 0;
            align-content: center;
        }
        .twPc-Arrange {
            box-sizing: border-box;
            display: table;
            margin: 0;
            min-width: 100%;
            padding: 0;
            table-layout: auto;
        }
        ul.twPc-Arrange {
            list-style: outside none none;
            margin: 0;
            padding: 0;
            align: center;
        }
        .twPc-ArrangeSizeFit {
            display: table-cell;
            padding: 0;
            vertical-align: top;
            margin: auto;
        }
        .twPc-ArrangeSizeFit a:hover {
            text-decoration: none;
        }
        .twPc-StatValue {
            display: block;
            font-size: 18px;
            font-weight: 500;
            transition: color 0.15s ease-in-out 0s;
        }
        .twPc-StatLabel {
            color: #8899a6;
            font-size: 10px;
            letter-spacing: 0.02em;
            overflow: hidden;
            text-transform: uppercase;
            transition: color 0.15s ease-in-out 0s;
        }

        .preview-show {
            position: absolute;
            z-index:1;
            bottom:0;
            right: 0;
            padding:2px 7px;
            background:white;
            border-radius:50%;
            display:none;
        }
        .preview-delete{
            position: absolute;
            z-index:1; 
            bottom:0;
            right: 0;
            padding:2px 7px;
            background:white;
            border-radius:50%;
        }
        .in-btn{
            position:absolute;
            z-index:1;
            width:75px;
            height:80px;
        }
    </style>
    <!-- Banner Area -->    
    <section class="banner_area pb-5" style="padding-top:150px">
		<!-- bdr -->
    	<div class="container ">
    		<div class="row">
                <div class="col-lg-12">        
                    <div class="twPc-div ">
                        <a class="twPc-bg twPc-block"></a>
                                
                            <form action="{{ url('update/profile') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="twPc-button">
                                    <!-- Twitter Button | you can get from: https://about.twitter.com/tr/resources/buttons#follow -->
                                    <a href="#" class="btn btn-sm bg-blue-end text-white"  >
                                        {{auth()->user()->account_type}}
                                    </a>
                                    <a href="#" class="btn btn-sm bg-pink-end text-white"  >
                                        @if (auth()->user()->role == 0)
                                            Non-Member
                                        @elseif(auth()->user()->role == 1)
                                            Member
                                        @endif
                                    </a>
                                    {{-- <a href="https://twitter.com/mertskaplan" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false" data-dnt="true">Follow</a> --}}
                                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                                    <!-- Twitter Button -->   
                                </div>

                                <div title="{{ auth()->user()->name }}" class="twPc-avatarLink">
                                    <div class="in-btn">
                                        <span class="color-pink-end preview-delete">
                                            <i class="fa fa-trash" style="padding:6px 0px;"></i>
                                        </span>               
                                        <span class="color-blue-end preview-show" style="padding:6px 0px;" >
                                            <i class="fa fa-check"></i>
                                        </span>
                                    </div>
                                    <img id="preview" alt="{{ auth()->user()->name }}" src="{{ asset(auth()->user()->photo) }}"  class="twPc-avatarImg">             
                                </div>

                                <input type="file" name="filefoto" class="form-control ml-1" id="filename1" title="Upload Foto" accept="image/*" onchange="imgPreview(this,'preview')" style=" opacity: 0;width:90px;height:82px;margin-top:-30px; position: absolute; z-index: 1;" >
                                
                                <div class="twPc-divUser">
                                    <div class="twPc-divName pt-2">
                                        <a href="#">{{ auth()->user()->name }}</a>
                                    </div>
                                    <span>
                                        <a href="#" class="color-pink-end">{{ auth()->user()->email }}</a>
                                    </span>
                                </div>
                                <div class="got_problem contact_p my-4">
                                    
                                    <div class="col-lg-12 problem_from pl-4">
                                        <p>Data profile</p>
                                        <div class="solve_from row" id="phpcontactform" >  
                                            <div class="form-group col-md-6">   
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap *" value="{{ auth()->user()->name }}"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" placeholder="Email *" disabled>
                                            </div>    
                                            <div class="form-group col-md-12">

                                            </div>    
                                            
                                            {{-- <div class="form-group col-12">
                                                <textarea class="form-control" id="message" name="message" placeholder="Message *"></textarea>
                                            </div> --}}
                                            <div class="form-group col-12">
                                                <button class="theme_btn" id="js-contact-btn" type="submit">Ubah</button>   
                                                <div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Messages Successfully"></div>
                                            </div>    
                                        </div>  
                                    </div>
                                </div>
                            </form>

                    
                        </form>
                    </div>
                </div>   
    		</div>
    	</div>
    </section>
    <!-- Banner Area --> 
	
@endsection