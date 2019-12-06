<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SU BOTSWANA - Home</title>
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
</head><!--/head-->

<body>

  <!--.preloader
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  /.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  
  <header id="home" style="background: white">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url({{asset('fe')}}/images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Welcome to <span>SU Botswana</span></h1>
            <p class="animated fadeInRightBig">bringing transformation to the lives of young people, enabled by God’s Spirit</p>
            <a  class="btn btn-start animated fadeInUpBig" href="">Donate</a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
            <a  class="btn btn-start animated fadeInUpBig" href="">Resources</a>
          
          </div>
        </div>
        <div class="item" style="background-image: url({{asset('fe')}}/images/slider/2.jpg)">
          <div class="caption">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <p class="animated fadeInRightBig">
                      In Botswana there is an independant movement in each district.
                      Contact you local coordinator for more info.
                    </p>
                </div>
                <div class="col-lg-3"></div>
              </div>
            </div>
            <a  class="btn btn-start animated fadeInUpBig" href="">Donate</a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
            <a  class="btn btn-start animated fadeInUpBig" href="">Resources</a>
           
          </div>
        </div>
        <div class="item" style="background-image: url({{asset('fe')}}/images/slider/3.png)">
          <div class="caption">           
            
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
     
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
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


  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            <div class="text-center">
            <h2>About Us</h2>
              <p>
                  <span style="color:#dd2f62">Scripture Union</span> is a movement of Christians which works with churches to make God’s Good News known to children, young people and families,
                  and to encourage people of all ages to meet God daily through bible reading and prayer. We do this so people will come to faith,
                  grow in Christian maturity and become committed church members and servants to a world in need.
                 We are creating a movement that transforms the lives of young people across the Nation. Below
                 are some of the 
                <strong>activities that we do!</strong>
                </p>
           
                 <br>                
           
                </div>
          </div>
          <div class="col-lg-1"></div>
          
        </div> 

        <section id="team">
            <div class="container">             
              <div class="team-members">
                <div class="row">
                  <a href="#" class="camping_open">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 box-shadow ">
                    <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                      <div class="member-image">
                        <img class="img-responsive scg" alt="Camping">
                      </div>
                      <div class="member-info">
                        <h3>Camping</h3>
                       </div>                      
                    </div>
                  </div>
                  </a>

                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 box-shadow holiday_open">
                      <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="member-image">
                          <img class="img-responsive scg" alt="Holiday Club">
                        </div>
                        <div class="member-info">
                          <h3>Holiday Clubs</h3>
                         </div>                      
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 box-shadow scg_open">
                        <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                          <div class="member-image">
                            <img class="img-responsive scg" alt="school christian groups">
                          </div>
                          <div class="member-info">
                            <h3>School Christian Group</h3>
                           </div>                      
                        </div>
                      </div>                  
                </div>
                <br>
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 box-shadow training_open">
                    <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                      <div class="member-image">
                        <img class="img-responsive scg" alt="Training">
                      </div>
                      <div class="member-info">
                        <h3>Training</h3>
                       </div>                      
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 box-shadow lifeskill_open">
                      <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="member-image">
                          <img class="img-responsive scg" alt="Lifestyle">
                        </div>
                        <div class="member-info">
                          <h3>Lifeskills</h3>
                         </div>                      
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 box-shadow volunteering_open">
                        <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                          <div class="member-image">
                            <img class="img-responsive scg" alt="Volunteering">
                          </div>
                          <div class="member-info">
                            <h3>Volunteering</h3>
                           </div>                      
                        </div>
                      </div>                  
                </div>
              </div>            
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                       <a href="#" class="joinus btn btn-block">Join Us</a>
                    </div>
                    <div class="col-lg-4"></div>
                    </div>
            </div>           
          </section>           
      </div>
      
    </div>
  </section><!--/#services-->

<div style="background:white">
  <section id="twitter" class="parallax">
      <div>
        <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
        <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <div class="twitter-icon text-center">
                <img src="{{asset('fe')}}/images/logo.png" alt="su bots logo">
                <h4>SU BOTSWANA - TESTIMONIES</h4>
              </div>
              <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <p>
                        Chappy celebrated for going “above and beyond”
                      <a href="#">link</a></p>
                  </div>
                  <div class="item">
                      <p>
                          Chappy celebrated for going “above and beyond”
                        <a href="#">link</a></p></div>
                  <div class="item">                                
                    <p>
                        Chappy celebrated for going “above and beyond”
                      <a href="#">link</a></p></div>
                </div>                        
              </div>                    
            </div>
          </div>
        </div>
      </div>

      
    </section><!--/#twitter-->

    <!--blog-->
    <section id="blog">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-lg-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
            <h2>What's Up?</h2>
           </div>
        </div>


        <div class="blog-posts">          
                 <div class="container-fluid">
                    <div class="row">
    @empty($posts)
            <p>There are currently no posts.</p>
        @else
    <div class="row">
        @foreach($posts as $post)  
        <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="post-thumb">
              <a href="{{ route('blog.show', ['slug' => $post->slug]) }}">
                  <img class="img-responsive" src="{{imageUrl($post->image) }}">
              </a>
              <!--<<div class="post-meta">
                <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                <span><i class="fa fa-heart"></i> 0 Likes</span> 
              </div>
              div class="post-icon">
                <i class="fa fa-pencil"></i>
              </div>-->
            </div>
            <div class="entry-header">
              <h3><a href="{{ route('blog.show', ['slug' => $post->slug]) }}">{{ $post->title  }}</a></h3>
              <span class="date">{{ $post->created_at->format('d/m/Y')}}</span>
              <span class="cetagory">By <strong><i class="fa fa-user"></i> {{$user->getUser($post->author_id)}}</strong></span>
            </div>
            <div class="entry-content">
                @if ($post->excerpt)
                <p>{{ Illuminate\Support\Str::limit($post->excerpt, 50, '&hellip;') }}</p>
                @endif
            </div>
          </div>
          @endforeach
    </div>
    @endempty
  </div>       
  <br>
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-4"></div>
          <div class="col-lg-4">
             <a href="{{url('blogs')}}" class="joinus btn btn-block">Load more posts</a>
          </div>
          <div class="col-lg-4"></div>
          </div>
  </div> 
          </div>
         <!--  <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
           <a href="#" class="btn-loadmore"><i class="fa fa-repeat"></i> Load More</a>
           </div>       -->         
        </div>
      </div>
      
    </section>
  
    <!--blog-->
  </div>
  <section id="features" class="parallax bShadow">
    <div class="container">
      <div class="row">   
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">
                    <img class="img-responsive" src="{{asset('fe')}}/images/about/sunews.png" alt="su news">
                  </div> 
                  <div class="col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
                               <br>
                    <h3>READ OUR LATEST STORIES</h3>
                    <a href="#" class="btn btn-default btn-flat">click here</a>                  
                  </div>
            </div>
        </div>
        <div class="col-lg-3"></div>                        
      </div>
    </div>


    <div id="camping" style="font-size:20px">
      <div class="container">
        <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">   
              <div class="row" >
                  <div class="col-lg-4"></div>
                  <div class="col-lg-4 text-center">
                      <h2 style="color: #dd2f62">Camping</h2>
                  </div>
                  <div class="col-lg-4"></div>
                </div>     
            <p>
                Outdoors has consistently been a significant instrument in the SU armory 
                since we have seen the significance of escaping our typical schedules, 
                assembling with companions and prospective companions, having a great
                time and studying our Creator and ourselves. Outdoors does this thus 
                significantly more! Each outdoors experience is planned by well-prepared 
                pioneers considering one fundamental objective: to give campers a remarkable
                encounter that changes (their) lives. <br><br>Regardless of whether it is an 
                initiative camp, occasion camp or a camp revolved around an exceptional
                movement, each camp means to interface youngsters to God and to one 
                another inside the wellbeing of a well-overseen outdoors experience.
                Energizing camps occur during the year around Botswana. 
                <a href="" style="color:dodgerblue;text-decoration:underline">View Events Calendar</a>
            </p>
<br>
            <div class="row" >
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <button class="btn btn-flat btn-block btn-danger JPO_close">
                      Press me to Close / Esc keyboard key
                    </button>
                </div>
                <div class="col-lg-4"></div>
              </div>


          </div>
          <div class="col-lg-1"></div>
        </div>
      </div>      
    </div>
    <div id="whoweare" style="font-size:20px">
        <div class="container-fluid">
          <div class="row">            
            <div class="col-lg-12">   
                <div class="row" >
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4 text-center">
                        <h2 style="color: #dd2f62">Who we are</h2>
                    </div>
                    <div class="col-lg-4"></div>
                  </div>     
              <p>
                  <p class="text-center">
                      Scripture Union is a Christian charity, inviting children and young people
                      to explore the difference Jesus can make to the challenges and adventures
                     of life.
                  </p>
                 <br>
                 
                   <div class="container">
                     <div class="row">                     
                    <div class="col-lg-12">
                        <p>
                            Through a wide range of activities and initiatives, we provide 
                            opportunities for young people to explore the Bible, respond to 
                            Jesus and grow in faith. We also provide some great resources to
                             help others do the same.
                             <br>
                             Everything we do is governed by two core 
                             values: <strong>dependence on God</strong> and <strong>deepening relationships</strong>.
                             <br><br>
                      We want to see children and young people:
                      <p><i class="fa fa-chevron-right suf" style="padding-right:7px"></i>
                        <strong>Feeling valued and accepted in every encounter with SU Botswana</strong> - being able to express 
                        their views, engage with others, and grow in confidence as they recognise
                      </p>
                      <p><i class="fa fa-chevron-right suf" style="padding-right:7px"></i>
                        <strong>Exploring the key stories and events from the Bible,</strong> 
                        reading and studying the Bible on their own and with others, and
                         growing in their understanding of God and what
                      </p>
                      <p><i class="fa fa-chevron-right suf" style="padding-right:7px"></i>
                        <strong>Having opportunities to learn about Jesus</strong> 
                        making the decision to follow Jesus, and having the confidence
                        to reflect this in their choices, attitudes and actions
                      </p>
                     
                        </p>
                    </div>
                     </div>
                   </div>   
             <h2 style="color: #dd2f62" class="text-center">Values</h2> 
                   <div class="container">
                      <div class="row">                     
                     <div class="col-lg-12">
                       <p>
                        <i class="fa fa-chevron-right suf" style="padding-right:7px"></i>
                        <strong>Dependence on God :</strong> 
                        supporting all our work in prayer and rooting it in God’s word,
                         the Bible; keeping in step with God’s Spirit as the one who brings transformation.
                       </p>
                      <p><i class="fa fa-chevron-right suf" style="padding-right:7px"></i>
                        <strong>Deepening relationships:</strong> 
                        living in healthy and growing relationships as God intended; committed to ensuring that 
                        everyone encountering SU Botswana activities feels valued, whatever their beliefs, 
                        gender, sexuality, ethnicity, ability or disability; whether they be children, young
                         people, volunteers or supporters.
                      </p>        
                     </div>
                      </div>
                    </div> 
                    <p class="text-center">
                        These values are reflected in our decisions, our choices and the way we treat each other. All of our 
                        different activities, plans and projects grow from these core principles.
                        <a href="" style="color:dodgerblue;text-decoration:underline">Feel free to send us a message</a>
                                 </p>
                

              </p>
  <br>
              <div class="row" >
                  <div class="col-lg-4"></div>
                  <div class="col-lg-4">
                      <button class="btn btn-flat btn-block btn-danger JPO_close">
                        Press me to Close / Esc keyboard key
                      </button>
                  </div>
                  <div class="col-lg-4"></div>
              </div>
  
  
            </div>
            <div class="col-lg-1"></div>
          </div>
          
        </div>      
      </div>  
    <div id="holiday" style="font-size:20px">
        <div class="container">
            <div class="row">
              <div class="col-lg-1"></div>
              <div class="col-lg-10">   
                  <div class="row" >
                      <div class="col-lg-4"></div>
                      <div class="col-lg-4 text-center">
                          <h2 style="color: #dd2f62">Holiday Clubs</h2>
                      </div>
                      <div class="col-lg-4"></div>
                    </div>     
                <p>
                    Occasion Club is a sensational, insane, youngsters cherishing, Gospel 
                    soaked, multi day program offered in numerous neighborhood networks for
                     both churched and unchurched essential and secondary school age
                      gatherings. It is jam-pressed with long stretches of energizing games
                       and exercises that will change a typical school occasion into a
                        remarkable occasion. The well-prepared staff or volunteer gatherings 
                        driving Holiday Clubs have all been screened and assessed by stringent
                        Child welfare necessities, making a protected domain for your kids.
<br><br>
Each Holiday Club has a reason: That each youngster who goes to would encounter
 God's affection through the accounts and exercises and realize that they are cherished, 
 acknowledged, and of incredible worth.Occasion Clubs normally run during the June/July school occasions, except for a not many 
which run consistently.This is the thing that our National Training Coordinator needed to 
state with respect to Holiday Clubs:
<br><br>
<span style="font-size:18px">
    <i>
        "During the occasion time frame every year, a great many youngsters are searching for 
        something to do. What an unbelievable open door for temples and local gatherings to
        connect with these youngsters and help shape their predeterminations for good!
        The advantages are astonishing! During these clubs, kids appreciate fun exercises while
         being driven and guided inside the setting of their networks and houses of worship by
          groups of prepared and submitted Christian pioneers familiar with the estimations of SU.
           It is difficult to envision a superior safe space for youngsters to invest their free 
           energy while their folks are frequently at work." 
          </i>
</span>
                    <a href="" style="color:dodgerblue;text-decoration:underline">View Events Calendar</a>
                </p>
    <br>
                <div class="row" >
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <button class="btn btn-flat btn-block btn-danger JPO_close">
                          Press me to Close / Esc keyboard key
                        </button>
                    </div>
                    <div class="col-lg-4"></div>
                  </div>
    
    
              </div>
              <div class="col-lg-1"></div>
            </div>
          </div>  
    </div>
      <div id="scg" style="font-size:20px">
          <div class="container">
              <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">   
                    <div class="row" >
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 text-center">
                            <h2 style="color: #dd2f62">School Christian Groups</h2>
                        </div>
                        <div class="col-lg-3"></div>
                      </div>     
                  <p>
                      One of the key ways we expect to 'assist youthful with peopling know 
                      and stroll with God' is through our week by week sensational and 
                      energizing social events of understudies crosswise over categories. 
                      These gatherings are totally deliberate and give the chance to a large 
                      umber of generally unchurched youngsters and youth to find out about the
                       uplifting news of Jesus! Under the direction of an eager and energetic 
                       instructor, parent or volunteer, youngsters are urged to investigate 
                       their confidence in Jesus and to assist them with turning out to be keen
                        and customary Bible perusers. This is done through stories, games,
                         discourses, music, declarations thus considerably more! In both Primary
                          and High schools, Christian gatherings are called various things however
                           we call them SCG's.
                           <br><br>
                      We trust it is imperative to help the youngsters crosswise over schools as
                       well as to support and fortify Christian instructors. We help to asset and
                        bolster instructors, hole year groups or willful specialists to run these 
                        week after week gatherings. Sharing the Christian message and qualities by
                         SU pioneers through SCG's keeps on transformatively affecting youngsters, 
                         helping them create as entire individuals – socially, rationally, 
                         profoundly and physically, empowering them to observer to their schools 
                         and networks. Thousands crosswise over South Africa bear declaration to the
                          estimation of SCGs in Primary Schools and High Schools.
                      
                          <br><br>
                          <a href="" style="color:dodgerblue;text-decoration:underline">
                              Contact your closest SU local office 
                          </a> for more data on the most proficient
                      method to begin a SCG in your school.
                      
                  </p>
      <br>
                  <div class="row" >
                      <div class="col-lg-4"></div>
                      <div class="col-lg-4">
                          <button class="btn btn-flat btn-block btn-danger JPO_close">
                            Press me to Close / Esc keyboard key
                          </button>
                      </div>
                      <div class="col-lg-4"></div>
                    </div>
      
      
                </div>
                <div class="col-lg-1"></div>
              </div>
            </div>
      </div>      
      <div id="lifeskill" style="font-size:20px">
          <div class="container">
              <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">   
                    <div class="row" >
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4 text-center">
                            <h2 style="color: #dd2f62">Lifeskills</h2>
                        </div>
                        <div class="col-lg-4"></div>
                      </div>     
                  <p>
                      Lifeskills is all about equipping young people with values-based decision-making 
                      skills. In and out of school, Scripture Union uses a fun, relevant, experiential 
                      learning program to help young people clarify their values and gives them skills 
                      to navigate life at this important stage of their development. It is offered as
                       part of the Life Orientation subject in school, or out of school at camps or 
                       holiday clubs. The project began in 1991, when the HIV pandemic was taking root
                       in South Africa, as a response to the growing need for young people to learn how
                        to think for themselves and avoid peer pressure in all areas of life. They are 
                        encouraged to choose a set of values (hence behaviour) which would put them at 
                        least risk of negative consequences such as drug and alcohol abuse, gangs and 
                        also exposure to HIV. In short, young people learn:

                        <br>
                        <p><i class="fa fa-chevron-right suf" style="padding-right:7px"></i>how to make good decisions & develop self-esteem</p>
                        <p><i class="fa fa-chevron-right suf" style="padding-right:7px"></i>how to develop a set of personal values & set goals and also learn tolive healthily (nutrition, etc.)</p>
                        <p><i class="fa fa-chevron-right suf" style="padding-right:7px"></i>how to engage with peers and authority figures & think differently to the "crowd"</p>
                        <p><i class="fa fa-chevron-right suf" style="padding-right:7px"></i>how to value, respect life and also regard responsibilities (not just rights)</p>
                        <p><i class="fa fa-chevron-right suf" style="padding-right:7px"></i>how to rise above personal and family circumstances and formulate a belief system </p>
                        <p><i class="fa fa-chevron-right suf" style="padding-right:7px"></i>how to interact appropriately with members of the opposite sex, amongst others</p>
                     
                  </p>
      <br>
                  <div class="row" >
                      <div class="col-lg-4"></div>
                      <div class="col-lg-4">
                          <button class="btn btn-flat btn-block btn-danger JPO_close">
                            Press me to Close / Esc keyboard key
                          </button>
                      </div>
                      <div class="col-lg-4"></div>
                    </div>
      
      
                </div>
                <div class="col-lg-1"></div>
              </div>
            </div>
      </div>
        <div id="training" style="font-size:20px">
            <div class="container">
                <div class="row">
                  <div class="col-lg-1"></div>
                  <div class="col-lg-10">   
                      <div class="row" >
                          <div class="col-lg-4"></div>
                          <div class="col-lg-4 text-center">
                              <h2 style="color: #dd2f62">Training</h2>
                          </div>
                          <div class="col-lg-4"></div>
                        </div>     
                    <p>
                        Training is a key tool that empowers what we do at Scripture Union. We 
                        are committed to seeing young people grow and realise their full potential
                         as Christ followers on mission. This means that we offer a wide variety of
                          training programmes and workshops to equip an army of servant leaders that
                           will effectively serve the local church and engage the world.
                           <br>
                        These are the types of training we offer:
                        <br>
                        <h4><span class="suf">1. </span>Camp Directors Training</h4>
                        <p>Training to equip participants in the A to Z of directing a camp 
                        with SU’s Camping Values and general camping principles</p>
                        <h4><span class="suf">2. </span>Count Me In</h4>                        
                        <p>This training serves to train new volunteers, trendsetters, summit team 
                        with SU’s Ethos, Working Principles, Ministry Strategies and Personal
                        Development</p>                       
                        <h4><span class="suf">3. </span>Sunday School Teachers Training</h4>
                        <h4><span class="suf">4. </span>Holiday Club Training</h4>
                        <h4><span class="suf">5. </span>Leadership Training</h4>  
                    </p>
        <br>
                    <div class="row" >
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <button class="btn btn-flat btn-block btn-danger JPO_close">
                              Press me to Close / Esc keyboard key
                            </button>
                        </div>
                        <div class="col-lg-4"></div>
                      </div>
        
        
                  </div>
                  <div class="col-lg-1"></div>
                </div>
              </div>
        </div> 
            <div id="volunteering" style="font-size:20px">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">          
                      <p>
                          
                          <a href="" style="color:dodgerblue;text-decoration:underline">View Events Calendar</a>
                      </p>
          <br>
                      <div class="row" >
                          <div class="col-lg-4"></div>
                          <div class="col-lg-4">
                              <button class="btn btn-flat btn-block btn-danger JPO_close">
                                Press me to Close / Esc keyboard key
                              </button>
                          </div>
                          <div class="col-lg-4"></div>
                        </div>
          
          
                    </div>
                    <div class="col-lg-1"></div>
                  </div>
                </div>
                <!-- Add a button to close the popup (optional) -->
                
              </div>


  </section>
  <!--
  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Our Portfolio</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
        </div>
      </div> 
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/1.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/2.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/3.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/4.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/5.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/6.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/7.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/8.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div>
  </section>-->

  <!--/#team-->

 
<!--/#pricing
  <section id="pricing">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Pricing Table</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
        </div>
      </div>
      <div class="pricing-table">
        <div class="row">
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <h3>Basic</h3>
              <div class="price">
                $9<span>/Month</span>                          
              </div>
              <ul>
                <li>Free Setup</li>
                <li>10GB Storage</li>
                <li>100GB Bandwith</li>
                <li>5 Products</li>
              </ul>
              <a href="#" class="btn btn-lg btn-primary">Sign up</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <h3>Standard</h3>
              <div class="price">
                $19<span>/Month</span>                                
              </div>
              <ul>
                <li>Free Setup</li>
                <li>10GB Storage</li>
                <li>100GB Bandwith</li>
                <li>5 Products</li>
              </ul>
              <a href="#" class="btn btn-lg btn-primary">Sign up</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <h3>Featured</h3>
              <div class="price">
                $29<span>/Month</span>                                
              </div>
              <ul>
                <li>Free Setup</li>
                <li>10GB Storage</li>
                <li>100GB Bandwith</li>
                <li>5 Products</li>
              </ul>
              <a href="#" class="btn btn-lg btn-primary">Sign up</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <h3>Professional</h3>
              <div class="price">
                $49<span>/Month</span>                    
              </div>
              <ul>
                <li>Free Setup</li>
                <li>10GB Storage</li>
                <li>100GB Bandwith</li>
                <li>5 Products</li>
              </ul>
              <a href="#" class="btn btn-lg btn-primary">Sign up</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>-->

  
  
  

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
    
      $('footer').footerReveal(
        { shadow: true, zIndex: -101 }
      );

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

  
</body>
</html>