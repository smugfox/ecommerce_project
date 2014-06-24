<?php
include_once('jcart-1.3/jcart/jcart.php');

session_start();
?>

<!-- PHP PROFILE WHILE LOOP -->
<?php

    $con=mysqli_connect("127.13.131.1","smugfox","","eshop");
    
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    $productID = $_GET["ID"];
            
    if($productID == "")
      {
        $productID="ID";
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
        <link rel="stylesheet" type="text/css" media="screen, projection" href="jcart-1.3/jcart/css/jcart.css" />
        <script type="text/javascript" src="jcart-1.3/jcart/js/jcart.min.js"></script>
        <script type="text/javascript" src="jcart-1.3/jcart/js/jquery-1.4.4.min.js"></script>
    </head>
		<div id="sidebar">
			<div id="jcart"><?php $jcart->display_cart();?></div>
		</div>
<?php include'header.php' ?>

            <!--MAIN-->
              <div id="main">
              <h2><?php echo $row["Product_Name"]; ?></h2>
                <div id="primary">
                 <div class="galaxy_description">
                   <div class="picture_image">
                    <img src="../img/<?php echo $row["Image"];?>">
                   </div>
                 <div class="price">
                   <h2>$<?php echo $row["Price"]; ?></h2>
                   <p><?php echo $row["Product_Description"]; ?></p>
                  </div>
                </div>
                
                <div id="jcart">
                
                  	<form method="post" action="" class="jcart">
					<fieldset>
						<input type="hidden" name="jcartToken" value="<?php echo $_SESSION['jcartToken'];?>" />
						<input type="hidden" name="my-item-id" value="<?php echo $row['ID'];?>" />
						<input type="hidden" name="my-item-name" value="<?php echo $row['Product_Name'];?>" />
						<input type="hidden" name="my-item-price" value="<?php echo $row['Price'];?>" />
						<input type="hidden" name="my-item-url" value="" />

						<ul>
							<li><strong><?php echo $row["Product_Name"]; ?></strong></li>
							<li>Price: $<?php echo $row["Price"]; ?></li>
							<li>
								<label>Qty: <input type="text" name="my-item-qty" value="1" size="3" /></label>
							</li>
						</ul>

						<input type="submit" name="my-add-button" value="add to cart" class="button" />
					</fieldset>
				    </form>      
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