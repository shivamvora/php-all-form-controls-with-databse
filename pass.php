<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVER SIDE PASSWORD</title>
</head>
<body>

       <?php
            if($_REQUEST["pass"]== "Hello")
            {
               echo "<b> <font color='green'>Welcome to Shivam vora's Website</font></b>"."<br>";
               echo " <b><h2><font color='green'> You have successfully login </font></h2><b>";
            }
            else
            {
                echo "<font color='red'> You have entered Wrong password  &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp; <font>" .$_REQUEST["pass"];
            }
       ?>

</body>
</html>