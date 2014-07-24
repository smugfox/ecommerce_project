<?php
    include_once('jcart-1.3/jcart/jcart.php');

    session_start();
?>
<?php

    $con=mysqli_connect("127.13.131.1","smugfox","","eshop");
    
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
  
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Galaxies</title>
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
              
              <form method="POST" action="results.php" style="margin-top: 0px;">
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
                <h2>Galaxies</h2>
                <!--PRIMARY-->
                <div id="cell_div">
                    <!--CONTENT-->
           
          <?php
                    $result = mysqli_query($con,"SELECT * FROM Products;");
                    while($row = mysqli_fetch_array($result)) {
                        
                ?>
                <a href="galaxy_product_description.php?ID=<?php echo $row["ID"];?>">
                        <div class="cell">
                          <div class="cell_image">
                            <img src="../img/<?php echo $row["Image"];?>"></div>
                          <div class="cell_description_box">
                            <div class="description">
                                <p>$<?php echo $row["Price"]; ?></p>
                                <h4><?php echo $row["Product_Name"]; ?></h4>
                            </div>
                          </div>
                        </div> 
                </a>
            <?php } ?> 
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

<?php mysqli_close($con); ?>