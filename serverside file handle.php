<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVERSIDE FILE HANDLE </title>
</head>
<body>
    <?php

      if (move_uploaded_file($_FILES['myfile']['tmp_name'],"images/".$_FILES['myfile']['name']))
      {
          echo "Your file uploded Successfully";

      }
      else
      {
          echo "Files upload to fail";
      }
    ?>
</body>
</html>
