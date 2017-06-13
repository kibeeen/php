<?php 

	$counter = 1;
		require_once "partial.php";

?>


<!DOCTYPE html>
<html>
<head>
	<title>12 Days of Christmas</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

<style>
	.wrapper {
		text-align: center;
		width: 100%;
		height: 100%;
		padding: 50px;
	}

	.btn {
		letter-spacing: 2px;
		font-family: Raleway;
		font-weight: bolder;
	}

	#lyrics {
		text-align: left;
	}

/*	#next {
		display: none;
	}*/


</style>
</head>
<body>



<div class='container'>
<div class='wrapper'>


	<h1>12 days of Christmas</h1><br>


	<form method="POST">
		<input id='nextday' class='btn btn-success' type="submit" name="nextday" value="NEXT DAY"><br><br>
		<input type='hidden' name='counter' value="<?php echo $counter; ?>">


		<span id="lyrics"></span>


	</form>









<!--  <script type="text/javascript">
 	
	document.getElementById('start').onclick = function(){
		document.getElementById('lyrics').innerHTML = $days[0][1];
		document.getElementById('next').style.display = block;

	}

 </script> -->


</div>
</div>



</body>
</html>