<?php require_once 'top.php'; ?>

<!DOCTYPE html>
<html>
<head>

	<link href="bootstrap.min.css" rel="stylesheet">

	<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="hotchix.css">


	<title><?php get_title();?></title>

	<!-- This is the Navigation Bar -->
	<?php require_once 'partials/navbar.php'; ?>

</head>


<body>

	<?php display_content(); ?>

</body>
</html>