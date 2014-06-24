<!-- PHP PROFILE WHILE LOOP -->
<?php

    $con=mysqli_connect("127.13.131.1","smugfox","","eshop");
    
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    $productID = $_GET["u"];
            
    if($productID == "")
      {
        $productID="";
      }
    $result = mysqli_query($con,"SELECT * FROM Products where ID = '" . $productID . "';");
    $row = mysqli_fetch_array($result);
  
?>
<!-- END OF LOOP -->

<!DOCTYPE html>
<html>
    <head>
        <title>Eshop</title>
        <link rel="stylesheet" type="text/css" href="../css/galaxy_product_description.css" /> 
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
          <!--END HEADER-->
          <!--NAV-->
          <div id="nav">
              <!--SEARCH-->
              <!--END SEARCH-->
              <ul>
                  <li>
                      <a href="index.html" class="home">Home</a>
                  </li>
                  <li>
                      <a href="galaxies.html" class="products">Products</a>
                  </li>
                  <li>
                      <a href="about_us.html" class="about_us">About Us</a>
                  </li>
                  <li>
                      <a href="signup.html" class="sign_up">Sign Up</a>
                  </li>
              </ul>
            </div>
            <!--END NAV-->
            
            

            
            <!--MAIN-->
              <div id="main">
              <h2>Product Description</h2>
                <div id="primary">
                 <div class="galaxy_description">
                   <div class="picture_image">
                    <img src="../img/arp18.jpg">
                   </div>
                 <div class="price">
                   <h2>$100.0</h2>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Donec egestas purus malesuada sem feugiat, et mollis tortor 
                    pharetra. Quisque imperdiet ut diam vel ullamcorper</p>
                  </div>
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
                        <li class="paypal"><img src="img/paypal.png"></li>
                        <li class="visa"><img src="img/visa.png"></li>
                        <li class="mastercard"><img src="img/mastercard.png"></li>
                        <li class="ae"><img src="img/ax.png"></li>
                    </ul>
                </div>
              </div>
              <!--END OF FOOTER-->
        </div>
        <!--END OF CONTAINER-->
    </body>
</html>
<?php mysqli_close($con); ?>