<!DOCTYPE html>
<html>
<head>
	<title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Short+Stack' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Pangolin' rel='stylesheet' type='text/css'>
<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">

<style>
body {
	background-image: url('http://etc.usf.edu/presentations/backgrounds/grid/grid_03/1207m.gif');
}

.wrapper {
	margin-top: 60px;
	text-align: center;
}

h3 {
	font-family: Short Stack;
	font-size: 35px;
}

h3 + input {
	text-align: center;
	height: 50px;
	width: 200px;
	border-radius: 5px;
	border: 2px solid salmon;
}

.btn {
	padding: 5px 20px;
	font-family: 'Short Stack';
}

.names {
	font-family: 'Gochi Hand';
	font-size: 50px;
	letter-spacing: 2px;
}

.and {
	font-family: 'Gochi Hand';
	font-size: 20px;
	letter-spacing: 2px;
	padding: 15px;
}

.flames {

	font-family: 'Gochi Hand';
	font-size: 50px;
	letter-spacing: 2px;
	color: salmon;
}

.em {
	font-size: 17.5px;
}


</style>

<!--Hearts below, made by dazieh, tutorial at easy-html-tutorials-->
<script>if(typeof jQuery=='undefined'){document.write('<'+'script');document.write(' language="javascript"');document.write(' type="text/javascript"');document.write(' src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">');document.write('</'+'script'+'>')}</script><script>if(!image_urls){var image_urls=Array()}if(!flash_urls){var flash_urls=Array()}image_urls['rain1']="http://www.picgifs.com/mini-graphics/mini-graphics/hearts/mini-graphics-hearts-655853.gif";image_urls['rain2']="http://www.picgifs.com/mini-graphics/mini-graphics/hearts/mini-graphics-hearts-655853.gif";image_urls['rain3']="http://www.picgifs.com/mini-graphics/mini-graphics/hearts/mini-graphics-hearts-655853.gif";image_urls['rain4']="http://www.picgifs.com/mini-graphics/mini-graphics/hearts/mini-graphics-hearts-655853.gif";$(document).ready(function(){var c=$(window).width();var d=$(window).height();var e=function(a,b){return Math.round(a+(Math.random()*(b-a)))};var f=function(a){setTimeout(function(){a.css({left:e(0,c)+'px',top:'-30px',display:'block',opacity:'0.'+e(10,100)}).animate({top:(d-10)+'px'},e(7500,8000),function(){$(this).fadeOut('slow',function(){f(a)})})},e(1,8000))};$('<div></div>').attr('id','rainDiv')
.css({position:'fixed',width:(c-20)+'px',height:'1px',left:'0px',top:'-5px',display:'block'}).appendTo('body');for(var i=1;i<=20;i++){var g=$('<img/>').attr('src',image_urls['rain'+e(1,4)])
.css({position:'absolute',left:e(0,c)+'px',top:'-30px',display:'block',opacity:'0.'+e(10,100),'margin-left':0}).addClass('rainDrop').appendTo('#rainDiv');f(g);g=null};var h=0;var j=0;$(window).resize(function(){c=$(window).width();d=$(window).height()})});</script>
<script>if(typeof jQuery=='undefined'){document.write('<'+'script');document.write(' language="javascript"');document.write(' type="text/javascript"');document.write(' src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">');document.write('</'+'script'+'>')}</script>
<!--Hearts above, made by dazieh, tutorial at easy-html-tutorials-->

</head>



<body>


<div class='container'>

	<div class='wrapper'>

		<form action="" method="POST">
			<h3>Your Name :</h3>
				<input type="text" name="name1" placeholder="Name 1"><br><br>
			<h3>His / Her Name :</h3>
				<input type="text" name="name2" placeholder="Name 2"><br><br>
				<input class='btn btn-danger' type="submit" name="submit" value="show me"><br><br>
				
		</form>



<?php 

if(isset($_POST['submit'])){
	$name1 = $_POST['name1'];
	$name2 = $_POST['name2'];

	$flames = ['Friends',
			   'Libog lang <i class="em em-banana"></i><i class="em em-sweat_drops"></i>',
			   'Anger!',
			   'Marriage',
			   'Enemy! <i class="em em-no_good"></i><i class="em em-rage"></i>',
			   'Soulmates'];

	require_once 'flames_ex.php';

	$total_count = check_match($name1,$name2) + check_match($name2,$name1);



	echo "<br>The Relationship between<br>";

	echo "<br>";
	echo "<span class='names'>" . ucwords($name1);
	echo "</span> <span class='and'>&</span> " . "<span class='names'>" . ucwords($name2) . "</span><br>";
	echo "is<br><br>";


	if ($total_count != 0){
	    echo "<span class='flames'>" . $flames[($total_count+5)%6] . "</span>";
    } else {
    	echo "<span class='flames'> Go fuck yourself! </span>";
    }


}


 ?>

 	</div>
	
</div>



</body>
</html>