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
              <h2>Members Login</h2>
              <form name="input" method="post" action="checklogin.php" >
              <input type="text" name="email" class="reg" placeholder="Email Address"><br>
              <input type="password" name="password" class="reg" placeholder="Password"><br>
                <p class="action_bottom">
                    <input type="submit" value="Login" class="button">
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

