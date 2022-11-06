<!DOCTYPE html>
<html lang="en">
  <head>
<?php
include("includes/db.php");
session_start();
if(!isset($_SESSION['customer_email'])){
header("location: customer_login.php");
}

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
        
        
  <!-- <div id="myCarousel" class="carousel slide" data-ride="carousel"  style="height:90vh;">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <div class="carousel-inner">
      <div class="item active">
        <img src="images/img4.jpg" alt="college" style="width:100%;height: 100vh">
      </div>

      <div class="item">
        <img src="images/maincan.jpg" alt="canteen" style="width:100%; height: 100vh">
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev" >
      <span class="glyphicon glyphicon-chevron-left" ></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only" >Next</span>
    </a>
  </div> -->
  <div class="two alt-two">
  <h1>Main Canteen
    <span>IIT(ISM) Dhanbad</span>
  </h1>
</div>
  <div class="parallax"></div>

      <div class="navbar navbar-inverse navbar-static-top " role="navigation" style="height:20vh;background-color:#fff;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;padding:15px;border-radius:20px;">
        <a style="text-decoration:none;" href="full_menu.php"><h3 style="font-size: 50px;
          text-align:center;
  font-weight: 600;
  background-image: linear-gradient(to right, #553c9a, #ee4b2b);
  color: transparent;
  background-clip: text;
  -webkit-background-clip: text;">Specials</h3></a>
        </div>
        <div class="row" style="height:80vh;width:80vw;">
          <div class="col-lg-4" align="center">
            <img class="img-circle" src="images/masaladosa.png" width="300px" height="300px">
            <br><br><h2>MASALA DOSA
            <p><a class="btn btn-primary" href="full_menu.php" role="button"> &#8377; 30 ADD TO CART &raquo;</a></p></h2>
          </div><!-- /.col-lg-4 --> 
          <div class="col-lg-4" align="center">
            <img class="img-circle" src="images/sandwich.png"  width="300px" height="300px">
            <br><br><br><br><br><br><h2>SANDWICH</h2>
            <p><a class="btn btn-primary" href="full_menu.php" role="button"> &#8377;30 ADD TO CART &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" align="center">
            <img class="img-circle" src="images/oreo_3.png" width="300px" height="300px">
            <h2>MILKSHAKES</h2>
            <p><a class="btn btn-primary" href="full_menu.php" role="button"> &#8377;30 ADD TO CART &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
  
  
  
  
  
  
  
  
<!--Breakfast Carousel-->
  <div class="navbar navbar-inverse navbar-static-top " role="navigation">
    <a href="full_menu.php"><h2 class="itemsTitle" style=" color: white" align="center">BREAKFAST</h2></a>
  </div>
      <div id="myCarousel1" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
        <div class="item active">
          <div class="row">
            <div class="col-lg-4" align="center">
              <img src="images/idli.png" alt="freshs items" width="500" height="350">
              <h4>IDLI</h4>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" align="center">
              <img src="images/poha.png" alt="Generic placeholder image" width="500" height="350">
              <br><br><h4>POHA</h4>
                          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" align="center">
              <img src="images/dosa.png" alt="Generic placeholder image" width="500" height="350">
              <h4>DOSA</h4>
                          </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div>
        <div class="item">
          <div class="row">
            <div class="col-lg-4" align="center">
              <img src="images/vada_pav.png" alt="Generic placeholder image" width="500" height="350">
              <h4>VADA PAV</h4>
                          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" align="center">
              <img src="images/upma.png" alt="Generic placeholder image" width="500" height="350">
              <h4>UPMA</h4>
             
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" align="center">
              <img src="images/medu_vada.png" alt="Generic placeholder image" width="500" height="350">
              <h4>MEDU VADA</h4>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div>
      </div>
      <!-- RIGHT LEFT CONTROLS-->
      <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel1" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>


      <p align="center"><a class="btn btn-success btn-lg"  href="full_menu.php" role="button">&nbsp;&nbsp;&nbsp; View FULL MENU &nbsp;&nbsp;&nbsp;</a></p>
<!--Lunch Carousel-->
  <div class="navbar navbar-inverse navbar-static-top " role="navigation">
    <a href="full_menu.php"><h2 class="itemsTitle" style="color: white" align="center">LUNCH</h2></a>
  </div>
      <div id="myCarousel2" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
        <div class="item active" align="center">
          <div class="row">
            <div class="col-lg-4">
              <img src="images/rice.png" alt="Generic placeholder image"  width="500" height="350">
              <h4>FRIED RICE</h4>
                          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="images/thali.png" alt="Generic placeholder image"  width="500" height="350">
              <h4>THALI</h4>
                          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="images/noodle.png" width="500" height="350">
              <h4>NOODLES</h4>
             
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div>
        <div class="item" align="center">
          <div class="row">
            <div class="col-lg-4">
              <img src="images/lassi.png" alt="Generic placeholder image"  width="500" height="350">
              <h4>LASSI</h4>
             
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="images/pav.png" alt="Generic placeholder image"  width="500" height="350">
              <h4>MISAL PAV</h4>
                          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="images/pav_bhaji.png" alt="Generic placeholder image" width="500" height="350">
              <h4>PAV BHAJI</h4>
             
            </div><!-- /.col-lg-4 -->
          </div>
        </div>
      </div>
        <!-- RIGHT LEFT CONTROLS-->
          <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel2" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>


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
