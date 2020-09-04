<!DOCTYPE html>
<html>
<head>
	<title>Class Animal</title>
</head>
<body>
	<?php
		require_once('animal.php');
		require_once('frog.php');
		require_once('ape.php');

		$sheep = new Animal("shaun");

		//release 0
		echo $sheep->name . "<br>"; // "shaun"
		echo $sheep->legs . "<br>"; // 2
		echo $sheep->cold_blooded . "<br>"; // false
		echo "<br>";

		//release 1
		$sungokong = new Ape("kera sakti");
		$sungokong->yell(); // "Auooo"
		//echo $sungokong->name . "<br>";
		//echo $sungokong->legs . "<br>";
		echo "<br>";

		$kodok = new Frog("buduk");
		$kodok->jump() ; // "hop hop"
		//echo $kodok->name . "<br>";
		//echo $kodok->legs . "<br>";
		echo "<br>";
	?>
</body>
</html>