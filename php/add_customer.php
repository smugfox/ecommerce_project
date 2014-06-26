<?php

    // Post data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $con=mysqli_connect("127.13.131.1","smugfox","","eshop");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>

<html>
<body>

Welcome <?php echo $firstname; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
<?php

$sql = "INSERT INTO Customers (First_Name, Last_Name, Address, City, State, Zip, Email, Password) 
         Values ('$firstname','$lastname','$address','$city','$state','$zip','$email','$password');";
 
 if(!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
 }
 
 echo "Inserted Record!";
 
 mysqli_close($con);

?>
</body>
</html>
