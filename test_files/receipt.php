<?php
    include_once('jcart-1.3/jcart/jcart.php');

    session_start();
?>
<?php
    
    $con=mysqli_connect("127.13.131.1","smugfox","","eshop");
    
    $result = mysqli_query($con,"SELECT * FROM Customers where Email = '" . $_SESSION['email'] . "';");
    $row = mysqli_fetch_array($result);
    
    $result_receipt = mysqli_query($con, "SELECT o.ID, c.First_Name, c.Last_Name, o.Order_Date FROM Orders o INNER JOIN Customers c ON o.ID=c.ID;");
    $row_receipt = mysqli_fetch_array($result_receipt);
    
    $result_product = mysqli_query($con, "SELECT i.ID, i.Product_Quantity, p.Product_Name, p.Price FROM Items i INNER JOIN Products p ON i.ID=p.ID;");
    $row_product = mysqli_fetch_array($result_product);
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Account</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/galaxies.css" />
        <link rel="stylesheet" type="text/css" media="screen, projection" href="jcart-1.3/jcart/css/jcart.css" />
        <script type="text/javascript" src="jcart-1.3/jcart/js/jcart.min.js"></script>
        <script type="text/javascript" src="jcart-1.3/jcart/js/jquery-1.4.4.min.js"></script>
    </head>
    <body>
        <!--CONTAINER-->
        <div id="container"> 
    <!--CART-->
    <div id="sidebar">
        <div id="jcart"><?php $jcart->display_cart();?></div>
    </div>
    <!--END OF CART-->
            <!--HEADER-->
          <div id=header>
            <div class="header_cart">
           
                <div id="logo">
                    <a href="index.php"><img src="../img/logo.png"></a>
                </div>
        <!--END LOGO-->
            </div>
          </div>
          
          <div id="nav">
              <!--SEARCH-->
              
              <form method="POST" action="results.php">
                  <input type="text" name="search" class="field" id="q">
                  <input type="submit" value="Submit" name="submit">
              </form>
              <!--END SEARCH-->
    <!--NAV-->
        <?php include'nav.php';?>
        </div>
    <!--END OF NAV-->
              
            <!--MAIN-->
              <div id="main">
                <h2>My Account</h2>
                <!--PRIMARY-->
                <div id="cell_div">
                    <!--CONTENT-->
                    <?php  
                    //3.1.4 if the user is logged in Greets the user with message
                    if (isset($_SESSION['email'])){
                        $email = $_SESSION['email'];
                        
                            echo "<p><h1>Receipt</h1></p>
                                <table>
                                    <tr>
                                      <th>Order ID</th>
                                      <th>First name</th>
                                      <th>Last name</th>
                                      <th>Order Date</th>
                                      <th>Product Ordered</th>
                                      <th>Quantity</th>
                                      <th>Price</th>
                                    </tr>
                                    <tr>
                                      <td>".$row_receipt["ID"]."</td>
                                      <td>".$row["First_Name"]."</td>
                                      <td>".$row["Last_Name"]."</td>
                                      <td>".$row_receipt["Order_Date"]."</td>
                                      <td>".$row_product["Product_Name"]."</td>
                                      <td>".$row_product["Product_Quantity"]."</td>
                                      <td>".$row_product["Price"]."</td>
                                    </tr>
                        
                               </table>";
                    }
                    else
                    {
                        //3.2 Redirect user back to login.php
                        header("location:index.php");
                       
                    }
                ?>
                </div>
              </div>
              <!--END MAIN-->


              <!--FOOTER-->
              <?php include'footer.php'?>
              <!--END OF FOOTER-->
        </div>
        <!--END OF CONTAINER-->
    </body>
</html>

<?php //mysqli_close($con); ?>