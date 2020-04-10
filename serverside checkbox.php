<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVERSIDE CHECKBOX HANDLE</title>
</head>
<body>
    <?php

      if(isset($_REQUEST['check1']))
      {
          echo $_REQUEST['check1'] ."<br>";
      }

      if(isset($_REQUEST['check2']))
      {
          echo $_REQUEST['check2'] ."<br>";
      }

      if(isset($_REQUEST['check3']))
      {
          echo $_REQUEST['check3'] ."<br>";
      }

      if(isset($_REQUEST['check4']))
      {
          echo $_REQUEST['check4'] ."<br>";
      }

      if(isset($_REQUEST['check5']))
      {
          echo $_REQUEST['check5'] ."<br>";
      }

      if(isset($_REQUEST['check6']))
      {
          echo $_REQUEST['check6'] ."<br>";
      }

      if(isset($_REQUEST['check7']))
      {
          echo $_REQUEST['check7'] ."<br>";
      }

      if(isset($_REQUEST['check8']))
      {                                   
          echo $_REQUEST['check8'] ."<br>";
      }

      if(isset($_REQUEST['check9']))
      {
          echo $_REQUEST['check9'] ."<br>";
      }
      else
      {
          echo " <b> <font color='green'>Successfully... </b>You have enroll the course </font>";
      }

    ?>
</body>
</html>
