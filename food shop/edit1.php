<?php
$conn=mysqli_connect("localhost","root","","canteen1");
$edit_record=$_GET['edit'];
$query="select * from customer_info where customer_id='$edit_record'";
$run=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($run))
{
  $edit_id=$row['customer_id'];
  $c_name=$row[1];
    $c_gmail=$row[2];
  
}
?>
<html>
  <head>
     <title>Update customer's Record</title>
   </head>
<body>
  <form method='post' action='edit1.php?edit_form=<?php echo $edit_id; ?>'>
<table width='500' border='3' align=center>
  <tr>
   <th bgcolor='yellow' colspan='5'>Updating Form</th>
   </tr>
   <tr>
     <td align='right'>customer Name:</td>
     <td><input type='text' name='c_name1' value='<?php echo $c_name; ?>'>
	 </td>
   </tr>
   <tr>
     <td align='right'>Email Id:</td>
     <td><input type='text' name='c_gmail1'value='<?php echo $c_gmail; ?>'>
	 </td>
   </tr>

<tr>
  <td align='center' colspan='6'>
  <input type='submit' name='update' value='Update'>
 </td>
</tr>
</table>
</form>
 </body>
</html>
<?php
if(isset($_POST['update'])){
  $edit_record1=$_GET['edit_form'];
  $cus_name=$_POST['c_name1'];
  $cus_email=$_POST['c_gmail1'];
  $que1="update customer_info set customer_name='$cus_name',email_id='$cus_email' where customer_id = '$edit_record1' ";
  if(mysqli_query($conn,$que1)){
  echo "<script>window.open('cus_del.php?updated=Yes Updated...!','_self')</script>";
  
  }
}
?>