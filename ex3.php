<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

$count = 1;
while ($count <= 12) {
	echo "$count times 12 is " . $count * 12 . "<br>";
	++$count;
}

 ?>

 <br><br>

 <?php 

$count = 13;

do 
{
	echo "$count times 12 is " . $count * 12 . "<br>";
	$count++;
} while ($count <= 12);

?>
  <br><br>


<?php 

$input = 1;

$days = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');

do {

	echo $input . " - " . $days[($input+6)%7] . "<br>";
	$input++;

} while ($input <= 28)
 ?>

<br><br>


 <?php 


 for ($count1 = 1; $count < 12; $count++) {

 	 echo $count1 . " squared is " . $count1 * $count1 . "<br>";
 }

  ?>

  <br><br>

 <?php 

$count2 = 1;

while ($count2 <= 50){



	if ($count2 <=15) {

	echo "<mark>$count2.</mark> $count2 x 2 = " . ($count2 * 2) . "<br>";
	$count2++;

	} elseif ($count2 >=16 && $count2 <= 35){

		echo "<mark>$count2.</mark> (30 - $count2) / 2 = " . ((30 - $count2) / 2) . "<br>";
		$count2++;

	} elseif ($count2 >= 36 && $count2 <= 50){

		echo "<mark>$count2.</mark> $count2 + 6 = " . ($count2 + 6) . "<br>";
		$count2++;
	}

}

  ?>

  <br><br>

  <?php 

  $count3 = 6;
  $answer = 1;

  while ($count3 >= 1) {

  	$answer = $count3 * $answer;
  	$count3--;

  	
  	
  } echo $answer . "<br>";

  ?>

  <br><br>

  <?php 

  $input1 = 100;

  for ($i = 0; $i <= 0; $i++){

  	$input1 = (($input1 / 2) * (($input1 / 2) + 1));
  	echo $input1;

  }

   ?>

     <br><br>

<?php 

$string1 = "the quick brown fox.";
$num = strlen($string1);


for ($a = 0; $a < $num; $a++){

	if ($a % 2 == 0) {

		echo strtolower($string1[$a]);


	} elseif ($a % 2 != 0) {
		echo strtoupper($string1[$a]);



	}};
   ?>


   <br><br>

   <?php 

$word = "the quick brown fox.";
$vowel = array("a","e","i","o","u");
$counter = 0;

for ($b = 0; $b < strlen($word); $b++){

	for ($c = 0; $c < 5; $c++) {

		if ($vowel[$c] == $word[$b]){

			$counter += 1;
			
			} else {
				$counter += 0;
			}
		}

} echo $counter;
   ?>

</body>
</html>

