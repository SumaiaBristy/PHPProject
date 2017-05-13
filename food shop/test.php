		 
	<?php

    $dsn = "mysql:host=localhost;dbname=canteen1";
    $dbc = new PDO($dsn, 'root', '');

    $query = 'select a.customer_id,b.product_type from order_info a,product_info b where a.product_id=b.product_id ';
    $stmt = $dbc->prepare($query);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $result[$row['customer_id']][] = $row['product_type'];
    }

?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>

    <head>
        <!-- Metas -->
        <meta http-equiv="content-type" content="utf-8" />
        <meta name="author" content="Truth" />

        <title>Rowspan Example</title>

    </head>

    <body>
        <center><h1>Bought products</h1></center>
        <center><table id="invoices" border="100">
            <thead>
                <th><font color='green'>Customer Id</font></th>
               <th><font color='green'>product_type</font></th>
            </thead>
            <tbody>
                <?php

                    foreach($result as $id => $invoices) {
                        echo '<tr>';
                        echo '<td rowspan='. count($invoices) . '>' . $id . '</td>';
                        $count = 0;
                        foreach ($invoices as $invoice) {
                            if ($count != 0) {
                                echo '<tr>';
                            }
                            echo "<td>$invoice</td>";
                            echo "</tr>";
                            $count++;
                        }
                    }

                ?>
            </tbody>
        </table></center>

    </body>
</html>