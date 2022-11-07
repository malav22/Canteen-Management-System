
<table width="100%" align="center" style="color: white;border-radius:20px;margin-top:10px;margin-left:10px;" bgcolor="#6699ff"> 

	
	<tr align="center">
		<td colspan="6"><h2>All Product Categories</h2></td>
	</tr>
	
	<tr align="center" bgcolor="white" style="color: black;">
		<th style="width:15vw;border-radius:10px;">Category ID</th>
		<th style="width:45vw;border-radius:10px;">Category Title</th>
		<th style="width:15vw;border-radius:10px;">Edit</th>
		<th style="width:15vw;border-radius:10px;">Delete</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_cat = "select * from categories";
	
	$run_cat = mysqli_query($con, $get_cat); 
	
	$i = 0;
	
	while ($row_cat=mysqli_fetch_array($run_cat)){
		
		$cat_id = $row_cat['cat_id'];
		$cat_title = $row_cat['cat_title'];
		$i++;
	
	?>
	<tr align="center" style="font-size:20px;">
		<td><?php echo $i;?></td>
		<td><?php echo $cat_title;?></td>
		<td><a style="text-decoration:none;color:white;"href="index.php?edit_cat=<?php echo $cat_id; ?>">&#x270E;</a></td>
		<td><a style="text-decoration:none;color:white;" href="delete_cat.php?delete_cat=<?php echo $cat_id;?>">🗑</a></td>
	
	</tr>
	<?php } ?>




</table>