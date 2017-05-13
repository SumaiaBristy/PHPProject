<html><head><title>Products overview</title>
<center><font color='Green' size='6'>
   <?php echo @$_GET['deleted']; ?> 
   <?php echo @$_GET['updated']; ?> 
     <?php echo @$_GET['logged']; ?> 
    </font></center>
     <table align='center' width='1000' border='4'>
	 <tr>
	 <td colspan='20' align='center' bgcolor='Yellow'><h1>Product Details</h1></td>
	 </tr>
	
	   <th>customer_Id</th>
		 <th>customer_name</th>
		  <th>customer_email</th>
		    <th>Delete</th>
			  <th>Edit</th>
	 </tr>
	
				 
	<?php 
	   $conn=mysqli_connect("localhost","root","","canteen1");
	   if (mysqli_connect_errno())
         {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
         }
	    $que="select * from customer_info";
			$run=mysqli_query($conn,$que);
			$i=1;
	    while($row=mysqli_fetch_assoc($run))
	     {
		  $p_id=$row['customer_id'];
		  $p_type=$row['customer_name'];
		   $unit_price=$row['email_id'];
		 
	 ?>
	  <tr align='center'>
		   <td><?php echo  $i++; ?></td>
		   <td><?php echo  $p_type; ?></td>
		   <td><?php echo $unit_price; ?></td>
		   <td><a href='delete1.php?del=<?php echo $p_id; ?>'>Delete</a></td>
		 <td><a href='edit1.php?edit=<?php echo $p_id; ?>'>Edit</a></td>
		   
	 </tr>
	   <?php } ?> 
	   
	</table>
</body>
</html>