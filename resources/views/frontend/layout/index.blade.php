<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="#" type="image/x-icon" />
    <!-- Theme tittle -->
    <title>IIA </title>
    <!-- Create by End -->
    <meta name="keywords" content="">
    <meta name="news_keywords" content="">
    <meta name="googlebot-news" content="index,follow" />
    <meta name="googlebot" content="index,follow" />
    <meta name="author" content="iia">
    <meta name="robots" content="index, follow" />
    <meta name="language" content="id" />
    <meta name="geo.country" content="id" />
    <meta http-equiv="content-language" content="In-Id" />
    <meta name="geo.placename" content="Indonesia" />
    <link rel="canonical" href="https://localhost.com/" />
    <!-- end -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://localhost.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">


    <!-- Theme style CSS -->
    <link href="{{ url('frontend/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">



    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <script crossorigin src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>

    <script type="text/babel">

        class App extends React.Component {
   render() {
   console.log('React Playground')
    return (
     <div>
      <h4></h4>
     </div>
    )
   }
  }
  ReactDOM.render(<App />, document.getElementById('root') );
    </script>

    @yield('css')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></sscript>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->
    <!-- Start of Async Drift Code -->
    <!-- End of Async Drift Code -->
</head>


<body>

    @include('frontend.layout.menu')

    @yield('content')

    <footer class="footer_area">
        <div class="container">
            <div class="footer_inner row">
                <div class="col-lg-4 col-sm-6 footer_logo wow fadeIn">
                    <a href="#"><img src="https://pngimg.com/uploads/github/github_PNG40.png" width="40px"
                            style="margin-bottom: 40px;" alt=""></a>
                    <br>
                    <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. </small>
                    <ul class="footer_social" style="margin-top: 20px;">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>

                    <!-- <div class="app_btn">
                        <a href="#"><img src="images/app-btn.png" alt=""></a>
                        <a href="#"><img src="images/app-btn-2.png" alt=""></a>
                    </div> -->


                </div>
                <div class="footer_widget col-lg-2 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                    <h4>Lorem ipsum</h4>
                    <ul class="footer_nav">
                        <li><a href="{{ url('/#') }}"><small>Lorem ipsum</small> </a></li>
                        <li><a href="{{ url('/#') }}"><small>Lorem ipsum</small> </a></li>
                        <li><a href="{{ url('/#') }}"><small>Lorem ipsum</small></small> </a></li>
                        <li><a href="{{ url('/#') }}"><small>Lorem ipsum</small></a></li>
                        <li><a href="{{ url('/#') }}"><small>Lorem ipsum</small></a></li>
                    </ul>
                </div>
                <div class="footer_widget col-lg-2 col-sm-6 wow fadeIn" data-wow-delay="0.6s">
                    <h4>Lorem ipsum</h4>
                    <ul class="footer_nav">

                        <li><a href="#"><small>Lorem ipsum</small></a></li>
                        <li><a href="#"><small>Lorem ipsum</small></a></li>

                    </ul>
                </div>
                <div class="footer_widget col-lg-2 col-sm-6 wow fadeIn" data-wow-delay="0.8s">
                    <h4>Lorem ipsum</h4>
                    <ul class="footer_nav">
                        <li><a href="{{ url('/#') }}"><small> Lorem ipsum</small></a></li>
                        <li><a href="{{ url('/#') }}"><small> Lorem ipsum</small></a></li>
                        <li><a href="{{ url('/#') }}"><small> Lorem ipsum</small></a></li>
                        <li><a href="{{ url('/#') }}"><small> Lorem ipsum </small></a></li>
                        <li><a href="{{ url('/#') }}"><small> Lorem ipsum </small></a></li>

                    </ul>
                </div>
                <div class="footer_widget col-lg-2 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
                    <h4>Lorem ipsum</h4>
                    <ul class="footer_nav">
                        <li><a href="{{ url('/#') }}"><small>Lorem ipsum</small></a></li>
                    </ul>
                </div>
            </div>
            <div class="copy_right">
                <div class="row">
                    <div class="col-md-6  wow slideInRight">
                        <ul class="c_nav">
                            <!-- <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Customer Support </a></li> -->
                        </ul>
                    </div>
                    <div class="col-md-6 order-md-first  wow slideInLeft">
                        <p>&copy; Copyrights 2021 <a href="#"> IIA - All right reserved </a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a class="bottom-button-fixed" href="">
        <small><i class="fa fa-sign-in-alt p-1 mt-2"></i></small>
    </a>


    <!-- Modal -->
    <div class="modal fade" id="member-group" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Akun Member Grup</h5>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning" role="alert">
                        Silahkan isi data anggota anda <a href="{{ url('member/data-anggota') }}"
                            class="alert-link">Data Anggota</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('frontend') }}/js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap v4.0.0 -->
    <script src="{{ url('frontend') }}/js/popper.min.js"></script>
    <script src="{{ url('frontend') }}/js/bootstrap.min.js"></script>
    <!-- Extra Plugin -->
    <script src="{{ url('frontend') }}/vendors/animate-css/wow.min.js"></script>
    <script src="{{ url('frontend') }}/vendors/owl-carousel/owl.carousel.min.js"></script>

    <!-- Theme js / Custom js -->
    <script src="{{ url('frontend') }}/js/theme.js"></script>
    @yield('js')
    @yield('addJs')

    @php
    if (auth()->user()) {
    # code...
    $anggota = DB::table('users_member')->where('user_id_pic', auth()->user()->id);
    }
    @endphp
    @if (auth()->user())

        @if (auth()->user()->account_type == 'group' && auth()->user()->pic == 1 && $anggota->count() == 0)
            @if (Request::segment(1) == 'member' && Request::segment(2) == 'data-anggota')
                <script>
                    $('#member-group').modal('hide')

                </script>
            @else
                <script>
                    $('#member-group').modal('show')

                </script>
            @endif
        @endif
    @endif

</body>
