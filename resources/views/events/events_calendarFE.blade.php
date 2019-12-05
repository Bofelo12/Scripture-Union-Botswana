<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SU BOTSWANA - Contact Us</title>
  <link href="{{asset('fe/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('fe')}}/css/animate.min.css" rel="stylesheet"> 
  <link href="{{asset('fe')}}/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{asset('fe')}}/css/lightbox.css" rel="stylesheet">
  <link href="{{asset('fe')}}/css/main.css" rel="stylesheet">
  <link id="css-preset" href="{{asset('fe')}}/css/presets/preset7.css" rel="stylesheet">
  <link href="{{asset('fe')}}/css/responsive.css" rel="stylesheet">
  <link href="{{asset('fe')}}/css/box-shadows.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('fe')}}/js/stt/lib/css/ap-scroll-top.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
  <link rel="stylesheet" href="{{asset('dash/plugins/fullcalendar-interaction/main.min.css')}}">
   <link rel="stylesheet" href="{{asset('dash/plugins/fullcalendar-daygrid/main.min.css')}}">
   <link rel="stylesheet" href="{{asset('dash/plugins/fullcalendar-timegrid/main.min.css')}}">
   <link rel="stylesheet" href="{{asset('dash/plugins/fullcalendar-bootstrap/main.min.css')}}">
  
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="{{asset('fe')}}/images/favicon.ico">
</head><!--/head-->

<body >

  <!--.preloader
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  /.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
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
            <li class="scroll active"><a href="#home">Home</a></li>
            <li class=""><a href="holidays.html">Holidays & Events</a></li>
            <li class=""><a href="holidays.html">Who we are</a></li>           
            <li class=""><a href="holidays.html">Gallery</a></li>
            <li class=""><a href="{{url('/contact')}}">Contact Us</a></li>
            <li class="donate"><a href="holidays.html">Donate</a></li>
            
            </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  <!-- header above-->

  <section class="content" style="background:white">
    <div class="container">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12">

        <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">            
            Events Calendar             
          </h3>

       </div>
        <div class="card-body">         
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
              {!! $calendar->calendar() !!}
               
              </div>
            </div>
          </div>
        </div>
      
      </div>
        </div>
      
      <!-- tabs-->
      
     
    </div>
    </div>
  </section>
   
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

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
  <script src="{{asset('dash/plugins/fullcalendar-daygrid/main.min.js')}}"></script>
  <script src="{{asset('dash/plugins/fullcalendar-timegrid/main.min.js')}}"></script>
  <script src="{{asset('dash/plugins/fullcalendar-interaction/main.min.js')}}"></script>
  <script src="{{asset('dash/plugins/fullcalendar-bootstrap/main.min.js')}}"></script>
  {!! $calendar->script() !!}
  <script src="{{asset('fe')}}/js/footer-reveal.min.js"></script>
  <script type="text/javascript" src="{{asset('fe')}}/js/bootstrap.min.js"></script>
   <script src="{{asset('fe')}}/js/jquery.popupoverlay.js">
  </script>
  <script type="text/javascript">
    // Setup plugin with default settings
    $(document).ready(function() {
    
    $('footer').footerReveal(
        { shadow: true, zIndex: -101 }
      );

  
      //$('#standalone').popup();



    });
  </script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="{{asset('fe')}}/js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="{{asset('fe')}}/js/wow.min.js"></script>
  <script type="text/javascript" src="{{asset('fe')}}/js/mousescroll.js"></script>
  <script type="text/javascript" src="{{asset('fe')}}/js/smoothscroll.js"></script>
  <script type="text/javascript" src="{{asset('fe')}}/js/jquery.countTo.js"></script>
  <script type="text/javascript" src="{{asset('fe')}}/js/lightbox.min.js"></script>
  <script type="text/javascript" src="{{asset('fe')}}/js/main.js"></script>
  <script src="{{asset('fe')}}/js/stt/lib/js/ap-scroll-top.min.js"></script>

  
</body>
</html>