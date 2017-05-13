<html><head><title>Products Sold</title>
 
     <table align='center' width='1000' border='4'>
	 <tr>
	 <td colspan='20' align='center' bgcolor='Yellow'><h1>view sold products quantity</h1></td>
	 </tr>
	
	  
		 <th>product_id</th>
		  <th>sold product_quantity</th>
	 </tr>
	
				 
	<?php 
	   $conn=mysqli_connect("localhost","root","","canteen1");
	   if (mysqli_connect_errno())
         {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
         }
	    $que="select product_id,sum(quantity) as sum from order_info group by product_id;";
			$run=mysqli_query($conn,$que);
	    while($row=mysqli_fetch_assoc($run))
	     {
		  $p_id=$row['product_id'];
		   $p_s=$row['sum'];
		 
	 ?>
	  <tr align='center'>
		   <td><?php echo  $p_id; ?></td>
		    <td><?php echo  $p_s; ?></td>
	 </tr>
	   <?php } ?> 
	   
	</table>
</body>
</html>