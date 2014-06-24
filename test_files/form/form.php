

<form action="form.php" method="post">
  <span class=error>First Name:</span> <input type="text" name="firstname"><br/>
  <hr/>
  Gender:<br/>
  <input type="radio" name="sex" value="male">Male<br/>
  <input type="radio" name="sex" value="female">Female<br/>
  <hr/>
  Are you a minor?:<br/>
  <input type="radio" name="minor" value="yes">Yes<br/>
  <input type="radio" name="minor" value="no">No<br/>  
  <hr/>
  <input type="checkbox" name="vehicle[1]" value="Bike">I have a bike<br/>
  <input type="checkbox" name="vehicle[2]" value="Car">I have a car<br/> 
   <select name="make">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="mercedes">Mercedes</option>
    <option value="audi">Audi</option>
  <br/>  
  
<input type="submit">

</form>

<?php

 //foreach ($_POST as $key => $value) {
 //       echo $key . ": " . $value . "<br/>" ;
 //   }

 if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if( $_POST['firstname'] != "" ) {
            $name = $_POST["firstname"] ;
            echo $name . "<br/>" ;
            $sex = $_POST["sex"] ;
            echo $sex . "<br/>" ;
            $min = $_POST["minor"] ;
            echo $min . "<br/>" ;
            $make = $_POST["make"] ;
            echo $make . "<br/>" ;
            foreach($_POST["vehicle"] as $check) {
                echo $check . "<br/>" ;
            }
        }
        else
        {
?>    
            <head>
                <style>
                .error {
                    color:  red ;  
                }
                </style>
            </head>
<?php            
            echo "<span class=error>Please at least tell your name!</span><br/>" ;
        }
    }

?>