<html><head><title>Products overview</title>
 
     <table align='center' width='1000' border='4'>
	 <tr>
	 <td colspan='20' align='center' bgcolor='Yellow'><h1>Bought Product's Id</h1></td>
	 </tr>
	
	  
		 <th>Customer_id</th>
		  <th>Product_id</th>
	 </tr>
	
				 
	<?php 
	   $conn=mysqli_connect("localhost","root","","canteen1");
	   if (mysqli_connect_errno())
         {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
         }
	    $que="select customer_id,group_concat(product_id separator ',') product_id from order_info group by customer_id";
			$run=mysqli_query($conn,$que);
	    while($row=mysqli_fetch_assoc($run))
	     {
		  $p_c=$row['customer_id'];
		  $p_t=$row['product_id'];
		 
	 ?>
	  <tr align='center'>
		   <td><?php echo  $p_c; ?></td>
		   <td><?php echo  $p_t; ?></td>
	 </tr>
	   <?php } ?> 
	   
	</table>
</body>
</html>