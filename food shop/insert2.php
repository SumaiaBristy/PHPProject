<html>
  <head>
     <title>Insert Information</title>
   </head>
<body>
  <form method='post' action='insert2.php'>
<table width='500' border='3' align='center'>
  <tr>
   <th colspan='6'><font color='Green' size='6'>product_informations</font></th>
  </tr>
  <tr>
	 <td align='right'>Product Type</td>
     <td><input type='text' name='p_type'>
	 </td>
	</tr>
	 <tr>
	 <td align='right'>Price</td>
     <td><input type='text' name='p_prc'>
	 </td>
	  </tr>
	   <tr>
  <td align='center' colspan='6'>
  <input type='submit' name='insert' value='insert'>
 </td>
 </tr>
</table>
</form>
 </body>
</html>
<?php
 $conn=mysqli_connect("localhost","root","","canteen1") or die("could not connect to mysqli");
 if(isset($_POST['insert']))
 {  
	$pro_type=$_POST['p_type'];
	$pro_price=$_POST['p_prc'];
 $que="insert into product_info(product_type,price)values('$pro_type','$pro_price')";
 echo "$que";
if(mysqli_query($conn,$que))
{
   echo "<center><b>the following data has been inserted into database:</b></center>";
    echo "<table align='center' border='4'><tr><td>$pro_type</td><td> $pro_price</td></tr></table>";
}
}
?>