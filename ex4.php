<!DOCTYPE html>
<html>
<head>
	<title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



	<style>

	td {
		width: 50px;
		font-size: 20px;
		text-align: center;
		padding: 10px;
	}

	.red {
		background-color: salmon;
	}

	.corn {
		background-color: cornsilk;
	}

	</style>
</head>
<body>


<?php 
$k = 0;

echo "<table>";

for ($i=1; $i <= 5; $i++) { 

	echo "<tr>";	

	for ($j=1; $j <= 5; $j++) { 

		if ($k % 2 == 0){
		echo "<td class='red'>";
		echo ($i * $j);
		echo "</td>";

		} else {
		echo "<td class='corn'>";
		echo ($i * $j);
		echo "</td>";
		}

		$k++;

		}

		
		echo "</tr>";
	}

echo "</table>";

 ?>

 <br><br>

 <?php 

$a = 0;
$b = 1;

for ($d = 0; $d < 15; $d++){

	echo $b . " ";

	$c = $a + $b;
	$a = $b;
	$b = $c;
}
  ?>

<br><br>

 <?php 

$colors = ['red','orange','yellow','green'];

$days = array(
		'January' => 31,
		'February' => 28,
		'April' => 30,
	);
echo $days['April'];

echo "<ul>";
for ($i=0; $i <count($colors) ; $i++) { 
		echo "<li>".$colors[$i]."</li>";
}

echo "</ul>";

  ?>

  <br><br>

<?php 

$records = [
	'Billy' => ['username'=>'asdf','password'=>'qwerty'],
	'PeeJay' => ['username'=>'asdf','password'=>'qwerty']
];

foreach ($records as $kevin => $chavez) {
	echo $kevin . ":<br>";
	foreach ($chavez as $key => $value) {
		echo $key . ": " . $value . "<br>";
	}
	echo "<br>";
} 

 ?>





<div class="container">

<form method="post" action="">
	username: <input type="text" name="username"><br>
	password: <input type="password" name="password"><br>
	<button>Submit</button>


 </div>

<br><br>

 <?php 

if(isset($_POST['username'])){
	echo "hello " . $_POST['username'];
}



 ?>


</body>
</html>