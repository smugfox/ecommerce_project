<!-- PHP PROFILE WHILE LOOP -->
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
        <title>Eshop</title>
        <link rel="stylesheet" type="text/css" href="../css/galaxies.css" /> 
        
    </head>
    <body>
        <!--CONTAINER-->
        <div id="container"> 
     
        <!--HEADER-->
          <div id=header>
            <div class="header_cart">
           
                <div id="logo">
                    <h1><a href="#">WELCOME TO MY ESHOP</a></h1>
                </div>
        <!--END LOGO-->
            </div>
          </div>
          
          <div id="nav">
              <!--SEARCH-->
              <form method="get" action="search">
                  <input type="text" value placeholder="Search Store" class="field" id="q">
              </form>
              <!--END SEARCH-->
              <ul>
                  <li>
                      <a href="index.php" class="home">Home</a>
                  </li>
                  <li>
                      <a href="galaxies.php" class="products">Products</a>
                  </li>
                  <li>
                      <a href="about_us.php" class="about_us">About Us</a>
                  </li>
                  <li>
                      <a href="signup.php" class="sign_up">Sign Up</a>
                  </li>
              </ul>
            </div>
              
            <!--MAIN-->
              <div id="main">
                <h2>Products</h2>
                <!--PRIMARY-->
                <div id="primary">
                    <!--CONTENT-->
           
          <?php
                    $result = mysqli_query($con,"SELECT * FROM Products;");
                    while($row = mysqli_fetch_array($result)) {
                        
                ?>
                       
                 <div class="large_products">
                      <div class="cell_row_left">
                      <a href="galaxy_product_description.php"> 
                        <div class="cell">
                          <div class="cell_image">
                          <img src="../img/<?php echo $row["Image"];?>"></div>
                          <div class="cell_description"><h4><?php echo $row["Product_Name"]; ?></h4></div>
                        </div>  
                      </div>
                    </div>
                    </a>
            <?php } ?> 
                </div>
              </div>
              <!--END MAIN-->


              <!--FOOTER-->
              <div id="footer">
                <div id="footer_left">
                    <h3>About Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Donec egestas purus malesuada sem feugiat, et mollis tortor 
                    pharetra. Quisque imperdiet ut diam vel ullamcorper</p>
                    <p>Phone: 555-555-5555
                    <br>
                       Email: test@test.com    
                    </p>
                </div>
                <div id="footer_mid">
                    <h3>Pament &amp Shipping</h3>
                    <ul>
                        <li class="paypal"><img src="../img/paypal.png"></li>
                        <li class="visa"><img src="../img/visa.png"></li>
                        <li class="mastercard"><img src="../img/mastercard.png"></li>
                        <li class="ae"><img src="../img/ax.png"></li>
                    </ul>
                </div>
              </div>
              <!--END OF FOOTER-->
        </div>
        <!--END OF CONTAINER-->
    </body>
</html>

<?php mysqli_close($con); ?>