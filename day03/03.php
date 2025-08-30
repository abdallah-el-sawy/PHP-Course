<?php

/* Control structure : advanced level */
//nested if
if($_SERVER["REQUEST_METHOD"] === "POST")
  {
    if($_POST['lang'] == 'ar')
    {
      header("location: ar.php");
      exit();
    }

    elseif($_POST['lang'] == 'en')
    {
      header("location: en.php");
      exit();
    }
    elseif($_POST['lang'] == 'sp')
    {
      header("location: sp.php");
      exit();
    }
    else
    {
      echo 'Unknown Language';
    }
  }



?>



  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
  </head>
  <body>
      <h1> Support Page</h1>  
      <form action="" method="post">
        <input type="text" name="username" placeholder="Username">
        <select name="lang">
          <option value="ar"> Arabic </option>
          <option value="en"> English </option>
          <option value="sp"> Spanish </option>
        </select>
        <input type="submit" value="send">
      </form>

  </body>
  </html>