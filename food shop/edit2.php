<?php
$conn=mysqli_connect("localhost","root","","canteen1");
$edit_record=$_GET['edit'];
$query="select * from product_info where product_id='$edit_record'";
$run=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($run))
{
  $edit_id=$row['product_id'];
  $p_type=$row[1];
    $p_price=$row[2];
  
}
?>
<html>
  <head>
     <title>Update products's Record</title>
   </head>
<body>
  <form method='post' action='edit2.php?edit_form=<?php echo $edit_id; ?>'>
<table width='500' border='3' align=center>
  <tr>
   <th bgcolor='yellow' colspan='5'>Updating Form</th>
   </tr>
   <tr>
     <td align='right'>product_type:</td>
     <td><input type='text' name='p_type1' value='<?php echo $p_type; ?>'>
	 </td>
   </tr>
   <tr>
     <td align='right'>Products price:</td>
     <td><input type='text' name='p_price1'value='<?php echo $p_price; ?>'>
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
  $pro_type=$_POST['p_type1'];
  $pro_price=$_POST['p_price1'];
  $que1="update product_info set product_type='$pro_type',price='$pro_price' where product_id = '$edit_record1' ";
  if(mysqli_query($conn,$que1)){
  echo "<script>window.open('pro_del.php?updated=Yes Updated...!','_self')</script>";
  
  }
}
?>