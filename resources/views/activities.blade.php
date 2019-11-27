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
  <link href="{{ asset('fontawesome/css/fontawesome.css') }}" rel="stylesheet">
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>

  <style>
    .section-padding-100-0 {
      padding-top: 100px;
      padding-bottom: 0;
    }

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

    .footer {
      background: #6c757d;
      color: white;
    }

    .footer .links ul {
      list-style-type: none;
    }

    .footer .links ul li a {
      color: white;

    }

    .footer .links a:hover {
      color: red;
    }

    .about-company i {
      font-size: 25px;
    }

    .about-company a {
      color: white;
      transition: color .2s;

      &:hover {
        color: #4180CB
      }
    }


    .location i {
      font-size: 18px;
    }

    .copyright p {
      border-top: 1px solid rgba(255, 255, 255, .1);
    }


    .modal-backdrop {
      background-color: rgb(108, 117, 125) !important;
      opacity: 1 !important;
    }

    body {
      padding-top: 5rem;
      background-image: url('img/background.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    }


    #su {
      width: 150px;
      height: auto;
    }
  </style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{url('home')}}">
        <img id="su" src="{{ asset('img/su.png') }}" alt="Scripture Union Botswana Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{url('home')}}">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('events')}}">Holidays & Events</a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('who')}}">Who We Are</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{url('activities')}}">What We Do</a>
            <span class="sr-only">(current)</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('gallery')}}">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid" style="background-image: url('img/work.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 30%;">
    <br>
    <h1 style="color:#ff7a04;">WHAT WE DO</h1>
    <hr>
  </div>
  <h5 style="text-align:center">Our vision at SU Botswana is to see the children and young people of Botswana exploring
    the
    Bible and responding to the significance of Jesus.</h5>
  <br>


  <!--Activies start-->

  <section>
    <div class="row">
      <div class="col-xs-1 col-md-4  pb-3 pr-3 pl-3 before">
        <img src="{{asset('img/camping.png')}}" class="img_yes" alt="camping" width="100%" height="100%">
        <div class="overlay">
          <a href="http://" data-toggle="modal" data-target="#myModal1" data-backdrop="true">
            <img src="{{asset('img/camping_no.png')}}" class="img_no" alt="camping" width="100%" height="100%">
          </a>
        </div>
      </div>

      <!-- The Modal -->
      <div class="modal" id="myModal1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Camping</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <p>Outdoors has consistently been a significant instrument in the SU armory since
                we have seen the significance of escaping our typical schedules, assembling with companions
                and prospective companions, having a great time and studying our Creator and ourselves.
                Outdoors does this thus significantly more! Each outdoors experience is planned
                by well-prepared pioneers considering one fundamental objective:
                to give campers a remarkable encounter that changes (their) lives.
                Regardless of whether it is an initiative camp, occasion camp or a camp revolved around an exceptional
                movement, each camp means to interface youngsters to God and to one another inside the wellbeing of a
                well-overseen outdoors experience.</p>

              <p>Energizing camps occur during the year around Botswana.</p>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>


      <div class="col-xs-1 col-md-4  pb-3 pr-3 pl-3 before">
        <img src="{{asset('img/holiday.png')}}" class="img_yes" alt="camping" width="100%" height="100%">
        <div class="overlay">
          <a href="http://" data-toggle="modal" data-target="#myModal2" data-backdrop="true">
            <img src="{{asset('img/holiday_no.png')}}" class="img_no" alt="camping" width="100%" height="100%">
          </a>
        </div>
      </div>

      <!-- The Modal -->
      <div class="modal" id="myModal2">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Holiday Clubs</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <p>Occasion Club is a sensational, insane, youngsters cherishing, Gospel soaked, multi day program offered
                in numerous neighborhood networks for both churched and unchurched essential and secondary school age
                gatherings.
                It is jam-pressed with long stretches of energizing games and exercises that will change a typical
                school occasion into a remarkable occasion.
                The well-prepared staff or volunteer gatherings driving Holiday Clubs have all been screened and
                assessed by stringent Child welfare necessities,
                making a protected domain for your kids.</p>

              <p>Each Holiday Club has a reason: That each youngster who goes to would encounter
                God's affection through the accounts and exercises and realize that they are cherished,
                acknowledged, and of incredible worth.</p>

              <p>Occasion Clubs normally run during the June/July school occasions, except for a not many which
                run consistently.</p>

              <p>This is the thing that our National Training Coordinator needed to state with respect to Holiday Clubs:
              </p>

              <p>
                "During the occasion time frame every year, a great many youngsters are searching for something to do.
                What an unbelievable open door for temples and local gatherings to connect with these youngsters and
                help shape their predeterminations for good!</p>

              <p>The advantages are astonishing! During these clubs, kids appreciate fun exercises while being
                driven and guided inside the setting of their networks and houses of worship by groups of prepared
                and submitted Christian pioneers familiar with the estimations of SU. It is difficult to envision
                a superior safe space for youngsters to invest their free energy while their folks are frequently
                at work."</p>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>


      <div class="col-xs-1 col-md-4  pb-3 pr-3 pl-3 before">
        <img src="{{asset('img/scg.png')}}" class="img_yes" alt="camping" width="100%" height="100%">
        <div class="overlay">
          <a href="http://" data-toggle="modal" data-target="#myModal3" data-backdrop="true">
            <img src="{{asset('img/scg_no.png')}}" class="img_no" alt="camping" width="100%" height="100%">
          </a>
        </div>
      </div>

      <!-- The Modal -->
      <div class="modal" id="myModal3">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">School Christian Groups</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <p>One of the key ways we expect to 'assist youthful with peopling know and stroll with God' is
                through our week by week sensational and energizing social events of understudies
                crosswise over categories. These gatherings are totally deliberate and give the chance
                to a large number of generally unchurched youngsters and youth to find out about the uplifting
                news of Jesus! Under the direction of an eager and energetic instructor, parent or volunteer,
                youngsters are urged to investigate their confidence in Jesus and to assist them with turning
                out to be keen and customary Bible perusers. This is done through stories, games, discourses,
                music, declarations thus considerably more! In both Primary and High schools, Christian gatherings
                are called various things however we call them SCG's.</p>

              <p>We trust it is imperative to help the youngsters crosswise over schools as well as to support
                and fortify Christian instructors. We help to asset and bolster instructors, hole year groups
                or willful specialists to run these week after week gatherings. Sharing the Christian message
                and qualities by SU pioneers through SCG's keeps on transformatively affecting youngsters, helping
                them create as entire individuals – socially, rationally, profoundly and physically, empowering
                them to observer to their schools and networks. Thousands crosswise over South Africa bear
                declaration to the estimation of SCGs in Primary Schools and High Schools.</p>

              <p>Contact your closest SU local office for more data on the most proficient method to begin a SCG
                in your school.</p>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>

    </div>

    <!--End of row -->
    <div class="row">


      <div class="col-xs-1 col-md-4  pb-3 pr-3 pl-3 before">
        <img src="{{asset('img/lifeskill.png')}}" class="img_yes" alt="camping" width="100%" height="100%">
        <div class="overlay">
          <a href="http://" data-toggle="modal" data-target="#myModal4">
            <img src="{{asset('img/lifeskill_no.png')}}" class="img_no" alt="lifeskill" width="100%" height="100%">
          </a>
        </div>
      </div>


      <!-- The fourth Modal -->
      <div class="modal" id="myModal4">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">LifeSkill</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

              <p>Lifeskills is all about equipping young people with values-based decision-making skills.
                In and out of school, Scripture Union uses a fun, relevant, experiential learning
                program to help young people clarify their values and gives them skills to navigate
                life at this important stage of their development. It is offered as part of the Life
                Orientation subject in school, or out of school at camps or holiday clubs.
                The project began in 1991, when the HIV pandemic was taking root in South Africa,
                as a response to the growing need for young people to learn how to think for
                themselves and avoid peer pressure in all areas of life. They are encouraged
                to choose a set of values (hence behaviour) which would put them at least risk
                of negative consequences such as drug and alcohol abuse,
                gangs and also exposure to HIV. In short, young people learn:</p>
              <ul>
                <li>how to make good decisions</li>
                <li>how to develop a set of personal values</li>
                <li>how to set goals</li>
                <li>how to develop self-esteem</li>
                <li>how to engage with peers and authority figures</li>
                <li>how to think differently to the "crowd"</li>
                <li>how to value and respect life</li>
                <li>how to regard responsibilities (not just rights)</li>
                <li>how to live healthily (nutrition, etc.)</li>
                <li>how to formulate a belief system</li>
                <li>how to rise above personal and family circumstances</li>
                <li>how to interact appropriately with members of the opposite sex, amongst others</li>
              </ul>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>


      <div class="col-xs-1 col-md-4  pb-3 pr-3 pl-3 before">
        <img src="{{asset('img/training.png')}}" class="img_yes" alt="camping" width="100%" height="100%">
        <div class="overlay">
          <a href="http://" data-toggle="modal" data-target="#myModal5">
            <img src="{{asset('img/training_no.png')}}" class="img_no" alt="training" width="100%" height="100%">
          </a>
        </div>
      </div>


      <!-- The firfth Modal -->
      <div class="modal" id="myModal5">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Training</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <p>Training is a key tool that empowers what we do at Scripture Union.
                We are committed to seeing young people grow and realise their full potential
                as Christ followers on mission. This means that we offer a wide variety of training
                programmes and workshops to equip an army of servant leaders that will effectively
                serve the local church and engage the world.<p>

                  <h5>These are the types of training we offer:</h5>
                  <strong>Camp Directors Training</strong>
                  <br>
                  <p>
                    Training to equip participants in the A to Z of directing a camp
                    with SU’s Camping Values and general camping principles</p>

                  <strong>Count Me In<strong>
                      <p>This training serves to train new volunteers, trendsetters, summit team with SU’s Ethos,
                        Working Principles, Ministry Strategies and Personal Development</p>

                      <strong>Sunday School Teachers Training</strong>

                      <strong>Holiday Club Training</strong>

                      <strong>Leadership Training</strong>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>


    </div>
  </section>
  <!--Activities End-->

  <!-- Footer -->
  <div class="mt-5 pt-5 pb-5 footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-xs-12 about-company">
          <h4>Scripture Union Botswana</h4>
          <p class="pr-5 text-white-50">Our mission is to bring God’s love, hope and good news to children, young people
            and their families.</p>

          <h4>Find us here</h4>
          <p class="m-0 p-0">
            <a href="https://www.facebook.com/SUBotswana/" style="color:#e8e8e8"><i
                class="fa fa-facebook-square mr-1"></i>Facebook</a>&nbsp;&nbsp;
            <a href="#" style="color:#e8e8e8"><i class="fa fa-youtube" aria-hidden="true"></i>Youtube</a>
          </p>
        </div>
        <div class="col-lg-3 col-xs-12 links">
          <h4 class="mt-lg-0 mt-sm-3">Links</h4>
          <ul class="m-0 p-0">
            <li><a href="https://su.org.za/" style="color:#e8e8e8">SU South Africa</a></li>
            <li><a href="https://www.suscotland.org.uk/" style="color:#e8e8e8">SU Scotland</a></li>
            <li><a href="https://content.scriptureunion.org.uk/" style="color:#e8e8e8">SU United Kingdom</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-xs-12 location">
          <h4 class="mt-lg-0 mt-sm-4">Contact Us</h4>
          <p>P O Box 444<br>
            Gaborone <br>
            Botswana</p>

          <p class="mb-0"><i class="fa fa-phone mr-3"></i>+267 390 08 98</p>
          <p><i class="fa fa-envelope mr-3"></i>tmdsaint@gmail.com</p>
        </div>
      </div>
      <div class="row mt-5 copyright">
        <div class="col">
          <p class=""><small class="text-white-50">© 2019. All Rights Reserved.</small></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->



</body>

</html>