{"filter":false,"title":"old_order_process.php","tooltip":"/old_order_process.php","undoManager":{"mark":0,"position":0,"stack":[[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":0,"column":0},"end":{"row":0,"column":5}},"text":"<?php"},{"action":"insertText","range":{"start":{"row":0,"column":5},"end":{"row":1,"column":0}},"text":"\n"},{"action":"insertLines","range":{"start":{"row":1,"column":0},"end":{"row":34,"column":0}},"lines":["    // Connect to server and select databse.","   ","    $con=mysqli_connect(\"127.13.131.1\",\"smugfox\",\"\",\"eshop\");","","    // Check connection","    if (mysqli_connect_errno()) {","        echo \"Failed to connect to MySQL: \" . mysqli_connect_error();","    }","","    $sql_order_results = \"INSERT INTO Orders (Customer_ID, Order_Date, Order_Status) ","                          VALUES (\". $_SESSION['CustomerID'] .\", Now(),'Complete')\";","    ","    $result=mysqli_query($con,$sql_order_results);","    $orders_id = mysqli_insert_id($con);","    ","    ","    foreach($jcart->get_contents() as $item) {","        echo \"Item ID: \".$item['id'] . \"<br>\"; //gets the item's ID","        echo \"Item Name: \".$item['name'] . \"<br>\"; //gets the item's name","        echo \"Item price: \".$item['price'] . \"<br>\"; // gets the item's price","        echo \"Item qty: \".$item['qty'] . \"<br>\"; // gets number of this product in cart","        echo \"Item total: \".$item['price']*$item['qty'] . \"<br>\"; // total order value of this line item","    ","        // Mysql_num_row is counting table row","        ","        $sql_items_results = \"INSERT INTO Items (Product_Quantity, Orders_ID, Products_ID) ","                              VALUES (\". $item['qty'].\", \". $orders_id .\", \". $item['id'].\")\";","","        $items=mysqli_query($con,$sql_items_results);","        ","    }","        // header(\"location:order_success.php\");","      echo \"results \" . $sql_items_results;"]},{"action":"insertText","range":{"start":{"row":34,"column":0},"end":{"row":34,"column":2}},"text":"?>"}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":34,"column":2},"end":{"row":34,"column":2},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1405551233474,"hash":"bec1a2104aad93149f9bf306c8ee96c3d8438f36"}