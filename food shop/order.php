<html>
  <head>
     <title>Insert Information</title>
   </head>
<body>
<center><font color='green' size='6'>
  <?php echo @$_GET['logged']; ?> 
</font></center>
  <form method='post' action='order.php'>
<table width='500' border='3' align='center'>
  <tr>
   <th colspan='6'><font color='Green' size='6'>Order products</font></th>
  </tr>
  <tr>
	 <td align='right'>Customer_id</td>
     <td><input type='text' name='cus_id'>
	 </td>
	</tr>
	 <tr>
	 <td align='right'>product_id</td>
     <td><input type='text' name='p_id'>
	 </td>
	  </tr>
	  <tr>
	 <td align='right'>Quantity</td>
     <td><input type='text' name='p_qty'>
	 </td>
	  </tr>
	   <tr>
  <td align='center' colspan='6'>
  <input type='submit' name='order' value='order'>
 </td>
 </tr>
</table>
</form>
 </body>
</html>
<?php
 $conn=mysqli_connect("localhost","root","","canteen1") or die("could not connect to mysqli");
 if(isset($_POST['order']))
 {  
	$c_id=$_POST['cus_id'];
	$pro_id=$_POST['p_id'];
	$pro_qty=$_POST['p_qty'];
	
 $que="insert into order_info(customer_id,product_id,quantity)values('$c_id','$pro_id','$pro_qty')";
 echo "$que";
if(mysqli_query($conn,$que))
{
   echo "<center><b>the following data has been inserted into database:</b></center>";
    echo "<table align='center' border='4'><tr><td>$c_id</td><td> $pro_id</td><td> $pro_qty</td></tr></table>";
}
}
?>