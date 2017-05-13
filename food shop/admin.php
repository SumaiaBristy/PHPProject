<?php
 session_start();
?>


<html>
   <head>
     <title>Admin Log in</title>
	 </head>
<body>	
<form action='admin.php' method='post'>
<center><?php echo @$_GET['error']; ?>
<table width='400' border='2' align='center' bgcolor='orange'>
<tr>
<td align='center' bgcolor='pink' colspan='6'><h2>Admin Panel Form</h2></td>
</tr>
<tr>
<td align='right'>Admin Name:</td>
<td> <input type='text' name='u_name'></td>
</tr>
<tr>
<td align='right'>Admin Password:</td>
<td><input type='password' name='u_pass'></td>
</tr>
<tr>
<td align='center' colspan='4' ><input type='submit' name='login' value='Login'></td>
</tr>
</table>
</body> 
</html>
<?php
$conn=mysqli_connect("localhost","root","","admin");
if(isset($_POST['login'])){
  $us_name= $_SESSION['u_name']=$_POST['u_name'];
  $us_pass=$_POST['u_pass'];
 
  $query="select * from user where admin_name='$us_name' AND admin_pass='$us_pass'";
  $run=mysqli_query($conn,$query);
  if(mysqli_num_rows($run)>0)
  {
  echo "<script>window.open('admin_panel.php?logged=Yes Logged in!!!','_self')</script>";
  }
  else{
	echo "<script>
	alert('You are Not an admin!!');
	window.location.href='home1.php';
	</script>";
  }
}
?>