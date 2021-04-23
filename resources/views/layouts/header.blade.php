<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Alim</title>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	








  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<!-------------Navbar--------------->
<header >
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background: linear-gradient(to right,#16222A,#002c5b);">
  <div class="container">
    <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('images/alim-logo.png')}}"> Alim</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link" href="{{ route('index')}}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Quran Courses
          </a>
          <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ route('learn quran for kids')}}">Learn Quran For Kids</a>
            <a class="dropdown-item" href="{{ route('tajweed course')}}">Tajweed Course</a>
            <a class="dropdown-item" href="{{ route('quran translation')}}">Quran Translation</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('fee and pricing')}}">Fee and pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('enrollment')}}">Enrollment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact')}}">Contact us</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link" href="{{ route('login')}}">Login</a>
        </li>
        <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link" href="{{ route('register')}}">Register</a>
        </li>
    </div>
  </div>
</nav>
</header>

@yield('content')
<!----------------footer-------------->
<footer class="mainfooter" role="contentinfo">
  <div class="footer-middle">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Useful Links</h4>
          <ul class="list-unstyled">
            <li><a href="#">Female Quran Teacher</a></li>
            <li><a href="#">Learn Quran for Kids</a></li>
            <li><a href="#">Free Downloads Testimonials</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
      </div>
      
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>INFORMATION</h4>
          <ul class="list-unstyled">
            <li><a href="#">Tajweed</a></li>
            <li><a href="#">Arabic</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Coronavirus</a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Get In Touch</h4>
          <ul class="list-unstyled">
            <li><a href="#"><i class="fa fa-phone">+44 2079 935913</i></a></li>
            <li><a href="#"><i class="fa fa-whatsapp">+44 2079 935913</i></a></li>
            <li><a href="#"><i class="fa fa-envelope">contactalimlive@gmail.com</i></a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-3">
        <h4>SOCIAL LINKS</h4>
            <ul class="social-network social-circle">
             <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
             <li><a href="#" class="icoskype" title="Skype"><i class="fa fa-skype"></i></a></li>
             <li><a href="#" class="icowhatsapp" title="Whatsapp"><i class="fa fa-whatsapp"></i></a></li>
             <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>       
            </div>
            </div>
          <div class="row">
            <div class="col-md-12 copy">
              <p class="text-center">&copy;Copyright © 2021 Alim Live - Online Quran Learning Academy All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
</footer>