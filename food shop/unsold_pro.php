<html><head><title>details</title>
 
     <table align='center' width='1000' border='4'>
	 <tr>
	 <td colspan='20' align='center' bgcolor='Yellow'><h1>view unsold products details</h1></td>
	 </tr>
	
	  
		 <th>product_id</th>
		  <th>product_type</th>
		   <th>price</th>
		    <th>Delete</th>
	 </tr>
	
				 
	<?php 
	   $conn=mysqli_connect("localhost","root","","canteen1");
	   if (mysqli_connect_errno())
         {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
         }
	    $que="select * from product_info b where b.product_id!=all(select distinct product_id from order_info a)";
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
			     <td><a href='delete_unsold.php?del=<?php echo $p_id; ?>'>Delete</a></td>
	 </tr>
	   <?php } ?> 
	   
	</table>
</body>
</html>