<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php echo "Hello World!"; ?>

<br><br>

<?php 
	echo "Today is ". date("1") . ". ";
?>

Here's the latest news.

<br><br>

<?php

	$name = 'Kevin';
	echo "Hello $name";
	echo "<br>";
	echo 'Hello $name';

	?>

	<br><br>



<?php

	echo 'Buzz Lightyear once said: "You\'re a toy!"';

	?>

	<br><br>

<?php

	define("ROOT_LOCATION", "/usr/local/www");

	?>


	<?php 


		$bank_balance = 101;

		if ($bank_balance < 100) {
			$money = 1000;
			$bank_balance += $money;
			echo $bank_balance;
		}
		else {
			$savings += 50;
			$bank_balance -= 50;
			echo $bank_balance;
		}

	 ?>

<br><br>
	 <?php 

	 	$a = "1000";
	 	$b = "+1000";
	 	if ($a == $b) echo "1";
	 	if ($a === $b) echo "2";


	  ?>

<br><br>

	  <?php 

	  	if(true or fals)
 {
 	echo "true";
	 
 } else {
 	echo "false";


 } 

   ?>

</body>
</html>

