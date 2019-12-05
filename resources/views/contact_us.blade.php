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
      <a class="navbar-brand"  href="{{url('home')}}">
        <img id="su" src="{{ asset('img/su.png') }}" alt="Scripture Union Botswana Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{url('home')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('events')}}">Holidays & Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('who')}}">Who We Are</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('activities')}}">What We Do</a>
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

  <div class="container-fluid" style="background-image: url('img/contact.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 35%;">
    <br>
    <h1 style="color:#ff7a04;">CONTACT US</h1>
    <hr>
  </div>
  <h5 style="text-align:center">Looking for your kids to have a great holiday and find out more about<br>
    faith? Our camps have everything you need!</h5>
  <br>

  <section>
    <div class="container">
      <h6>Complete the form below and we will get back to you.</h6>
      <br>
      <form action="{{url('contact/send')}}" method="post">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">Name:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
            </div>
          </div>

          <div class="form-group col-md-6">
            <label for="surname">Surname:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="surname" id="" aria-describedby="helpId" placeholder="">
            </div>
          </div>
        </div>


        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="email">Email:</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="">
            </div>
          </div>

          <div class="form-group col-md-6">
            <label for="contact">Contact:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="contact" id="" aria-describedby="helpId" placeholder="">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="">Message:</label>
          <div class="col-sm-8">
            <textarea class="form-control" name="message" id="" rows="3"></textarea>
          </div>
        </div>z

        <button type="submit" class="btn btn-primary">Send</button>

      </form>
    </div>
  </section>

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