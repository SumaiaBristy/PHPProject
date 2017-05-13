<html><head><title>Products overview</title>
     <table align='center' width='1000' border='4'>
	 <tr>
	 <td colspan='20' align='center' bgcolor='Yellow'><h1>Unique Priced Product</h1></td>
	 </tr>
	     <th>product Id</th>
	   <th>product Type</th>
	    <th>Unit price</th>
		
	 </tr>
				 
	<?php 
	   $conn=mysqli_connect("localhost","root","","canteen1");
	   if (mysqli_connect_errno())
         {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
         }
	    $que="select * from product_info where product_type!=All(select b.product_type as product_type from product_info a,product_info b where a.price=b.price and a.product_type<>b.product_type);";
			$run=mysqli_query($conn,$que);
	    while($row=mysqli_fetch_assoc($run))
	     {
		  $p_id=$row['product_id'];
		  $p_type=$row['product_type'];
		  $p_price=$row['price'];
		 
	 ?>
	  <tr align='center'>
		   <td><?php echo  $p_id; ?></td>
		    <td><?php echo  $p_type; ?></td>
			 <td><?php echo  $p_price; ?></td>
	   </tr>
	   <?php } ?> 
	   
	</table>
</body>
</html>