<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Batariw</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"></i> Batariw</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">About Me</a></li>
        <li><a href="#education" class="page-scroll">Education</a></li>
        <li><a href="#experience" class="page-scroll">Experience</a></li>
        <li><a href="#interest" class="page-scroll">Interest</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
        <!-- <li><a href="{{route('login')}}" class="page-scroll">Login</a></!--> 
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>Batari Wahyu Pangesti</h1>
            <p>A Million Feelings</p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll">Kenalan yuk!</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>About Me</h2>
      <hr>
    </div>
    <div class="row">
     @if($about) 
      <div class="col-xs-12 col-md-6"> <img src="{{ url('/') }}/aboutimage/{{$about->image}}" class="img-responsive thumbnail" alt="foto batari"> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h3>{{$about->title}}</h3>
          <p>
            {{$about->description}}
          </p>
          <!-- <p>Now I am Student of Gunadarma University, 
            I have taken 7 semesters for the moment, 
            and I really wanted to finish my studies as soon as possible. 
            I majored in Informatics Engineering Faculty of Industry.
          </p>
          <p>I have many hobbies, like watching movie, reading a book,
            and one of them is complete a Kraepelin Test. I don't know why i like that. 
          </p> -->
        </div>
      </div>
    @endif 
    </div>
  </div>
</div>

<!-- Education Section -->
<div id="education" class="text-center">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 section-title">
      <h2>Education</h2>
      <hr>
      <p>This Is My Educational Background</p>
    </div>
    <div class="row">
    @foreach($education as $v)  
      <div class="col-xs-6 col-md-3"> <i class="fa fa-graduation-cap"></i>
        <h4>{{$v->name}}</h4>
        <h6>{{$v->year}}</h6>
        <p>{{$v->description}}</p>
      </div>
    @endforeach  
    </div>
  </div>
</div>

<!--Experience Section-->
  <div id="experience" class="text-center">
    <div class="container">

      <div class="col-md-10 col-md-offset-1 section-title">
        <h2>Experience</h2>
        <hr>
        <p>This Is My Experience</p>
      </div>

      <div class="row">

      @foreach($act as $v)
        <div class="col-md-6">
          <p align="justify">{{$v->year}}</p>
          <h3 align="justify">{{$v->description}}</h3>
        </div>
      @endforeach  

       
      </div>
      </div>
 </div>

 <!-- Interest Section -->
<div style="margin-top:50px;" id="interest" class="text-center">
    <div class="container">
      <div class="col-md-10 col-md-offset-1 section-title">
        <h2>Interest</h2>
        <hr>
        <p></p>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="col-md-4"><i class="fa fa-desktop"></i>
              <h3 align="center">Machine Learning</h3>
              <p align="center">Learning about deep learning, data science.</p><br><br>
            </div>

            <div class="col-md-4"><i class="fa fa-film"></i>
              <h3 align="center">Watching Movies</h3>
              <p align="center">Cartoon, Science-Fiction, Drama</p>
            </div>

            <div class="col-md-4"><i class="fa fa-book"></i>
              <h3 align="center">Reading</h3>
              <p align="center">Mental health, Novel, Motivation</p>
            </div>
        </div>

            <div class="col-md-4"><i class="fa fa-music"></i>
                <h3 align="center">Listening Music</h3>
                <p align="center">Jazz, Pop</p>
            </div>

            <div class="col-md-4"><i class="fa fa-gamepad"></i>
                <h3 align="center">Playing Game</h3>
                <p align="center">Sims City, Hayday, Clash of Clans</p>
            </div>
            
            <div class="col-md-4"><i class="fa fa-pencil"></i>
              <h3 align="center">Writting</h3>
              <p align="center">Short Story</p>
          </div>
          </div>
    </div>
      </div>
      </div>
    </div><br><br><br><br><br>


<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Contact Me</h2>
      <hr>
      <p>Please, contact me if you have a question. Thankyou :)</p>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <form id="contactForm" method="post" action="{{ route('batari.store') }}">
        @csrf
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" name="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        
        <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
      </form>
      <div class="social">
        <ul>
          <li><a href="https://www.facebook.com/batariw"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/batariw"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://www.instagram.com/batariw"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="fnav">
      <p>Copyright &copy; 2019 batariw</p>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>