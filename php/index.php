<?php
    include_once('jcart-1.3/jcart/jcart.php');

    session_start();
?>
<?php
    // Connect to server and select databse.
    
    $con=mysqli_connect("127.13.131.1","smugfox","","eshop");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
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
    
    <!--SLIDER-->
    <div id=slideshow>
        <div><img src="../img/slideshow/holmberg2_slideshow.jpg"></div>
        <div><img src="../img/slideshow/Leo_triplet_slideshow.jpg"></div>
        <div><img src="../img/slideshow/Messier_82_slideshow.jpg"></div>
        <div><img src="../img/slideshow/NGC_3314_slideshow.jpg"></div>
    </div>
    <!--END OF SLIDER-->

    <!--MAIN-->
    <div id="main">
    <!--CELL DIV-->
    <div id="cell_div">
    <!--CONTENT-->
    
    <!-- PHP WHILE LOOP -->
    <?php
        $result = mysqli_query($con,"SELECT * FROM Products;");
        while($row = mysqli_fetch_array($result)) {
    ?>
    
        <a href="galaxy_product_description.php?ID=<?php echo $row["ID"];?>"> 
    <div class="cell">
    <div class="cell_image">
        <img src="../img/<?php echo $row["Image"];?>">
    </div>
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
    
    <!--SIDE-->
    <div id="side">
      <h3 class="recent_posts">Galaxy Warehouse Updates</h3>
        <h4 class="galaxy_added">Messier 82 Galaxy Added</h4>
        <h6 class="galaxy_date">Posted July 20, 2014</h6>
        <p class="galaxy_p">For the low low price of just $99000, the Messier 82 galaxy cluster can be yours!</p><br>
        <h4 class="galaxy_added">Holmberg II Galaxy Added</h4>
        <h6 class="galaxy_date">Posted July 18, 2014</h6>
        <p class="galaxy_p">The Holmber II mega cluster has been added, and boy is it a beuty!  Yours for only a measly $28000.</p><br>
        <h4 class="galaxy_added">Leo Triplet Galaxy Added</h4>
        <h6 class="galaxy_date">Posted July 16, 2014</h6>
        <p class="galaxy_p">The Leo Triplet galaxy is now up for sale, so grab it while it lasts!</p><br>
        <h4 class="galaxy_added">Sagittarius Has Been Added</h4>
        <h6 class="galaxy_date">Posted July 12, 2014</h6>
        <p class="galaxy_p">The beautiful Sagittarius galaxy is now up for sale and it's a real looker.  </p><br>
    </div>
    <!--END OF SIDE-->
    </div>
    <!--END OF MAIN-->


        <?php include'footer.php';?>
    </div>
    <!--END OF CONTAINER-->
    </body>
</html>

<?php mysqli_close($con); ?>