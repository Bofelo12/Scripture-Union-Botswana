<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SUBotswana</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
         <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        

        <style>

             /* Make the image fully responsive */
             .carousel-inner img {
                    width: 100%;
                    height: 100%;
                }

                .carousel-caption{
                    top: 50%;
                    bottom: initial;
                    transform: translateY(-50%);
                }

                /* :: 8.0 About Us Area CSS */
                .faith-about-area {
                    position: relative;
                    z-index: 1; }
                .faith-about-area .about-content {
                    text-align: center;
                    border-bottom: 2px solid #e8e8e8;
                    padding-bottom: 100px; }
                .faith-about-area .about-content img {
                    margin-bottom: 15px; }
                .faith-about-area .about-content h2 {
                    font-size: 36px;
                    margin-bottom: 30px;
                    font-style: italic;
                    font-weight: 500; }
                @media only screen and (max-width: 767px) {
                    .faith-about-area .about-content h2 {
                        font-size: 24px; 
                    } 
                }
                .faith-about-area .about-content h6 {
                     color: #5a5a5a;
                     font-weight: 500;
                     line-height: 2;
                     margin-bottom: 0; }

                .section-padding-100-0 {
                     padding-top: 100px;
                     padding-bottom: 0; }

                .img_yes {
                         display: block;
                }  

                .overlay {
                     position: absolute;
                     top: 0;
                     bottom: 0;
                     left: 0;
                     right: 0;
                     height: 100%;
                     width: 100%;
                     opacity: 0;
                     transition: .5s ease;
                     background-color: #008CBA;
                }

                .before:hover .overlay {
                    opacity: 1;
                }

                .img_no {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    -webkit-transform: translate(-50%, -50%);
                    -ms-transform: translate(-50%, -50%);
                    transform: translate(-50%, -50%);
                }

        </style>
    </head>
    <body>
     
              
   <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">
                <img src="http://placehold.it/150x50?text=Logo" alt="">
              </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home
                      <span class="sr-only">(current)</span>
                    </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Holidays & Events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Who We Are</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">What We Do</a>
              </li>
              <li class="nav-item">
                    <a class="nav-link" href="#">Support Us</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
</nav>
            
              
<div class="pt-4"></div>



            

                
            
                                <section class="cd-section">
                                <div class="col-xs-1 col-md-4  pb-3 pr-3 pl-3 before">
                                        <img src="{{asset('img/camping.png')}}" class="img_yes" alt="camping"  width="100%" height="100%">
                                            <div class="overlay">
                                                <img src="{{asset('img/camping_no.png')}}" class="img_no" alt="camping"  width="100%" height="100%">
                                            </div> 
                                    </div>

                                    <div class="col-xs-1 col-md-4  pb-3 pr-3 pl-3 before">
                                            <img src="{{asset('img/holiday.png')}}" class="img_yes" alt="camping"  width="100%" height="100%">
                                            
                                                <div class="overlay">
                                                    <img src="{{asset('img/holiday_no.png')}}" class="img_no" alt="camping"  width="100%" height="100%">
                                                    <div class="cd-modal-action-1">
                                                            <p ><i class="fa fa-accusoft"></i></p>
                                                            <p data-type="modal-trigger">helllllllllllllllllllllllllo</p>
                                                            <span class="cd-modal-bg-1"></span>
                                                    </div>
                                                    <div class="cd-modal-1">
                                                            <div class="cd-modal-content-1">
                                                               <!-- modal content here -->
                                                               <p>Hello</p>
                                                            </div>
                                                     </div>
                                                     <a href="#0" class="cd-modal-close-1">Close</a>
                                             </div> 
                                        </div>
    
                                        <div class="col-xs-1 col-md-4  pb-3 pr-3 pl-3 before">
                                                <img src="{{asset('img/scg.png')}}" class="img_yes" alt="camping"  width="100%" height="100%">
                                                
                                                    <div class="overlay">
                                                        <img src="{{asset('img/scg_no.png')}}" class="img_no" alt="camping"  width="100%" height="100%">
                                                        <div class="cd-modal-action-2">
                                                                <p ><i class="fa fa-accusoft"></i></p>
                                                                <p data-type="modal-trigger">helllllllllllllllllllllllllo</p>
                                                                <span class="cd-modal-bg-2"></span>
                                                        </div>
                                                        <div class="cd-modal-2">
                                                                <div class="cd-modal-content-2">
                                                                   <!-- modal content here -->
                                                                   <p>Hello</p>
                                                                </div>
                                                         </div>
                                                         <a href="#0" class="cd-modal-close-2">Close</a>
                                                 </div> 
                                            </div>
                                </section>
                 

         <section>
      
      <div class="col-xs-1 col-md-4  pb-3 pr-3 pl-3 before">
            <img src="{{asset('img/camping.png')}}" class="img_yes" alt="camping"  width="100%" height="100%">
                <div class="overlay">
                    <a href="http://" data-toggle="modal" data-target="#myModal" >
                    <img src="{{asset('img/camping_no.png')}}" class="img_no" alt="camping"  width="100%" height="100%">
                     </a>  
                </div> 
        </div>

      <!-- The Modal -->
      <div class="modal" id="myModal">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Modal Heading</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
      
            <!-- Modal body -->
            <div class="modal-body">
              Modal body..
            </div>
      
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
      
          </div>
        </div>
      </div>
         </section>



                                
                                        
                                


</html>
