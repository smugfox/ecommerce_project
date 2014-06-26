<?php
// Connect to server and select databse.
    $con=mysqli_connect("127.13.131.1","smugfox","","eshop");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

// email and password sent from form 
$my_email_address=$_POST['my_email_address']; 
$mypassword=$_POST['mypassword']; 

$result=mysqli_query($con,"SELECT * FROM Customers WHERE Email='" . $my_email_address . "' and Password='" . $mypassword . "';");

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);



// If result matched $my_email_address and $mypassword, table row must be 1 row
if($count==1){

    // Register $my_email_address, $mypassword and redirect to file "login_success.php"
    session_register("my_email_address");
    session_register("mypassword"); 
    echo "Success!";
    header("location:login_success.php");
}
else {
    
    echo "Wrong Username or Password";
}
?>