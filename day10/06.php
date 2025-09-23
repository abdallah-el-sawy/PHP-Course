<?php

/*
    -- Sessions
    --- Unset And Destroy
    --- Login And Logout Simulation
*/

session_start();

if($_SERVER["REQUEST_METHOD"] === "POST"){
  if($_POST['user'] === "Abdallah"){

    $_SESSION['username'] = "Abdallah";
    $_SESSION['ID'] = "7510";
  }
}

if(isset($_SESSION['username'])){
  echo "Hello " . $_SESSION['username'] . ", Your ID: " . $_SESSION['ID'] . "<br>";
  echo "<a href= " . "logout.php" . ">Logout</a>" . "<br>";
}
else{



?>

<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Login">
</form>

<?php }?>
<!-- Here what i did making the form in false condition
    so if the user loged the login form disappear
-->