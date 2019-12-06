<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SU BOTSWANA - Gallery</title>
  <link href="{{asset('fe/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('fe')}}/css/animate.min.css" rel="stylesheet"> 
  <link href="{{asset('fe')}}/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{asset('fe')}}/css/lightbox.css" rel="stylesheet">
  <link href="{{asset('fe')}}/css/main.css" rel="stylesheet">
  <link id="css-preset" href="{{asset('fe')}}/css/presets/preset7.css" rel="stylesheet">
  <link href="{{asset('fe')}}/css/responsive.css" rel="stylesheet">
  <link href="{{asset('fe')}}/css/box-shadows.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('fe')}}/js/stt/lib/css/ap-scroll-top.css">
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="{{asset('fe')}}/images/favicon.ico">
  <style>
      /*jssor slider loading skin spin css*/
      .jssorl-009-spin img {
          animation-name: jssorl-009-spin;
          animation-duration: 1.6s;
          animation-iteration-count: infinite;
          animation-timing-function: linear;
      }

      @keyframes jssorl-009-spin {
          from { transform: rotate(0deg); }
          to { transform: rotate(360deg); }
      }

      /*jssor slider arrow skin 106 css*/
      .jssora106 {display:block;position:absolute;cursor:pointer;}
      .jssora106 .c {fill:#fff;opacity:.3;}
      .jssora106 .a {fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10;}
      .jssora106:hover .c {opacity:.5;}
      .jssora106:hover .a {opacity:.8;}
      .jssora106.jssora106dn .c {opacity:.2;}
      .jssora106.jssora106dn .a {opacity:1;}
      .jssora106.jssora106ds {opacity:.3;pointer-events:none;}

      /*jssor slider thumbnail skin 101 css*/
      .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
      .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
      .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
      .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
      .jssort101 .p:hover{padding:2px;}
      .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
      .jssort101 .p:hover.pdn{padding:0;}
      .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
      .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
      .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
      .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
      .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
  </style>
</head><!--/head-->

<body>

  <!--.preloader
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  /.preloader
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  -->
  <header id="home" style="background: white">
   
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="{{asset('fe')}}/images/logo.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll "><a href="#home">Home</a></li>
            <li class=""><a href="holidays.html">Holidays & Events</a></li>
            <li class=""><a href="holidays.html">Who we are</a></li>           
            <li class="active"><a href="holidays.html">Gallery</a></li>
            <li class=""><a href="{{url('/contact')}}">Contact Us</a></li>
            <li class="donate"><a href="holidays.html">Donate</a></li>
            
            </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->

  <br>




  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
      <!-- Loading Screen -->
      <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
          <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
      </div>
      <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
          @foreach ( $directory as $photo )
          <div>
              <img data-u="image" src="{{asset(Storage::url($photo))}}" />
              <img data-u="thumb" src="{{asset(Storage::url($photo))}}" />
          </div> 
          @endforeach
        
      </div>
      <!-- Thumbnail Navigator -->
      <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
          <div data-u="slides">
              <div data-u="prototype" class="p" style="width:190px;height:90px;">
                  <div data-u="thumbnailtemplate" class="t"></div>
                  <svg viewbox="0 0 16000 16000" class="cv">
                      <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                      <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                      <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                  </svg>
              </div>
          </div>
      </div>
      <!-- Arrow Navigator -->
      <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
              <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
              <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
              <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
          </svg>
      </div>
      <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
              <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
              <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
              <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
          </svg>
      </div>
  </div>
        
      </div>
    </div>
  </div>
<br>
<div></div>

  <footer id="footer">
    <div class="footer-top">      
        <div class="container">
            <div class="row">
              <div class="col-lg-3 mb-5 mb-lg-0 text-center">
                  <div class="footer-logo">
                      <a href="index.html"><img class="img-responsive" src="{{asset('fe')}}/images/logo5.png" alt=""></a>
                    </div>
                    <ul class="list-unstyled">
                        <p>
                            SU Botswana is a member of the worldwide movement of Scripture Union.
                        </p>
                    <li> <a href="#" class="footer-link btn btn-default btn-block btn-flat donate-btn">Donate</a></li>
              
              </div>
              <div class="col-lg-3 mb-5 mb-lg-0">
                <h5 class="footer-heading">Contacts</h5>
                <ul class="list-unstyled">
                  <li><strong>Postal Add.</strong> : P O Box 444,Gaborone</li>
                  <li><strong>Tel.</strong> : +267 390 08 98</li>
                  <li><strong>Fax.</strong> : +267 391 27 45</li>
                 </ul>
              </div>
              <div class="col-lg-3 mb-5 mb-lg-0">
                <h5 class="footer-heading">Resources</h5>
                <ul class="list-unstyled">
                  <li> <a href="#" class="footer-link">Prayer Diary</a></li>
                  <li> <a href="#" class="footer-link">Newsletter</a></li>
                  <li> <a href="#" class="footer-link whoweare_open">About Us</a></li>
                </ul>
              </div>
              <div class="col-lg-3">
                <h5 class="footer-heading">Extra Links</h5>
                <ul class="list-unstyled">
                  <li> <a href="https://scriptureunion.global/" class="footer-link">SU Global</a></li>
                  <li> <a href="https://su.org.za/" class="footer-link">SA South Africa</a></li>
                   <li> <a href="https://www.sumag.co.za/" class="footer-link">SU Mag South Afriva<a></li>
                    <li> <a href="http://www.wordspace.co.za/" class="footer-link">Wordspace</a></li>
                    <li> <a href="https://www.subooks.co.za/" class="footer-link">SU Books</a></li>
                    <li> <a href="#" class="footer-link">Job Vacancies</a></li>
                    <li> <a href="{{url('/admin')}}" class="footer-link">Member Login</a></li>                   
                </ul>
              </div>
            </div>
          </div>
          <div class="container text-center">        
        
        <div class="social-icons">
          <h5 style="color:white">Connect with us.</h5>
          <ul>
            <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="facebook" href="https://www.facebook.com/SUBotswana/"><i class="fa fa-facebook"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p>&copy; 2019 Scripture Union Botswana</p>
            </div>
            <div class="col-sm-6">
              <p class="pull-right">Designed by <a href="#">Man Dogs</a></p>
            </div>
          </div>
        </div>
      </div>
  </footer>

  <script type="text/javascript" src="{{asset('fe')}}/js/jquery.js"></script>
  <script src="{{asset('fe')}}/js/footer-reveal.min.js"></script>
  <script type="text/javascript" src="{{asset('fe')}}/js/bootstrap.min.js"></script>
   <script src="{{asset('fe')}}/js/jquery.popupoverlay.js">
  </script>
  <script type="text/javascript">
    // Setup plugin with default settings
    $(document).ready(function() {
      jssor_1_slider_init();

     
      $('#camping, #holiday,#scg, #training,#lifeskill, #volunteering, #whoweare').popup({
        closebutton:false,
        escape: true,
  blur: true,
  color: 'white',
  opacity: 0.95,
  transition: '0.3s',
  scrolllock: true
});

      //$('#standalone').popup();



        $.apScrollTop({
            'onInit': function(evt) {
                console.log('apScrollTop: init');
            },
            //'enabled':true
            
        });
    });
  </script>
 <script type="text/javascript" src="{{asset('fe')}}/js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="{{asset('fe')}}/js/wow.min.js"></script>
  <script type="text/javascript" src="{{asset('fe')}}/js/mousescroll.js"></script>
  <script type="text/javascript" src="{{asset('fe')}}/js/smoothscroll.js"></script>
  <script type="text/javascript" src="{{asset('fe')}}/js/jquery.countTo.js"></script>
  <script type="text/javascript" src="{{asset('fe')}}/js/lightbox.min.js"></script>
  <script type="text/javascript" src="{{asset('fe')}}/js/main.js"></script>
  <script src="{{asset('fe')}}/js/stt/lib/js/ap-scroll-top.min.js"></script>
  <script src="{{asset('js')}}/jssor.slider-28.0.0.min.js"></script>
  <script type="text/javascript">

    window.jssor_1_slider_init = function() {

        var jssor_1_SlideshowTransitions = [
          {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
        ];

        var jssor_1_options = {
          $AutoPlay: 1,
          $SlideshowOptions: {
            $Class: $JssorSlideshowRunner$,
            $Transitions: jssor_1_SlideshowTransitions,
            $TransitionsOrder: 1
          },
          $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
          },
          $ThumbnailNavigatorOptions: {
            $Class: $JssorThumbnailNavigator$,
            $SpacingX: 5,
            $SpacingY: 5
          }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = 980;

        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {

                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                jssor_1_slider.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();

        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    };
</script>
  
</body>
</html>