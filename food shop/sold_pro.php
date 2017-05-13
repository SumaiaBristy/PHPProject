<html><head><title>details</title>
 
     <table align='center' width='1000' border='4'>
	 <tr>
	 <td colspan='20' align='center' bgcolor='Yellow'><h1>view sold products details</h1></td>
	 </tr>
	
	  
		 <th>product_id</th>
		  <th>product_type</th>
		   <th>price</th>
	 </tr>
	
				 
	<?php 
	   $conn=mysqli_connect("localhost","root","","canteen1");
	   if (mysqli_connect_errno())
         {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
         }
	    $que="select * from product_info where exists(select * from order_info where product_info.product_id=order_info.product_id)";
			$run=mysqli_query($conn,$que);
	    while($row=mysqli_fetch_assoc($run))
	     {
		  $p_id=$row['product_id'];
		   $p_s=$row['product_type'];
		    $p_p=$row['price'];
		 
	 ?>
	  <tr align='center'>
		   <td><?php echo  $p_id; ?></td>
		    <td><?php echo  $p_s; ?></td>
			   <td><?php echo  $p_p; ?></td>
	 </tr>
	   <?php } ?> 
	   
	</table>
</body>
</html>