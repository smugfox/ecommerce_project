{"changed":false,"filter":false,"title":"checklogin.php","tooltip":"/php/checklogin.php","value":"<?php\n\ninclude_once('jcart/jcart.php');\n\nsession_start();\n?>\n\n<?php\n// Connect to server and select databse.\n    \n    if (isset($_POST['email']) and isset($_POST['password'])){\n        \n    // email and password sent from form \n    $email=$_POST['email']; \n    $password = $_POST[\"password\"];\n    $hashedPassword = crypt($password,'saltkey');\n    $con=mysqli_connect(\"127.13.131.1\",\"smugfox\",\"\",\"eshop\");\n\n    // Check connection\n    if (mysqli_connect_errno()) {\n        echo \"Failed to connect to MySQL: \" . mysqli_connect_error();\n    }\n \n    $result=mysqli_query($con,\"SELECT * FROM Customers WHERE Email='\" . $email . \"' and Password='\" . $hashedPassword . \"';\");\n    $row = mysqli_fetch_array($result);\n    // Mysql_num_row is counting table row\n    $count=mysqli_num_rows($result);\n    //$count = $result->num_rows;\n\n\n\n    // If result matched $my_email_address and $mypassword, table row must be 1 row\n    if($count==1){\n        $_SESSION['email'] = $email;\n        $_SESSION['CustomerID'] = $row['ID'];\n        // Register $my_email_address, $mypassword and redirect to file \"login_success.php\"\n        //session_register(\"my_email_address\");\n        //session_register(\"mypassword\"); \n        //echo \"Success!\";\n        //header(\"location:login_success.php\");\n    }\n        else {\n    \n        echo \"<p><label style='color:red;font-weight:bold;'>Invalid Login Credentials.</h6></p>\";\n        }\n    }\n    if (isset($_SESSION['email'])){\n        //header(\"location:login_success.php\");\n        header(\"location:index.php\");\n        }\n    else\n    {\n        header(\"location:registration.php\");\n    }\n\n?>","undoManager":{"mark":0,"position":-1,"stack":[]},"ace":{"folds":[],"scrolltop":593.5,"scrollleft":0,"selection":{"start":{"row":29,"column":0},"end":{"row":29,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":36,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1405371084194}