<!DOCTYPE html>
<html>
<head>
	<?php
	session_start();
	include("includes/db.php");
		if(!isset($_SESSION['customer_email'])){
		header("location: customer_login.php");
		}
									$user=$_SESSION['customer_email'];
							$query4="SELECT sum(p_price) FROM orders WHERE customer_prn='$user'";
							$runQuery4=mysqli_query($con,$query4);
								while($row=mysqli_fetch_assoc($runQuery4)){
								$sum=$row['sum(p_price)'];
		}
	?>
	<title>Full Menu</title>
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
      <link href="themes/assets/css/carousel.css" rel="stylesheet">
      <style type="text/css">
       body{
       /* background-image: url("images/bg1.jpg"); */
       background-size: 100%;
	   background-color: white;

    }
	tr{
		padding:10px;
		border-radius: 10px;
	}
	td{
		padding:10px;
	}
	.roww2{
		height:50px;
		box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;	
	}
	.roww2 th{
		padding:10px;

	}
	.roww{
		border-radius: 25px;
	}
    .roww:hover {
		/* background-color: #D6EEEE; */
		box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
	}
	.table1{
		padding:30px;
		width:60vw;
		box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
	}
  </style>
</head>


<body>

<div class="navbar-wrapper">
      <div class="navbar  navbar-static-top " role="navigation">
        <a href="http://www.iitism.ac.in/"><img style="width: 120px; height: 100px;margin-left:10px;" src="images/ism.png" align="left"></a>
        <img src="images/canteen3.png" align="right" width="170px" height="100px" style="padding-right: 10px">
        <header>
          <h1 style="font-size: 50px;
          text-align:center;
  font-weight: 600;
  background-image: linear-gradient(to right, #553c9a, #ee4b2b);
  color: transparent;
  background-clip: text;
  -webkit-background-clip: text;">Menu : <?php echo date('Y-m-d');?></h1>
        </header> <br><br>
        <div class="navbar navbar-inverse nomar" >
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse ">
            <span class="sr-only">Toggle navigation</span>
          </button>
              
          <div class="navbar-collapse collapse nomar">
            <ul class="nav navbar-nav">
              <li ><a href="index.php">Home</a></li>
              <li><a href="about_us.php">About Us</a></li>
              <li><a href=<?php if(isset($_SESSION['customer_email']))echo "'logout.php'"; else echo "'customer_login.php'"?>><?php if(isset($_SESSION['customer_email']))echo "Logout"; else echo "Login"?></a></li>
              <li class="active"><a href="full_menu.php">Menu</a></li>
              <li><a href="admin_area">Admin Dashboard</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>


		<div class="container table1" >
      <table style="margin:auto;">
      	<tr class="roww2">
      		<th style="width:7vw;">No.</th>
      		<th style="width:50vw;">Name</th>
      		<th style="width:15vw;"></th>
      		<th style="width:20vw;text-align:center;">Action</th>
      	</tr>
			<?php

				$i=0;
				$query="SELECT *FROM products";

				$runQuery=mysqli_query($con,$query);


				while($row=mysqli_fetch_assoc($runQuery)){
					$productName=$row['product_title'];
					$price=$row['product_price'];
					$id=$row['product_id'];
					$i++;
					$rupee = "₹";

				echo '

					<tr class="roww">
						<td>'.$i.'</td>
						<td>'.$productName.'</td>
						<td>'.$rupee.''.$price.'</td>
						<td align="center"><a href="full_menu.php?product_id='.$id.'"><button type="button" name="call" class="btn btn-primary">+</button></a></td>
					</tr>



					';


				}




			?>
			</table>
			</div>
			<br><br>
			<?php
				if(isset($_GET['product_id'])){


						$id=$_GET['product_id'];

						$query="SELECT *FROM products WHERE product_id=".$id;
						$runQuery=mysqli_query($con,$query);
						while($row=mysqli_fetch_assoc($runQuery)){
							$productName=$row['product_title'];
							$price=$row['product_price'];

							$query1="INSERT INTO orders (p_id,p_name,p_price,customer_prn) VALUES ('$id','$productName','$price','$user')";
							$runQuery1=mysqli_query($con,$query1);
							
						}
				}

				if(isset($_GET['call'])){
					$query3="SELECT sum(p_price) FROM orders WHERE customer_prn='$user'";
					$runQuery3=mysqli_query($con,$query);
						while($row=mysqli_fetch_assoc($runQuery3)){
							$sum=$row['sum(p_price)'];

							header("location: full_menu.php");
						}



						
				}
							?>
							<center><span><p>Current Cart amount : <?php 
							      
							  
							      if($sum!=0) echo $sum;

			      ?></p>
			  	  </span>
				<form method="POST" action="formpro.php">
					<input type="submit" class="btn btn-success" value="FINALIZE ORDER" name="sub">
					<input type="hidden" name="hid" value= <?php echo $sum;?> >
				</form></center>






</body>
</html>