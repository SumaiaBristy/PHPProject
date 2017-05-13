<html><head><title>Bill Details</title>
 
     <table align='center' width='1000' border='4'>
	 <tr>
	 <td colspan='20' align='center' bgcolor='Yellow'><h1>Bill Info</h1></td>
	 </tr>
	
	   <th>Customer_id</th>
		    <th>Bill</th>
	 </tr>
	
				 
	<?php 
	   $conn=mysqli_connect("localhost","root","","canteen1");
	   if (mysqli_connect_errno())
         {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
         }
	    $que="select b.customer_id,sum(c.price) as bill from customer_info b left join (select a.customer_id,a.quantity*b.price as price from order_info a,product_info b where a.product_id=b.product_id)c on b.customer_id=c.customer_id group by customer_id";
	    $run=mysqli_query($conn,$que);
		while($row=mysqli_fetch_assoc($run))
	     {
		  $o_id=$row['customer_id'];
			 $p_bill=$row['bill'];
		 
	 ?>
	  <tr align='center'>
		   <td><?php echo $o_id; ?></td>
		   <td><?php echo $p_bill; ?></td>
		   
	 </tr>
	   <?php } ?> 
	   
	</table>
</body>
</html>