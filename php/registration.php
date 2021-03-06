<?php

include_once('jcart-1.3/jcart/jcart.php');

session_start();
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Eshop</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    <link rel="stylesheet" type="text/css" media="screen, projection" href="jcart-1.3/jcart/css/jcart.css" />
    <script type="text/javascript" src="jcart-1.3/jcart/js/jcart.min.js"></script>
    <script type="text/javascript" src="jcart-1.3/jcart/js/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="../js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="../js/scripts.js"></script>
    </head>
    <body>
        <!--CONTAINER-->
        <div id="container"> 
    <!--CART-->
    <div id="sidebar">
        <div id="jcart"><?php $jcart->display_carts();?></div>
    </div>
    <!--END OF CART-->
            <!--HEADER-->
          <div id=header>
            <div class="header_cart">
           
                <div id="logo">
                    <a href="index.php"><img src="../img/logo.jpg"></a>
                </div>
        <!--END LOGO-->
            </div>
          </div>
          
          <div id="nav">
              <!--SEARCH-->
              
              <form method="POST" action="results.php">
                  <input type="text" name="search" class="field" id="q" placeholder="Search Store">
                  <input type="image" value="Submit" name="submit" id="go" src="../img/icon_search.png">
                  
              </form>
              <!--END SEARCH-->
    <!--NAV-->
        <?php include'nav.php';?>
        </div>
    <!--END OF NAV-->
            <!--MAIN-->
          
            <div id ="reg_form">
              <h2>REGISTRATION</h2>
              <form name="input" action="add_customer.php" method="post">
                <input type="text" name="firstname" class="reg" placeholder="First name"><br>
                </p> <input type="text" name="lastname" class="reg" placeholder="Last name"><br>
                </p> <input type="text" name="address" class="reg" placeholder="Address"><br>
                <input type="text" name="city" class="reg" placeholder="City"><br>
                <input type="text" name="state" class="reg" placeholder="State"><br>
                <input type="text" name="zip" class="reg" placeholder="Zip"><br>
                <input type="text" name="email" class="reg" placeholder="Email Address"><br>
                <input type="password" name="password" class="reg" placeholder="Password"><br>
                <p class="action_bottom">
                    <input type="submit" style="margin-bottom:15px; margin-top:15px; margin-left:35px;" value="Sign Up" class="button">
                    or
                    <a href="index.php" class="return_store">return to store</a>
                </p>
              </form>
            </div>
            <!--END MAIN-->


              <!--FOOTER-->
              <?php include'footer.php'?>
              <!--END OF FOOTER-->
        </div>
        <!--END OF CONTAINER-->
    </body>
</html>

