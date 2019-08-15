<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Green-Tea Lab</title>
    <meta name="description" content="Blue One Page Creative HTML5 Template">
    <meta name="keywords"
          content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
    <meta name="author" content="Muhammad Morshed">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/media-queries.css')}}">
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/works.css')}}">
    <link rel="stylesheet" href="{{asset('css/color.css')}}">
    @yield('css')

</head>

<body id="body">
<div id="preloader">
    <img src="{{asset('img/preloader.gif')}}" alt="Preloader">
</div>


<header id="navigation" class="navbar-fixed-top navbar">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars fa-2x"></i>
            </button>
            <a class="navbar-brand" href="#body">
                <h1 id="logo">
                    <img src="{{asset('img/logo.png')}}" style="height: 47px" alt="GreenTea Lab">
                    <span>Green Tea</span>


                </h1>
            </a>
            <!-- /logo -->
        </div>

        <!-- main nav -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <ul id="nav" class="nav navbar-nav">
                <li class="current"><a href="#body">Home</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#works">Work</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="http://google.com">Contact</a></li>
                <li><a href="http://google.com">Contact</a></li>


            </ul>
            <ul id="nav" class="nav navbar-nav">
                <li><a href="{{route('profile')}}">Profile</a></li>
                <li><a href="{{route('logout')}}">Logout</a></li>
            </ul>
        </nav>
        <!-- /main nav -->

    </div>
</header>

@yield('content')


<footer id="footer" class="footer">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
                <div class="footer-single">
                    <img src="{{asset('img/logo.png')}}" alt="GreenTea Lab" style="height: 112px;">
                    <p>Green tea leaf shape logo logo symbolizes the young team we are always passionate with passion,
                        always have a strong vitality not to give up always up front towards light with a winning
                        belief</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms"
                 data-wow-delay="300ms">
                <div class="footer-single">
                    <h6>Subscribe </h6>
                    <form action="#" class="subscribe">
                        <input type="text" name="subscribe" id="subscribe">
                        <input type="submit" value="&#8594;" id="subs">
                    </form>
                    <p>Sign up to update the latest information from us ! </p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms"
                 data-wow-delay="600ms">
                <div class="footer-single">
                    <h6>Explore</h6>
                    <ul>
                        <li><a href="#">Inside Us</a></li>
                        <li><a href="#">Flickr</a></li>
                        <li><a href="#">Google</a></li>
                        <li><a href="#">Forum</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms"
                 data-wow-delay="900ms">
                <div class="footer-single">
                    <h6>Support</h6>
                    <ul>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Market Blog</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Pressroom</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="copyright text-center">
                    greenteafitnlu@gmail.com <a href="http://themefisher.com/">-Cam Tu Building</a>- Information
                    Technology <a href="http://themefisher.com/">-Nong Lam University</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

<!-- Essential jQuery Plugins
================================================== -->
<!-- Main jQuery -->
<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<!-- Single Page Nav -->
<script src="{{asset('js/jquery.singlePageNav.min.js')}}"></script>
<!-- Twitter Bootstrap -->
<script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- jquery.fancybox.pack -->
<script src="{{asset('js/jquery.fancybox.pack.js')}}"></script>
<!-- jquery.mixitup.min -->
<script src="{{asset('js/jquery.mixitup.min.js')}}"></script>
<!-- jquery.parallax -->
<script src="{{asset('js/jquery.parallax-1.1.3.js')}}"></script>
<!-- jquery.countTo -->
<script src="{{asset('js/jquery-countTo.js')}}"></script>
<!-- jquery.appear -->
<script src="{{asset('js/jquery.appear.js')}}"></script>
<!-- jquery easing -->
<script src="{{asset('js/jquery.easing.min.js')}}"></script>
<!-- jquery easing -->
<script src="{{asset('js/wow.min.js')}}"></script>

<script>
    var wow = new WOW({
            boxClass: 'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 120,          // distance to the element when triggering the animation (default is 0)
            mobile: false,       // trigger animations on mobile devices (default is true)
            live: true        // act on asynchronously loaded content (default is true)
        }
    );
    wow.init();
</script>
<!-- Custom Functions -->
<script src="{{asset('js/custom.js')}}"></script>

@yield('script')
</body>
</html>
