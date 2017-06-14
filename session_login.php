<?php 
session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<p>Please Login</p>

<form action="session_home.php" method="POST">
	Username:<br>
		<input type="text" name="username"><br>
	Password:<br>
		<input type="password" name="password"><br><br>		
		<input type="submit" name="Submit"><br><br>
		
</form>

<form action='logout.php' method="POST">

	<button>logout</button>

</form>

<?php 

echo "Hi, " . $_SESSION["user"] . "! What's on your mind today?";

 ?>

</body>
</html>