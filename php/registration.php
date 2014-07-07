<?php

include_once('jcart/jcart.php');

session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Eshop</title>
</head>
<body>

<form name="input" action="add_customer.php" method="post">
First name: <input type="text" name="firstname"><br>
Last name: <input type="text" name="lastname"><br>
Address: <input type="text" name="address"><br>
City: <input type="text" name="city"><br>
State: <input type="text" name="state"><br>
Zip: <input type="text" name="zip"><br>
Email Address: <input type="text" name="email"><br>
Password: <input type="password" name="password"><br>
<input type="submit" value="Submit">
</form>

</body>

</html>