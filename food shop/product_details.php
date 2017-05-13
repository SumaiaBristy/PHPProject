<html><head><title>Products overview</title>
 
     <table align='center' width='1000' border='4'>
	 <tr>
	 <td colspan='20' align='center' bgcolor='Yellow'><h1>Product Details</h1></td>
	 </tr>
	
	   <th>product_Id</th>
		 <th>Product_Type</th>
		  <th>Unit_Price</th>
	 </tr>
	
				 
	<?php 
	   $conn=mysqli_connect("localhost","root","","canteen1");
	   if (mysqli_connect_errno())
         {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
         }
	    $que="select * from product_info";
			$run=mysqli_query($conn,$que);
	    while($row=mysqli_fetch_assoc($run))
	     {
		  $p_id=$row['product_id'];
		  $p_type=$row['product_type'];
		   $unit_price=$row['price'];
		 
	 ?>
	  <tr align='center'>
		   <td><?php echo  $p_id; ?></td>
		   <td><?php echo  $p_type; ?></td>
		   <td><?php echo $unit_price; ?></td>
		   
	 </tr>
	   <?php } ?> 
	   
	</table>
</body>
</html>