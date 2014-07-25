<?php
    include_once('jcart-1.3/jcart/jcart.php');

    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Order Successful</title>
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
    <div id="main">
      <div id="order_successful">
      <?php echo "<p style='margin-left: 250px; font-weight: bold; font-size: 40px;'>ORDER SUCCESSFUL</p>"?>
      </div>
        <form name="input" action="index.php" method="post">
                 	<input type="submit" value="Return to Homepage" style="
                    margin-left: 380px;
                    margin-bottom: 40px;
                    background-color: #fe6f61;
                    border: none;
                    padding: 10px;
                    color: #fff;
                    font-weight: bold;
                    border-radius: 4px;
                    ">
                 </form>
    </div>
    <!--END OF MAIN-->


        <?php include'footer.php';?>
    </div>
    <!--END OF CONTAINER-->
    </body>
</html>

