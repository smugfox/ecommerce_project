// Check if session is not registered, redirect back to main page. 
<?php
session_start();

if(!session_is_registered(my_email_address)){
header("location:index.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>