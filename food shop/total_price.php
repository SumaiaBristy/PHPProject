<html><head><title>Products overview</title>
 
     <table align='center' width='1000' border='4'>
	 <tr>
	 <td colspan='20' align='center' bgcolor='Yellow'><h1>view total price of products in the store</h1></td>
	 </tr>
	
	  
		 <th>total_price</th>
	 </tr>
	
				 
	<?php 
	   $conn=mysqli_connect("localhost","root","","canteen1");
	   if (mysqli_connect_errno())
         {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
         }
	    $que="select sum(price) as total_price from product_info";
			$run=mysqli_query($conn,$que);
	    while($row=mysqli_fetch_assoc($run))
	     {
		  $p_type=$row['total_price'];
		 
	 ?>
	  <tr align='center'>
		   <td><?php echo  $p_type; ?></td>
	 </tr>
	   <?php } ?> 
	   
	</table>
</body>
</html>