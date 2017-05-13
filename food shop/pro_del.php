<html><head><title>Products overview</title>
<center><font color='Green' size='6'>
   <?php echo @$_GET['deleted']; ?> 
   <?php echo @$_GET['updated']; ?> 
    </font></center>
     <table align='center' width='1000' border='4'>
	 <tr>
	 <td colspan='20' align='center' bgcolor='Yellow'><h1>Product Details</h1></td>
	 </tr>
	
	   <th>product_Id</th>
		 <th>Product_Type</th>
		  <th>Unit_Price</th>
		    <th>Delete</th>
			  <th>Edit</th>
	 </tr>
	
				 
	<?php 
	   $conn=mysqli_connect("localhost","root","","canteen1");
	   if (mysqli_connect_errno())
         {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
         }
	    $que="select * from product_info";
			$run=mysqli_query($conn,$que);
			$i=1;
	    while($row=mysqli_fetch_assoc($run))
	     {
		  $p_id=$row['product_id'];
		  $p_type=$row['product_type'];
		   $unit_price=$row['price'];
		 
	 ?>
	  <tr align='center'>
		   <td><?php echo  $i++; ?></td>
		   <td><?php echo  $p_type; ?></td>
		   <td><?php echo $unit_price; ?></td>
		   <td><a href='delete.php?del=<?php echo $p_id; ?>'>Delete</a></td>
		 <td><a href='edit2.php?edit=<?php echo $p_id; ?>'>Edit</a></td>
		   
	 </tr>
	   <?php } ?> 
	   
	</table>
</body>
</html>