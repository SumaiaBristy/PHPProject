 <?php
  $conn=mysqli_connect("localhost","root","","canteen1");
   $que="select e.customer_id,e.customer_name,d.type,d.qty,d.unit_price,d.bill from customer_info e left join(select a.customer_id,a.product_id productid,a.quantity qty,b.product_type type,b.price unit_price,a.quantity*b.price bill from order_info a,product_info b where a.product_id=b.product_id) d on e.customer_id=d.customer_id";
			$run=mysqli_query($conn,$que);
    $curr_id=0;
	 $row_count=0;
 $bill_total=0;
    $products="";
    $quantity="";
    $unit_price="";
    $customer="";
	while($row=mysqli_fetch_assoc($run))
    {
        $o_id=$row['customer_id'];
        $c_name=$row['customer_name'];
        $p_type=$row['type'];
        $p_qty=$row['qty'];
        $p_price=$row['unit_price'];
        $p_bill=$row['bill'];
        
       if ($curr_id<>$o_id and $row_count>0)
        {
?>
    <?php echo "<tr align='center' rowspan='$row_count;'>"?>
    <td><?php echo $curr_id; ?></td>
    <td><?php echo $customer; ?></td>
    <?php echo $products; ?>
    <?php echo $quantity; ?>
    <?php echo $unit_price; ?>
    <?php echo $bill_total; ?>
</tr>
<?php
        }
        if ($curr_id<>$o_id)
        {
            $row_count=1;
            $customer=$c_name;
            $products="<td><?php echo $p_type; ?></td>";
            $quantity="<td><?php echo $p_qty; ?></td>";
            $unit_price="<td><?php echo $p_price; ?></td>";
            $bill_total=$p_bill;
        }
        else
        {
            $row_count=$row_count + 1;
            $products=$products + "<td><?php echo $p_type; ?></td>";
            $quantity=$quantity + "<td><?php echo $p_qty; ?></td>";
            $unit_price=$unit_price + "<td><?php echo $p_price; ?></td>";
            $bill_total=$bill_total + $p_bill;
        }
    $curr_id=$o_id;
    }
?>