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
		padding: 500px;
	}

	h1 {
		padding: 90px 160px;
		background: yellowgreen;
		color: white;
		font-size: 20px;
		box-shadow: 0 0 80px black;
	}
</style>


<?php  

	$str = 'String;';
	$true = true . ' True';
	$false = false . ' false';
	$num = 776767;
	$float = 1.4;
	$arr = ['ok', 343, 'okk'];

	class foo {
		public function ok() {
			return 'This is OBJECT';
		}
	}

	$obj = new foo();



	$a = null;

	echo '
	<h1>

	'.$str.'
	<br />
	<br />
	<br />
	Integer:
	<br />
	'.$num.'
	<br />
	<br />
	<br />
	Float:
	<br />
	'.$float.'
	<br />
	<br />
	<br />
	Boolean:
	<br />
	'.$true.'
	<br />
	'.$false.'<br /><br /><br />';

	$models = array("Mercedes","BMW","Lamborgini");
	var_dump($models);

	echo "
		<br />
		<br />
		<br />


		Object:
		<br />
		
";

var_dump($obj);



echo "
		<br />
		<br />
		<br />

		Null: 
		<br />
		".$a."
	";


var_dump(null);



	echo '</h1>';


?>