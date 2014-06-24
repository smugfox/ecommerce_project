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

<?php include'header.php' ?>

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
              <?php include'footer.php' ?>
              <!--END OF FOOTER-->
        </div>
        <!--END OF CONTAINER-->
    </body>
</html>
<?php mysqli_close($con); ?>