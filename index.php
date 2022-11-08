<!DOCTYPE html>
<html lang="en">
  <head>
<?php
include("includes/db.php");
session_start();
if(!isset($_SESSION['customer_email'])){
header("location: customer_login.php");
}
@include 'https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic';

?>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="themes/assets/ico/favicon.ico">
        <link rel="stylesheet" href="css/style.css">
        <link href="themes/assets/css/carousel.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="themes/dist/js/bootstrap.min.js"></script>
        <script src="themes/assets/js/holder.js"></script>

        <style type="text/css">
         .parallax {
  /* The image used */
  background-image: url("images/img4.jpg");

  /* Set a specific height */
  min-height: 100vh; 
  filter: brightness(50%);
  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

h1 {
  position: relative;
  padding: 0;
  margin: 0;
  font-family: "Raleway", sans-serif;
  font-weight: 300;
  font-size: 60px;
  color: #080808;
  -webkit-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
  color: #fff;

  font-size: 70px;
  font-weight: 600;
  background-image: repeating-radial-gradient(circle closest-corner at 100px 100px, #6495ED, #1F51FF 10%, #4169E1 20%);
  color: transparent;
  background-clip: text;
  -webkit-background-clip: text;
}

h1 span {
  display: block;
  font-size: 1.5em;
  line-height: 1.3;

}
h1 em {
  font-style: normal;
  font-weight: 600;
}
.two h1 {
  text-transform: capitalize;
}
.two h1:before {
  position: absolute;
  left: 0;
  bottom: 0;
  width: 40px;
  height: 2px;
  content: "";
  background-color: #c50000;
}

.two h1 span {
  font-size: 20px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 4px;
  line-height: 3em;
  /* padding-left: 0.25em; */
  color: rgba(256, 256, 256, 0.7);
  padding-bottom: 10px;
}
.alt-two h1 {
  text-align:center;
}
.alt-two h1:before {
  left:50%; margin-left:-30px;
}
.alt-two{
  position:absolute;
    top: 60%;
    left: 50%;
    z-index: 100;
    /* width:30em; */
    height:18em;
    margin-top: -9em; /*set to a negative number 1/2 of your height*/
    margin-left: -15em; /*set to a negative number 1/2 of your width*/
    /* border: 1px solid #ccc; */
    /* color:#fff; */
    /* background-color: #f3f3f3; */
}


body {
	font-family: 'Open Sans Condensed', sans-serif;
}


figure {
	position:relative;
	width:100%;
	min-height:160px;
	display:block;
	float:left;
	overflow:hidden;
	margin:10px 0;
	box-shadow:inset 0px 2px 3px rgba(0,0,0,.2);
	-webkit-transition: all .15s ease-in-out;
}
.ocean {
	background-color:#fff;
	/* background-image: url("https://i.imgur.com/KIW5eEx.jpg"); */
	/* background-size:cover; */
	background-position:center center;
  height:50vh;
  width:30vw;
}
figcaption {
	display:block;
	float:left;
	position:absolute;
	top:0;
	left:0;
	color:#FFF;
	font-size:15px;
	line-height:20px;
	font-weight:bold;
	text-transform:uppercase;
	background-color:rgba(0,0,0,.7);
	width:50%;
	height:100%;
	margin:0 0 0 -20px;;
	padding:20px;
	padding-left:40px;
	-webkit-transform: skew(-10deg);
       -moz-transform: skew(-10deg);
         -o-transform: skew(-10deg);
	-webkit-transition: all .15s ease-in-out;
}
figcaption a, figcaption a:hover {
	color:#FFF;
	text-decoration:none;
}
figcaption strong {
	display:block;
	word-wrap: normal;
	-webkit-transform: skew(10deg);
       -moz-transform: skew(10deg);
         -o-transform: skew(10deg);
}
figcaption strong:before {
	content:" ";
	border-top:solid 3px rgba(211,29,26,1);
	width:140%;
	display:block;
	clear:both;
	margin-bottom:20px;
	-webkit-transition: all .15s ease-in-out;
}

/* HOVERS */
figure:hover figcaption {
	background-color:rgba(211,29,26,.9);
	-webkit-transition: all .15s ease-in-out;
}
figure:hover figcaption strong:before {
	width:200%;
	border-color:#FFF;
	-webkit-transition: all .15s ease-in-out;
}


* {box-sizing: border-box;}
.mySlides {display: none;height:60vh;}
img {vertical-align: middle;height:60vh;}

/* Slideshow container */
.slideshow-container {
  width:40%;
  max-width: 800px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #000;
  font-size: 25px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.8s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 3s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.img-slider {
    position: relative;
    width: 100vw;
    height: 400px;
}
.img-slider .slider-container {
    position: absolute;
    width: 300%;
    top: 0;
    left: 0;
    overflow: hidden;
    animation: slider 20s infinite;
}
.img-slider .slider-container .slide {
    position: relative;
    width: 33.33333333%;
    height: 100%;
    float: left;
    overflow: hidden
}
.img-slider .slider-container .slide img {
  display: block;
  width: 100%;
  height: 100%;
  border-radius: 20px;
}
@keyframes slider {
    0%, 25%, 100%{left: 0}
    
    30%, 55%{left: -100%}
    
    60%, 85%{left: -200%}
}
.img-slider2 {
    position: relative;
    width: 100vw;
    height: 400px;
}
.img-slider2 .slider-container2 {
    position: absolute;
    width: 300%;
    top: 0;
    left: 0;
    overflow: hidden;
    animation: slider 15s infinite;
}
.img-slider2 .slider-container2 .slide2 {
    position: relative;
    width: 33.33333333%;
    height: 100%;
    float: left;
    overflow: hidden
}
.img-slider2 .slider-container2 .slide2 img {
  display: block;
  width: 100%;
  height: 100%;
  border-radius: 20px;

}
@keyframes slider2 {
    0%, 25%, 100%{left: 0}
    
    30%, 55%{left: -100%}
    
    60%, 85%{left: -200%}
}
        </style>
  </head>

<body>


  
    <div class="navbar-wrapper">
      <div class="navbar  navbar-fixed-top " role="navigation">
        
        <div class="navbar navbar-inverse nomar" >
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse ">
            <span class="sr-only">Toggle navigation</span>
          </button>
              
          <div class="navbar-collapse collapse nomar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="about_us.php">About Us</a></li>
              <li><a href=<?php if(isset($_SESSION['customer_email']))echo "'logout.php'"; else echo "'customer_login.php'"?>><?php if(isset($_SESSION['customer_email']))echo "Logout"; else echo "Login"?></a></li>
              <li><a href="full_menu.php">Menu</a></li>
              <li><a href="admin_area">Admin Dashboard</a></li>
            </ul>
          </div>
        </div>
      </div>
</div>
      
  <div class="two alt-two">
  <h1>Main Canteen
    <span>IIT(ISM) Dhanbad</span>
  </h1>
</div>
  <div class="parallax"></div>
  <div style="min-height:100vh;">
    <div class="navbar navbar-inverse navbar-static-top " role="navigation" style="height:20vh;background-color:#fff;">
      <a style="text-decoration:none;" href="full_menu.php"><h3 style="font-size: 50px;
          text-align:center;
  font-weight: 600;
  background-image: linear-gradient(to right, #553c9a, #ee4b2b);
  color: transparent;
  background-clip: text;
  -webkit-background-clip: text;">Today's Special</h3></a>
        </div>
        
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <figure class="ocean" style="background-image: url('images/masaladosa.png');background-size:cover;">
                <figcaption>
                  <a href="full_menu.php">
                    <strong>Masala Dosa</strong>
                  </a>	
                </figcaption>
              </figure>
		</div>
		<div class="col-md-4 col-sm-6">
      <figure class="ocean" style="background-image: url('images/sandwich.png');background-size:cover;">
				<figcaption>
          <a href="full_menu.php">
            <strong>Sandwich</strong>
					</a>	
				</figcaption>
			</figure>
		</div>
    <div class="col-md-4 col-sm-6">
      <figure class="ocean" style="background-image: url('images/oreo_3.png');background-size:cover;">
				<figcaption>
          <a href="full_menu.php">
					<strong>Oreo Shake</strong>
        </a>	
      </figcaption>
    </figure>
  </div>
  <div class="col-md-4 col-sm-6">
      <figure class="ocean" style="background-image: url('images/brownie.jpg');background-size:cover;">
				<figcaption>
          <a href="full_menu.php">
					<strong>Brownie with Icecream</strong>
        </a>	
      </figcaption>
    </figure>
  </div>
</div>
</div>
</div>
  

  <hr style="height:2px;width: 75vw;color:black;background-color:#080808;margin:auto;">
  
  <div style="min-height:100vh">
  <div class="navbar navbar-inverse navbar-static-top " role="navigation" style="height:20vh;background-color:#fff;">
      <a style="text-decoration:none;" href="full_menu.php"><h3 style="font-size: 50px;
          text-align:center;
  font-weight: 600;
  background-image: linear-gradient(to right, #553c9a, #ee4b2b);
  color: transparent;
  background-clip: text;
  -webkit-background-clip: text;">Breakfast</h3></a>
        </div>
<!--Breakfast Carousel-->

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 6</div>
  <img src="images/idli.png" style="width:100%;">
  <div class="text">Idli</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 6</div>
  <img src="images/poha.png" style="width:100%">
  <div class="text">Poha</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 6</div>
  <img src="images/dosa.png" style="width:100%">
  <div class="text">Dosa</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
  <img src="images/vada_pav1.png" style="width:100%">
  <div class="text">Vadapav</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 6</div>
  <img src="images/upma.png" style="width:100%">
  <div class="text">Upma</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
  <img src="images/medu_vada.png" style="width:100%">
  <div class="text">Medu Vada</div>
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 


</div>

<script>
let slideIndex = 0;
showSlides();
function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>


  </div>
  <p align="center"><a class="btn btn-success btn-lg"  href="full_menu.php" role="button">&nbsp;&nbsp;&nbsp; View FULL MENU &nbsp;&nbsp;&nbsp;</a></p>


  <hr style="height:2px;width: 75vw;color:black;background-color:#080808;margin:auto;">
  
  <div style="min-height:100vh">
  <div class="navbar navbar-inverse navbar-static-top " role="navigation" style="height:20vh;background-color:#fff;">
      <a style="text-decoration:none;" href="full_menu.php"><h3 style="font-size: 50px;
          text-align:center;
  font-weight: 600;
  background-image: linear-gradient(to right, #553c9a, #ee4b2b);
  color: transparent;
  background-clip: text;
  -webkit-background-clip: text;">Lunch</h3></a>
        </div>

<!--Lunch Carousel-->


<br>

<Section class="img-slider" style="height:50vh;margin:auto;">
  <div class="slider-container">
    
    <div class="slide">
      <img src="images/thali.png" style="width:50vw;height:50vh;margin:auto;">
    </div>
    
    <div class="slide">
      <img src="images/pav.png" style="width:50vw;height:50vh;margin:auto;">
    </div>

    <div class="slide">
      <img src="images/lassi.png" style="width:50vw;height:50vh;margin:auto;">
    </div>
    
    <!-- <div class="slide">
      <img src="images/pav_bhaji.png">
    </div>
    <div class="slide">
      <img src="images/noodle.png">
    </div>
    <div class="slide">
      <img src="images/burger.png">
    </div> -->

  </div>
</Section>
<br>
<!-- <hr style="height:2px;width: 75vw;color:black;background-color:#080808;margin:auto;"> -->
<br>
<Section class="img-slider2" style="height:50vh;margin:auto;">
  <div class="slider-container2">
    
    <!-- <div class="slide">
      <img src="images/thali.png" style="width:50vw;height:50vh;margin:auto;">
    </div>
    
    <div class="slide">
      <img src="images/pav.png" style="width:50vw;height:50vh;margin:auto;">
    </div>

    <div class="slide">
      <img src="images/lassi.png" style="width:50vw;height:50vh;margin:auto;">
    </div> -->
    
    <div class="slide2">
      <img src="images/pav_bhaji.png"style="width:50vw;height:50vh;margin:auto;">
    </div>
    <div class="slide2">
      <img src="images/noodle.png"style="width:50vw;height:50vh;margin:auto;">
    </div>
    <div class="slide2">
      <img src="images/burger.png"style="width:50vw;height:50vh;margin:auto;">
    </div>

  </div>
</Section>
<br>

</div>






      <!-- FOOTER -->
      <!-- <footer> -->
    <div class="container" style="background-color: #aaa;text-align:center;width:100%;padding:10px">
        <p><a href="" style="text-decoration:none;">Back to top</a></p>
        <p>Copyright &copy; IIT(ISM) Dhanbad</p>
    </div>
      <!-- </footer> -->

    
       

       
  </body>
</html>
