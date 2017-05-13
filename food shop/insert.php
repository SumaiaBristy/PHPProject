<html>
  <head>
     <title>Insert Information</title>
   </head>
<body>
  <form method='post' action='insert.php'>
<table width='500' border='3' align='center'>
  <tr>
   <th colspan='6'><font color='Green' size='6'>Sign Up</font></th>
   </tr>
   <tr>
     <td align='right'>Customers Name</td>
     <td><input type='text' name='c_name'>
	   <font color='red'><?php echo @$_GET['customer']; ?>
	 <font>
	 </td>
   </tr>
    <tr>
     <td align='right'>Email</td>
     <td><input type='text' name='c_email'>
	   <font color='red'><?php echo @$_GET['eml']; ?>
	 <font>
	 </td>
   </tr>
<tr>
  <td align='center' colspan='6'>
  <input type='submit' name='register' value='register'>
 </td>
</tr>
</table>
</form>
 </body>
</html>
<?php
 $conn=mysqli_connect("localhost","root","","canteen1") or die("could not connect to mysqli");
 if(isset($_POST['register']))
 {  
	$cus_name=$_POST['c_name'];
	$cus_email=$_POST['c_email'];
	$que="insert into customer_info(customer_name,email_id)values('$cus_name','$cus_email')";
if($cus_name=='')
{
echo
"<script>window.open('insert.php?customer=Enter Your Name','_self')</script>";
exit();
}
if($cus_email=='')
{
echo
"<script>window.open('insert.php?eml=Enter Your Email','_self')</script>";
exit();
}
 $run=mysqli_query($conn,$que);
if($run)
{
    echo "<table align='center' border='4'><tr>
    <td> $cus_name</td><td> $cus_email</td></tr></table>";
}
}
?>