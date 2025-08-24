                              <?php /* Testing Variables in Real World */ ?>
<?php $username = "Abdallah"?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Page| <?php echo "$username"?> </title>
</head>
<body>
  <div>Welcome , <?php echo "$username"?></div>
  <div> <?php echo "$username"?>, You Scored 1000 Points</div>

  <!-- in this div we will link it with page is called 12link and get some info from that page-->
  <div>
    <?php include('12link.php') ?>
  </div>
  
</body>
</html>


