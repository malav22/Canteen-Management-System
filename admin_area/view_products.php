<?php 
if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {

?>
<table width="100%" align="center" style="color: white;border-radius:20px;margin-top:10px;margin-left:10px;" bgcolor="#6699ff"> 

	
	<tr align="center">
		<td colspan="6"><h2>View All Products Here</h2></td>
	</tr>
	
	<tr align="center" bgcolor="white" style="color: black">
		<th style="border-radius:10px;">S.N</th>
		<th style="border-radius:10px;">Title</th>
		<th style="border-radius:10px;">Price</th>
		<th style="border-radius:10px;">Edit</th>
		<th style="border-radius:10px;">Delete</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_pro = "select * from products";
	
	$run_pro = mysqli_query($con, $get_pro); 
	
	$i = 0;
	
	while ($row_pro=mysqli_fetch_array($run_pro)){
		
		$pro_id = $row_pro['product_id'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $pro_title;?></td>
		<td><?php echo $pro_price;?></td>
		<td><a style="text-decoration:none;color:white;" href="index.php?edit_pro=<?php echo $pro_id; ?>">&#x270E;</td></a>
		<td><a style="text-decoration:none;color:white;" href="delete_pro.php?delete_pro=<?php echo $pro_id;?>">🗑</a></td>
	
	</tr>
	<?php } ?>
</table>

<?php } ?>