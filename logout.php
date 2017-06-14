
<?php 

session_start();

// session_unset('password');

session_destroy();

echo $_SESSION["user"] . " logged out successfully. balik ka po ah?";


 ?>