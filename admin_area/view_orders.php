<table width="100%" align="center" style="color: white;border-radius:20px;margin-top:10px;margin-left:10px;" bgcolor="#6699ff"> 

	
	<tr align="center">
		<td colspan="6"><h2>View all orders here</h2></td>
	</tr>
	
	<tr align="center" bgcolor="white" style="color: black">
		<th style="border-radius:10px;">S.N</th>
		<th style="border-radius:10px;">Food Item</th>
		<th style="border-radius:10px;">Price</th>
		<th style="border-radius:10px;">PRN</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_order = "SELECT * from orders_admin";
	
	$run_order = mysqli_query($con, $get_order); 
	
	$i = 0;
	
	while ($row_order=mysqli_fetch_assoc($run_order)){
		
		$order_id = $row_order['order_id'];
		$pro_id = $row_order['p_id'];
		$pro_name=$row_order['p_name'];
		$pro_price = $row_order['p_price'];
		$c_prn = $row_order['customer_prn'];
		$i++;
		
		
	
	echo '
	<tr align="center">
		<td>'.$i.'</td>
		<td>'.$pro_name.'</td>
		<td>'.$pro_price.'</td>
		<td>'.$c_prn.'</td>
	
	</tr>';

	 } ?>
</table>