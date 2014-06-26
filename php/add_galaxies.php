<?php

    // Post data
    $product_name = $_POST["product_name"];
    $product_description = $_POST["product_description"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];
    $image = $_POST["image"];

    $con=mysqli_connect("127.13.131.1","smugfox","","eshop");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>

<html>
<body>

You Added <?php echo $product_name; ?><br>
You Added <?php echo $product_description; ?><br>
You Added <?php echo $quantity; ?><br>
You Added <?php echo $price; ?><br>
You Added <?php echo $image; ?><br>
<?php

$sql = "INSERT into Products (Product_Name, Product_Description, Quantity, Price,Image) 
         Values ('$product_name','$product_description','$quantity','$price','$image');";
 
 if(!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
 }
 
 echo "Inserted Record!";
 
 mysqli_close($con);

?>
</body>
</html>
