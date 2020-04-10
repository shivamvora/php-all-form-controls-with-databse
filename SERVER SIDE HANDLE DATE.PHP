<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVERSIDE DATE HANDLE</title>
</head>
<body>
    <?php

      echo "You have selected this date:";
      $new_date= date('d-m-Y',strtotime($_REQUEST['d']));

      echo $new_date;

    ?>
</body>
</html>