<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}



		body {
			width: 100%;
			min-height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			background: #111932;
			flex-direction: column;
		}


		form {
			width: 40%;
			margin: auto;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
		}


		input {
			width: 100%;
			margin: 30px auto;
			padding: 10px 40px;
			border: none;
			border-radius: 50px;
			border: 4px solid skyblue;
		}


		button {
			padding: 10px 40px;
			background: white;
			border: none;
			border: 3px solid skyblue;
			border-radius: 300px;
		}



		h1 {
			color: white;
		}


	</style>
</head>
<body>
	<?php  

		$i = 14;
		$brother = 11;
		$dad = 39;


		function ok($i,$brother,$dad) {
			return $i + $brother + $dad;
		}

		echo '<h1>Function: '.ok($i,$brother,$dad) . '</h1> <br /> <br /> <br /> <br />';
		// echo '<h1>Not Function: '.$i + $brother + $dad.'</h1>';






		




	?>
</body>
</html>