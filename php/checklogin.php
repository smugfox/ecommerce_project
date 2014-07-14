<?php

include_once('jcart/jcart.php');

session_start();
?>

<?php
// Connect to server and select databse.
    
    if (isset($_POST['email']) and isset($_POST['password'])){
        
    // email and password sent from form 
    $email=$_POST['email']; 
    $password = $_POST["password"];
    $hashedPassword = crypt($password,'saltkey');
    $con=mysqli_connect("127.13.131.1","smugfox","","eshop");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
 
    $result=mysqli_query($con,"SELECT * FROM Customers WHERE Email='" . $email . "' and Password='" . $hashedPassword . "';");
    $row = mysqli_fetch_array($result);
    // Mysql_num_row is counting table row
    $count=mysqli_num_rows($result);
    //$count = $result->num_rows;



    // If result matched $my_email_address and $mypassword, table row must be 1 row
    if($count==1){
        $_SESSION['email'] = $email;
        $_SESSION['CustomerID'] = $row['ID'];
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
    if (isset($_SESSION['email'])){
        //header("location:login_success.php");
        header("location:index.php");
        }
    else
    {
        header("location:registration.php");
    }

?>