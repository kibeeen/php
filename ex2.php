<!DOCTYPE html>
<html>
<head>
	<title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style>



</style>

</head>
<body>


<?php 

$c = 0;

$names1 = array("Steph Curry", "Kevin Durant", "Draymond Green", "Klay Thompson", "Javalee Mcgee");


$names2 = array("Lebron James", "Kyrie Irving", "Kevin Love", "Tristan Thompson", "Deron Williams");


for ($x = 0; $x <= 1; $x++) {
	echo "<ul>";

	for ($x = 0; $x <= 4; $x++) {
	    echo "<li>Bobo ka ba $names1[$x]? </li>";
	} 

	echo "</ul>";
}

echo "<br><br>";


echo "	<div class='container'>
		<table class='table table-hover'>
		<tr> 
			<th>Goldenstate Wargays</th> 
			<th>Cleveland Cavadings</th>
		</tr>";

    for ($o = 0; $o <= 4; $o++) {
    	echo "<tr>";

    	for ($p = 0; $p <= 0; $p++) {
	    	echo "<td>$names1[$o]</td>";
	    	echo "<td>$names2[$o]</td>";
	    	echo "</tr>";
			}		
}

echo "</div>";
 ?>



<br><br>


<?php 

$string = "the quick brown fox jumps over the lazy dog .";

echo strtoupper($string)."<br>";
echo strtolower($string)."<br>";
echo ucfirst($string)."<br>";
echo ucwords($string)."<br><br>";

$hehe = strpos($string, "brown");

echo substr($string, $hehe);

 ?>
<br><br>
<?php 

$text = "the asddassad brown fox.";


$azar = strpos($text, "brown");

echo substr($text, 0, $azar);

echo  "quick ". substr($text, $azar)




?>


<br><br><br>

<?php 

$a = 4;
$b = 3;

echo "<br>" . 'A + B = ' . ($a + $b);
echo "<br>" . 'A - B = ' . ($a - $b);
echo "<br>" . 'A * B = ' . ($a * $b);
echo "<br>" . 'A / B = ' . number_format(($a / $b),2);
echo "<br>" . 'A % B = ' . ($a % $b);
echo "<br>" . '++B = ' . (++$b);
echo "<br>" . '--A = ' . (--$a);


 ?>

 <br><br><br>

 <?php 

$aa = 4;
$bb = 3;

$cc = 10;

echo "A = " . ((($cc*2)-(($cc-$aa) + ($cc-$bb)))-$aa) . "<br>";
echo "B = " . ((($cc*2)-(($cc-$aa) + ($cc-$bb)))-$bb) . "<br>";


  ?>

  <?php 

  $colors = array(85,90,90,95,100, 80);

  $sum = array_sum($colors);
  echo "<br>";
  $count = count($colors);
  echo "<br>";

  echo number_format(($sum / $count),2);



   ?>
<br><br>

   <?php 
   $aaa = 999; //even
   $bbb = ($aaa % 3);
   $ccc = ($aaa / 3);

  // echo "bbb: " . $bbb . "<br><br>";
  // echo "ccc: " . $ccc;

   if (($bbb == 0) AND ($ccc % 3 == 0)){
   	echo "even multiple of 3" . "<br>";
   } elseif (($bbb == 0) AND ($ccc % 3 != 0)){
   	echo "odd multiple of 3" . "<br>";
   } else {
   	echo "not a multiple of 3" . "<br>";
   }

    ?>
<br>


    <?php 


    // if ($a4 == 1) {
    // 	echo 'Monday';
    // } elseif ($a4 == 2) {
    // 	echo 'Tuesday';
    // } elseif ($a4 == 3) {
    // 	echo 'Wednesday';
    // } elseif ($a4 == 4) {
    // 	echo 'Thursday';
    // } elseif ($a4 == 5){
    // 	echo 'Friday';
    // } elseif ($a4 == 6) {
    // 	echo 'Saturday';
    // } elseif ($a4 == 7) {
    // 	echo 'Sunday';
    // } elseif ($a4 == 0 OR $a4 >= 8) {
    // 	echo '1-7 lang bobo!';
    // }


    $input = 22;
    $days = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');

    // echo $days[$input-1] . "<br><br>";

    if ($input == 0){
    	echo 'wrong input';

    } elseif ($input != 0){

    	echo $days[($input+6)%7];
    }





     ?>


</body>
</html>