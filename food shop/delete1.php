<?php
$conn=mysqli_connect("localhost","root","","canteen1");
$delete_record=$_GET['del'];
$que="delete from customer_info where customer_id='$delete_record'";
if(mysqli_query($conn,$que))
{
  echo"<script>window.open('cus_del.php?deleted=yes deleted-:)','_self')</script>";
}
?>