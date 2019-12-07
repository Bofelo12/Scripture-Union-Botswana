<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SU BOTSWANA - Events</title>
  <link href="{{asset('fe/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('fe')}}/css/animate.min.css" rel="stylesheet"> 
  <link href="{{asset('fe')}}/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{asset('fe')}}/css/lightbox.css" rel="stylesheet">
  <link href="{{asset('fe')}}/css/main.css" rel="stylesheet">
  <link id="css-preset" href="{{asset('fe')}}/css/presets/preset7.css" rel="stylesheet">
  <link href="{{asset('fe')}}/css/responsive.css" rel="stylesheet">
  <link href="{{asset('fe')}}/css/box-shadows.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('fe')}}/js/stt/lib/css/ap-scroll-top.css">
  <link rel="stylesheet" href="{{asset('js/dd/dist/min/jquery.sweet-dropdown.min.css')}}">
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
 <style>
.event-name:hover h4{color:#dd2f62}
 </style> 
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="{{asset('fe')}}/images/favicon.ico">
</head><!--/head-->

<body>

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
            <li data-dropdown="#basic"><a href="#">Holidays & Events <span class="fa fa-chevron-down" style="color:white"></span></a></li>
              <div class="dropdown-menu dropdown-anchor-top-left" id="basic" style="width:250px">                
                <ul>
                  <li><a href="#">Holidays & Events</a></li>                               
                  <li><a href="{{url('/events_calendar')}}">Events Calendar</a></li>
                </ul>
              </div>
            <li class=""><a href="holidays.html">Blogs</a></li>           
            <li class=""><a href="holidays.html">Gallery</a></li>
            <li class=""><a href="{{url('/contact')}}">Contact Us</a></li>
            <li class="donate"><a href="holidays.html">Donate</a></li>            
            
            
            </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  <!-- header above-->
  
  
  
  <div class="container-fluid" style="background: rgba(0, 0, 0, 0.50);color:white" >
      <div class="row">  </div><br><br>
      <div class="row">   
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="row">   
                <div class="col-sm-3"></div>           
                  <div class="col-sm-6">
                      <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                          <h2 style="color:white">
                            All Upcoming Events</h2>
                       </div>
                  </div>
                  <div class="col-sm-3"></div> 
            </div>
        </div>
        <div class="col-lg-3"></div>                        
      </div>
      <div class="row">  </div><br><br>
 </div>

 <br>
 <div class="container">   
    <div class="row">      
      <div class="col-lg-7"> 
         @foreach ($events as $event)
         <div style="border-bottom:#dddddd solid thin;padding-bottom:10px"> 
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-3  col-xs-3 text-center" >
                    <div style="border:#dddddd solid thin;padding-top:10px">
                        <p style="background:
                        #dd2f62;color:white">{{$event['year']}}
                        </p>
                        <p style="text-transform: uppercase;font-size:20px"><strong>{{$event['day']}}</strong></p>
                        <p>{{$event['month']}}</p>
                    </div>
              </div>
  
              <div class="col-lg-10 col-md-10 col-sm-9  col-xs-9">
                    <a href="#" class="event-name">
                        <h4 style="font-weight:500;text-transform: uppercase;">
                            {{$event['name']}}
                          </h4>
                    </a>
                     <p style="color:#c6c6c6 ">
                        <span style="padding-right:10px">
                      <i class="fa fa-map-marker">
                        </i> {{$event['location']}}
                      </span>
                         
                        <span style="padding-right:10px">
                          <i class="fa fa-clock-o"></i> {{$event['time']}}
                        </span>
                      </p>
                  
              </div>
            </div>
          </div>
            <br>
          @endforeach 
        
                
      </div>
      <div class="col-lg-3"></div>
                              
    </div>
   
</div>

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
    
    /*  $('footer').footerReveal(
        { shadow: true, zIndex: -101 }
      );*/

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



      /*  $.apScrollTop({
            'onInit': function(evt) {
                console.log('apScrollTop: init');
            },
            //'enabled':true
            
        });*/
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
  <script src="{{asset('js/dd/dist/min/jquery.sweet-dropdown.min.js')}}"></script>

  
</body>
</html>

