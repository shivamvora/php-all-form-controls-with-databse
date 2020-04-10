<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVERERSIDE FULL DATA FETCH</title>
</head>
<body>
<?php

              foreach ($_REQUEST as $key=>$value)
              {
                  if(is_array($value))
                  {
                      foreach ($value as $data)
                      {
                          echo $key . "=" . $data . "<br>";
                      }
                  }
                  else
                  {
                      echo $key . "=" . $value .  "<br>";
                  }
              }


?>
    
</body>
</html>