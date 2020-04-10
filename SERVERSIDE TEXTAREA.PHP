<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HANDLE TEXTAREA SERVERSIDE</title>
</head>
<body>
    <?php
     
     $mydata=$_REQUEST['family'];
     echo str_replace("\n", "<br>", $mydata);
    
    ?>
</body>
</html>