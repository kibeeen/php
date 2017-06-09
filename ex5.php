<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<input type="text" id="input1">
<button id="check">Check</button>
<h3 id='greet'></h3>
<h3 id='tries'></h3>



<script type="text/javascript">

var number = Math.floor((Math.random() * 100) + 1);
var counter = 3;
alert(number);
document.getElementById('tries').innerHTML = 'You have ' + counter + ' tries left';

	document.getElementById('check').onclick = function(){
		counter--;

		var input1 = parseInt(document.getElementById('input1').value);
		
		

		if (input1 > number) 
			document.getElementById('greet').innerHTML = 'Lower teh!!';
		else if (input1 < number)
			document.getElementById('greet').innerHTML = 'Higher kuya will!';
		else
			document.getElementById('greet').innerHTML = 'BIGYAN NG JACKET!!!';


		if (counter == 0 && input1 == number) {
			document.getElementById('greet').innerHTML = 'YOU GOT IT!!';
			document.getElementById('tries').innerHTML = 'BUZZER BEATER!!!';
			document.getElementById('check').disabled = true;
			document.getElementById('input1').disabled = true;
		} else if (counter == 0){
			document.getElementById('greet').innerHTML = 'GAME OVER MOTHERFUCKER!';
			document.getElementById('check').disabled = true;
			document.getElementById('input1').disabled = true;
		}

		document.getElementById('tries').innerHTML = 'You have ' + counter + ' tries left';
		
	}

	document.getElementById('subtract').onclick = function(){

		var input1 = document.getElementById('input1').value;
		var input2 = document.getElementById('input2').value;

		document.getElementById('greet').innerHTML =
		'Difference is ' + (parseInt(input1) - parseInt(input2));
	}



</script>





</body>
</html>