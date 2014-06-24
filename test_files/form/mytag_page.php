<?php

 foreach ($_POST as $key => $value) {
        echo $key . ": " . $value . "<br/>" ;
    }    
    
  if( $_POST['cmd'] == "TAGS" )
  {
      //load the tags page
      include "mytag_tags.php" ;
  }

  if( $_POST['cmd'] == "CONNECTIONS" )
  {
      //load the connections page
      include "mytag_connections.php" ;
  }
  
    
?>


