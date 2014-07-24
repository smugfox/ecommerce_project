<?php
    include_once('jcart-1.3/jcart/jcart.php');

    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Galaxy Warehouse Checkout</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    <link rel="stylesheet" type="text/css" media="screen, projection" href="jcart-1.3/jcart/css/jcart.css" />
    <!--
    <script type="text/javascript" src="jcart-1.3/jcart/js/jcart.min.js"></script>
    <script type="text/javascript" src="jcart-1.3/jcart/js/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="jcart-1.3/jcart//js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="jcart-1.3/jcart/js/jcart.js"></script> 
	-->
    
    </head>
    <body>
        <!--CONTAINER-->
        <div id="container"> 
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
    <!--CELL DIV-->
    <div id="cell_div">
    		<h2>Galaxy Checkout</h2>
			<div id="content">
				<div id="jcart_checkout"><?php $jcart->display_cart();?></div>
                 <form name="input" action="input_order.php" method="post">
                 	<input type="submit" value="Order">
                 </form>
					<p><a href="index.php">&larr; Continue shopping</a></p>

			</div>

			<div class="clear"></div>
    </div>
    
    </div>
    <!--END OF MAIN-->


        <?php include'footer.php';?>
    </div>
    <!--END OF CONTAINER-->
    </body>
</html>
