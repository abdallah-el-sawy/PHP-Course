<?php

// first of all we need to start the session
// so we can use this information

session_start();

echo "Hello " . $_SESSION['Name'] . ", " . "Your Id Is: " . $_SESSION['Id'];
?>