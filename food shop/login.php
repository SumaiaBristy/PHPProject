<?php
 session_start();
?>


<html>
   <head>
     <title>User Log in</title>
	 </head>
<body>	
<form action='login.php' method='post'>
<center><?php echo @$_GET['error']; ?>
<table width='400' border='2' align='center' bgcolor='orange'>
<tr>
<td align='center' bgcolor='pink' colspan='6'><h2>Login Form</h2></td>
</tr>
<tr>
<td align='right'>User Name:</td>
<td> <input type='text' name='u_name'></td>
</tr>
<tr>
<td align='right'>User Password:</td>
<td><input type='password' name='u_pass'></td>
</tr>
<tr>
<td align='center' colspan='4' ><input type='submit' name='login' value='Login'></td>
</tr>
</table>
</body> 
</html>
<?php
$conn=mysqli_connect("localhost","root","","canteen1");
if(isset($_POST['login'])){
  $us_name= $_SESSION['u_name']=$_POST['u_name'];
  $us_pass=$_POST['u_pass'];
 
  $query="select customer_name,email_id from customer_info where customer_name='$us_name' AND email_id='$us_pass'";
  $run=mysqli_query($conn,$query);
  if(mysqli_num_rows($run)>0)
  {
  echo "<script>window.open('order.php?logged=Logged in Successfully!!!','_self')</script>";
  }
  else{
    //echo "<script>alert('Not registered please sign up!!')</script>";
	echo "<script>
	alert('Not registered please sign up!!');
	window.location.href='insert.php';
	</script>";
  }
}
?>