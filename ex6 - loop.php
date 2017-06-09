<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
	.salmon {
		background: salmon;
		height: 10px;
		width: 10px;
		float: left;
	}

	.corn {
		background: cornsilk;
		height: 10px;
		width: 10px;
		float: left;
	}

	.clear {

		display: block;
		content: '';
		clear: both;
	}

	</style>
</head>
<body>



<input type="text" id="input">
<button id="loop">loop</button>
<div id='greet'></div>

<script type="text/javascript">
	
document.getElementById('loop').onclick = function(){

	var input = parseInt(document.getElementById('input').value);

	for (x = 0; x < input; x++){

		for (y = 1; y < input; y++){

			if ((x+y) % 2 == 0) {

			document.getElementById('greet').innerHTML += 
			'<div class="salmon"></div>';
			} 

			else {
			document.getElementById('greet').innerHTML += 
			'<div class="corn"></div>';
			} 

		} document.getElementById('greet').innerHTML += '<div class="clear"></div>';

	}




}







</script>


</body>
</html>