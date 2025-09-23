<?php

session_start();
session_unset();
session_destroy();
header("Location: " . "06.php")

/*

session_unset() → removes all session variables, but the session itself (ID and file) still exists.

session_destroy() → destroys the whole session (removes session data from the server), but doesn’t unset the variables in your script unless you do it manually.

-- Often you use both together: first session_unset(), then session_destroy().

-- i used header here to return back to my page after the logout

*/

?>