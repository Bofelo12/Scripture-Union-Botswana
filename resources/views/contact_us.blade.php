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
  <link rel="stylesheet" href="{{asset('js/dd/dist/min/jquery.sweet-dropdown.min.css')}}">
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
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
                  <li><a href="#">Camps</a></li>                  
                  <li><a href="#">Events Calendar</a></li>
                </ul>
              </div>
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

  <section id="contact">
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Contact Us</h2>
            <p>
                Feel free to send us a message.
            </p>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              <form id="main-contact-form" name="contact-form" method="post" action="#">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group">
                          <input type="number" name="subject" class="form-control" placeholder="Cell No." required="required">
                        </div>
                  </div>
                </div>
                

                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                  </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
                </div>                        
                <div class="form-group">
                  <button type="submit" class="btn-submit">Send Now</button>
                </div>
              </form>   
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p>Looking for your kids to have a great holiday and find out more about faith? Our camps have everything you need!</p>
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Address:</span>Gaborone, Botswana</li>
                  <li><i class="fa fa-phone"></i> <span> Phone:</span> +267 390 08 98 </li>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:tmdsaint@gmail.com"> tmdsaint@gmail.com</a></li>
                  <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="https://www.subotswana.org.bw">www.subotswana.org.bw</a></li>
                </ul>
              </div>                            
            </div>
          </div>
        </div>
      </div>
    </div>        
  </section><!--/#contact-->  

  
   

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



        $.apScrollTop({
            'onInit': function(evt) {
                console.log('apScrollTop: init');
            },
            //'enabled':true
            
        });
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