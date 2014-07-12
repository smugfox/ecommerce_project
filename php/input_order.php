<?php
include_once('jcart-1.3/jcart/jcart.php');

session_start();
?>

<?php
// Connect to server and select databse.
    
    
    $con=mysqli_connect("127.13.131.1","smugfox","","eshop");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $sql_order_results = "INSERT INTO Orders (Customer_ID, Order_Date, Order_Status) VALUES (". $_SESSION['CustomerID'] .", Now(),'Complete')";
    // echo " results " . $sql_order_results . "<br>";
    $result=mysqli_query($con,$sql_order_results);
    $orders_id = mysqli_insert_id($con);
    // echo "orders: " . $orders_id . "<br>";
    // echo " Order results " . $results . "<br>" . "ID" . $orders_id;
    foreach($jcart->get_contents() as $item) {
        echo $item['id']; //gets the item's ID
        echo $item['name']; //gets the item's name
        echo $item['price']; // gets the item's price
        echo $item['qty']; // gets number of this product in cart
        echo $item['price']*$item['qty']; // total order value of this line item
    
        // // Mysql_num_row is counting table row
        // $count=mysqli_num_rows($result);
        // //$count = $result->num_rows;
        $sql_items_results = "INSERT INTO Items (Product_Quantity, Orders_ID, Products_ID) VALUES (". $item['qty'].", ". $orders_id .", ". $item['id'].")";
        $items=mysqli_query($con,$sql_items_results);
        echo " items " . $sql_items_results;
        $update_product_qty = mysqli_query($con,"UPDATE Products SET ID = ID - 1 WHERE ID = ".$item['id']);
        

    }
        header("location:order_success.php");
 
?>

<?php mysqli_close($con); ?>