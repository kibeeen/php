<!DOCTYPE html>
<html>
<head>
	<title></title>


	<style>

	.correct {
		color: #32CD32;
	}

	.wrong {
		color: red;
	}


	</style>
</head>
<body>

<h3 id="question"></h3>
<input type="text" id="input">
<button id="submit">submit</button> 



<script type="text/javascript">


var correct_ans = ['copper','mars','portugese','carbon','krypton'];
var questions = ['The first metal used by the man was',
				 'Who was the Greek or Roman God of War?',
				 'What is the official language of Brazil?',
				 'What chemical element is diamond made of?',
				 'Which planet did Superman come from?'];

var user_ans = [];	

var a = 0;
var score = 0;

document.getElementById('question').innerHTML = questions[a];



document.getElementById('submit').onclick = function(){

	var input = (document.getElementById('input').value).toLowerCase();

		if (input == correct_ans[a]) {
			score += 1;
			user_ans[a] = input; // record user input
			a++;
			document.getElementById('question').innerHTML = questions[a];
			document.getElementById('input').value = ""; // clears text

		} 

		else if (input != correct_ans[a]) {
			score += 0;
			user_ans[a] = input; // record user input
			a++;
			document.getElementById('question').innerHTML = questions[a];
			document.getElementById('input').value = ""; // clears text
		} 


		if (a == 5) {
			document.getElementById('question').innerHTML = 'Number of correct answers: ' + score  + "<br><br>";
			document.getElementById('submit').disabled = true;
			document.getElementById('input').disabled = true;

			for (i = 0; i < 5; i++){

				if (user_ans[i] == correct_ans[i]) {
					document.getElementById('question').innerHTML += questions[i] + ": Your Answer: <span class='correct'>" + user_ans[i] + " ✓ " + "</span><br>";
				} else {
					document.getElementById('question').innerHTML += questions[i] + ": Your Answer: <span class='wrong'>" + user_ans[i] + " ✕ " + "</span>The correct answer is <span class='correct'>" + correct_ans[i] + "</span><br>";
				}
			} 

		} 







}





</script>

</body>
</html>