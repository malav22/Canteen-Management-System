<?php 

include("includes/db.php");
// if(!isset($_GET['add_amount'])){
	
// 	header("location: index.php?add_amount");

// }
?>
	<head>
		<title>Add amount</title> 
		
		
	</head>

<body >


	<form action="add_amount.php" method="post" enctype="multipart/form-data"> 
		
		<table align="center" width="795" border="2" style="color:white">
			
			<tr align="center">
				<td colspan="7"><h2>Add Amount </h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Choose Customer:</b></td>
				<td>
				<select name="c_prn" >
					<option>Customer Username</option>
					<?php 
		$get_cats = "SELECT * from customers";
	
		$run_cats = mysqli_query($con, $get_cats);
	
		while ($row_cats=mysqli_fetch_assoc($run_cats)){
	
		$cust_prn = $row_cats['customer_prn']; 
		$cust_id= $row_cats['customer_id'];
	
		echo "<option value='$cust_prn'>$cust_prn</option>";
	
	
	}
					
					?>
				</select>
				
				
				</td>
			</tr>
			
			
				</select>
			
			
			
			<tr>
				<td align="right"><b>Amount:</b></td>
				<td><input type="text" name="amount" required/></td>
			</tr>
			
			
			
			
			
			<tr align="center">
				<td colspan="7"><input type="submit" name="add" value="Add Amount"/></td>
			</tr>
		
		</table>
	
	
	</form>


</body> 
<?php 

	if(isset($_POST['add'])){
	
		//getting the text data from the fields
		$c_prn = $_POST['c_prn'];
		$amt= $_POST['amount'];
		if(!is_numeric($amt)){
			echo "<script>alert('Enter a numerical amount')</script>";
		 echo "<script>window.open('index.php?add_amount')</script>";
		}
	
		
	
		 $insert_amount = "UPDATE customers SET amount=amount+'$amt' where customer_prn='$c_prn' ";
		 
		 $insert_pro = mysqli_query($con, $insert_amount);
		 
		 if($insert_pro){
		 
			echo ("<script LANGUAGE='JavaScript'>
			window.alert('Succesfully Updated');
			window.location.href='index.php?add_amount';
			</script>");
		//  echo"<script>close();</script>";
		 
		 }
	}








?>



