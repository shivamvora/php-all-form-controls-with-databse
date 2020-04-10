<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVERSIDE LIST BOX</title>
</head>
<body>

    <?php
     if(isset($_REQUEST["location"]))
     {

             echo "You have selected the city:". "<br>";


             foreach($_REQUEST["location"] as $shivam)

          {
              echo $shivam."<br>";
          }
     }
      else
      {
          echo "You have not selected city one of them";
      }
    ?>

</body>
</html>
