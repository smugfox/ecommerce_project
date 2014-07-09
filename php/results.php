<?php
    include_once('jcart-1.3/jcart/jcart.php');

    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Eshop</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/galaxies.css" />
        <link rel="stylesheet" type="text/css" media="screen, projection" href="jcart-1.3/jcart/css/jcart.css" />
        <script type="text/javascript" src="jcart-1.3/jcart/js/jcart.min.js"></script>
        <script type="text/javascript" src="jcart-1.3/jcart/js/jquery-1.4.4.min.js"></script>
    </head>
    <body>
  <?php
    error_reporting(_ALL);

    $search=$_POST['search'] ;

    if ( $search != ""  )
        {
        }

      // Create Connection
      $con=mysqli_connect("127.13.131.1","smugfox","","eshop");

      // Check Connection
      if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error() . "<br/>" ;
      }

    // Query some records
    $query = " select ID, Product_Name, Quantity, Price, Image from Products where Product_Name like '$search%' " ;
    $result = mysqli_query( $con, $query);
    $num = $result->num_rows ;

  ?>

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
              <form method="POST" action="search.php">
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
                <h2>Search Results</h2>
                <!--PRIMARY-->
                <div id="cell_div">
                    <!--CONTENT-->
        <?php

        // Display records
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
<?php
    mysqli_close($con);
    ?>
	  
