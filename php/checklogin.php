<?php

include_once('jcart/jcart.php');

session_start();
?>

<?php
// Connect to server and select databse.
    
    if (isset($_POST['my_email_address']) and isset($_POST['mypassword'])){
        
    // email and password sent from form 
    $my_email_address=$_POST['my_email_address']; 
    $mypassword=$_POST['mypassword']; 
    
    $con=mysqli_connect("127.13.131.1","smugfox","","eshop");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result=mysqli_query($con,"SELECT * FROM Customers WHERE Email='" . $my_email_address . "' and Password='" . $mypassword . "';");

    // Mysql_num_row is counting table row
    $count=mysqli_num_rows($result);
    //$count = $result->num_rows;



    // If result matched $my_email_address and $mypassword, table row must be 1 row
    if($count==1){
        $_SESSION['my_email_address'] = $my_email_address;
        // Register $my_email_address, $mypassword and redirect to file "login_success.php"
        //session_register("my_email_address");
        //session_register("mypassword"); 
        //echo "Success!";
        //header("location:login_success.php");
    }
        else {
    
        echo "<p><label style='color:red;font-weight:bold;'>Invalid Login Credentials.</h6></p>";
        }
    }
    if (isset($_SESSION['my_email_address'])){
        //header("location:login_success.php");
        header("location:index.php");
        }
    else
    {
        header("location:registration.php");
    }

?>