<?php

            if(isset($_POST['s']))
            {
                   echo $username= $_POST['n'];
                   echo $password= $_POST['p'];

                    if(strlen($username)<=5)
                    {
                        echo "<span style='color:red'><b>Warning...</b>Username shoud be more than 5 charactere  </span>";
                    }
                   
                
                    
            }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM VALIDATION IN PHP</title>
</head>
<body>
                    <form action="" method="post">

                        Username: <input type="text" name="n" placeholder="Enter Your Name"> <br>
                        Password: <input type="password" name="p" placeholder="Enter password"> <br>
                        <br>

                        <input type="submit" value="LOGIN" name="s">
                    
                    </form>    
</body>
</html>