<?php
include_once('jcart-1.3/jcart/jcart.php');

session_start();
?>
<!-- PHP WHILE LOOP -->
<?php

    $con=mysqli_connect("127.13.131.1","smugfox","","eshop");
    
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
<!-- END OF LOOP -->
<!DOCTYPE html>
<html>
    <head>
        <title>Eshop</title>
        <link rel="stylesheet" type="text/css" href="../css/styles.css" />
        <link rel="stylesheet" type="text/css" media="screen, projection" href="jcart-1.3/jcart/css/jcart.css" />
        <script type="text/javascript" src="jcart-1.3/jcart/js/jcart.min.js"></script>
        <script type="text/javascript" src="jcart-1.3/jcart/js/jquery-1.4.4.min.js"></script>

    </head>
		<div id="sidebar">
			<div id="jcart"><?php $jcart->display_cart();?></div>
		</div>
    <?php include'header.php'?>

              <!--SLIDER-->
              <div id=slider>
                <img src="../img/scrolling.gif">
              </div>
              
            <!--MAIN-->
              <div id="main">
                <!--CELL DIV-->
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
                          <div class="cell_description"><h4><?php echo $row["Product_Name"]; ?></h4></div>
                        </div> 
                        </a>
                      
            <?php } ?>
                </div>
                <!--SIDE-->
                <div id="side">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                  Donec egestas purus malesuada sem feugiat, et mollis tortor 
                  pharetra. Quisque imperdiet ut diam vel ullamcorper. Integer 
                  vulputate condimentum pharetra. Fusce dolor augue, volutpat 
                  faucibus risus a, sagittis laoreet nisl. Duis faucibus, sem 
                  ut posuere elementum, mi urna volutpat orci, non hendrerit 
                  orci dolor eu diam. Phasellus elementum suscipit volutpat. 
                  Morbi vulputate erat interdum feugiat commodo. Nunc et nulla 
                  tempor, sollicitudin mi id, vestibulum risus. Praesent auctor 
                  nisl orci, vel tristique turpis ornare sed.</p>  
                </div>
                <!--END OF SIDE-->
              </div>
              <!--END MAIN-->
              

    <?php include'footer.php'?>
        </div>
        <!--END OF CONTAINER-->
    </body>
</html>

<?php mysqli_close($con); ?>