<?php 


session_start();



session_unset('username');

$_SESSION['usermatch'] = $_SESSION['usermatch'];
$_SESSION['username'] = 'Guest';

// session_destroy();


header('location:index.php');



 ?>

<!--  <script type="text/javascript">
 	


 </script> -->