<?php
$conn=mysqli_connect("localhost","root","","canteen1");
$delete_record=$_GET['del'];
$que="delete from product_info where product_id='$delete_record'";
if(mysqli_query($conn,$que))
{
  echo"<script>window.open('unsold_pro.php?deleted=yes deleted-:)','_self')</script>";
}
?>