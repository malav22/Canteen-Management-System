<!DOCTYPE>

<?php 

include("includes/db.php");

?>
<html>
	<head>
		<title>Add Product</title> 
		
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
	</head>
	
<body >


	<form action="insert_product.php" method="post" enctype="multipart/form-data"> 
		
		<table align="center" width="795" border="2" style="color:white">
			
			<tr align="center">
				<td colspan="7"><h2>Add New Product</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Name:</b></td>
				<td><input type="text" name="product_title" size="60" required/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Category:</b></td>
				<td>
				<select name="product_cat" >
					<option>Select a Category</option>
					<?php 
						$get_cats = "select * from categories";
					
						$run_cats = mysqli_query($con, $get_cats);
					
						while ($row_cats=mysqli_fetch_array($run_cats)){
					
						$cat_id = $row_cats['cat_id']; 
						$cat_title = $row_cats['cat_title'];
					
						echo "<option value='$cat_id'>$cat_title</option>";
	
	
	}
					
					?>
				</select>
				
				
				</td>
			</tr>
			
			
				</select>
				
				
				</td>
			</tr>
			
			
			
			<tr>
				<td align="right"><b>Product Price:</b></td>
				<td><input type="text" name="product_price" required/></td>
			</tr>
			
			
			
			
			
			<tr align="center">
				<td colspan="7"><input type="submit" name="insert_post" value="Add New Product"/></td>
			</tr>
		
		</table>
	
	
	</form>


</body> 
</html>
<?php 

	if(isset($_POST['insert_post'])){
	
		//getting the text data from the fields
		$product_title = $_POST['product_title'];
		$product_cat= $_POST['product_cat'];
		$product_price = $_POST['product_price'];
	
		
	
		 $insert_product = "insert into products (product_cat,product_title,product_price,product_desc,product_keywords) values ('$product_cat','$product_title','$product_price','','')";
		 
		 $insert_pro = mysqli_query($con, $insert_product);
		 
		 if($insert_pro){
		 
			echo ("<script LANGUAGE='JavaScript'>
			window.alert('Product added successfully');
			window.location.href='index.php?view_products';
			</script>");
		 
		 }
	}








?>



