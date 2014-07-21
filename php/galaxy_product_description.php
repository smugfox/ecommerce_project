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
    
    $productID = $_GET["ID"];
    
    if ($productID){
        $_SESSION['ID'] = $productID;
    } else
      {
        $productID = $_SESSION['ID'];
      }
      
    $result = mysqli_query($con,"SELECT p.ID, p.Product_Name, p.Product_Description, p.Price, p.Image, IF
                                (p.Quantity - i.Product_Quantity IS NULL,p.Quantity,p.Quantity - i.Product_Quantity) 
                                 AS Quantity_Available FROM Products p LEFT JOIN Items i ON p.ID = i.Products_ID 
                                 where p.ID = '" . $productID . "'; ");
    $row = mysqli_fetch_array($result);
    
?>
<!-- END OF LOOP -->

<!DOCTYPE html>
<html>
    <head>
        <title>Eshop</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/galaxy_product_description.css" />
        <link rel="stylesheet" type="text/css" media="screen, projection" href="jcart-1.3/jcart/css/jcart.css" />
        <link rel="stylesheet" href="../css/lightbox.css" />
        <script type="text/javascript" src="jcart-1.3/jcart/js/jcart.min.js"></script>
        <script src="../js/jquery-1.11.0.min.js"></script>
        <script src="../js/lightbox.min.js"></script>
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
                  <input type="text" name="search" class="field" id="q">
                  <input type="submit" value="Submit" name="submit">
              </form>
              <!--END SEARCH-->
    <!--HEADER-->
        <?php include'nav.php';?>
        </div>
    <!--END OF HEADER-->
            <!--MAIN-->
              <div id="main">
              <h2><?php echo $row["Product_Name"]; ?></h2>
                <div id="primary">
                 <div class="galaxy_description">
                   <div class="picture_image">
                   <a href="../img/<?php echo $row["Image"];?>" data-lightbox="image-1" data-title=<?php echo $row["Product_Name"]; ?>><img src="../img/<?php echo $row["Image"];?>"></a>
                    
                   </div>
                 <div class="price">
                   <h2>$<?php echo $row["Price"]; ?></h2>
                   <p><?php echo $row["Product_Description"]; ?></p>
                  </div>
                </div>
                
               
                
                  	<form method="post" action="" class="jcart">
					<fieldset>
						<input type="hidden" name="jcartToken" value="<?php echo $_SESSION['jcartToken'];?>" />
						<input type="hidden" name="my-item-id" value="<?php echo $row['ID'];?>" />
						<input type="hidden" name="my-item-name" value="<?php echo $row['Product_Name'];?>" />
						<input type="hidden" name="my-item-price" value="<?php echo $row['Price'];?>" />
						<input type="hidden" name="my-item-url" value="" />

						<ul>
							<li><strong><?php echo $row["Product_Name"]; ?></strong></li>
							<li><strong>Item ID <?php echo $row['ID'];?></strong></li>
							<li>Price: $<?php echo $row["Price"]; ?></li>
							<li>
								<label>Qty: <input type="text" name="my-item-qty" value="<?php echo $row['Quantity_Available']; ?>" size="3" 
								<?php if($row['Quantity_Available'] <= 0) {
								        echo " DISABLED ";
								}
								?>/></label>
							</li>
						</ul>

						<input type="submit" name="my-add-button" value="add to cart" class="button" 
						<?php if($row['Quantity_Available'] <= 0) {
								        echo " DISABLED ";
								}
								?>
								/>
					</fieldset>
				    </form>      
               
                
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