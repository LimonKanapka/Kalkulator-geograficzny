<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>geolokalizajca</title>

</head>
<body>
	<h1>obliczanie odległości pomiędzy 2 geolokalizacjami</h1>
	<h2>długości i szerokości geograficzne podawaj w stopniach</h2>
	<form action="./" method="post">
		<input type="number" step="0.00001" placeholder="podaj długość 1:" id="dlugosc1" name="dlugosc1"><br>
		<input type="number" step="0.00001" placeholder="podaj szerokosc 1:" id="szerokosc1" name="szerokosc1"><br>
		<input type="number" step="0.00001" placeholder="podaj długość 2:" id="dlugosc2" name="dlugosc2"><br>
		<input type="number" step="0.00001" placeholder="podaj szerokosc 2:" id="szerokosc2" name="szerokosc2"><br>
		<input type="submit" name="submit">
	</form>
	
</body>
</html>
<?php

$rz = 6371;
$d1 = $_POST['dlugosc1'];
$s1 = $_POST['szerokosc1'];
$d2 = $_POST['dlugosc2'];
$s2 = $_POST['szerokosc2'];
echo "Długość 1 wynosi: " , $d1 , "<br>";
echo "Szerokość 1 wynosi: " , $s1 , "<br>";
echo "Długość 2 wynosi: " , $d2 , "<br>";
echo "Szerokość 2 wynosi: " , $s2 , "<br>";

$Ra = abs($d1 - $d2);
$Rb = abs($s1 - $s2);

echo "kąt alfa wynosi: " , $Ra , "<br>";
echo "kąt beta wynosi: " , $Rb , "<br>";

$Rra = deg2rad($Ra);
$Rrb = deg2rad($Rb);

echo "cosinus alfa: " , cos($Rra) , "<br>";
echo "cosinus beta: " , cos($Rrb) , "<br>";

$Rrc = acos(cos($Rra) * cos($Rrb));

$Rc = rad2deg($Rrc);

echo "kąt tylda wynosi: " , $Rc , "<br>";

$dystans = ($Rc / 360) * 2 * pi() * $rz;

echo "odległość pomiędzy 2 geolokalizacjami wynosi: " , $dystans , " km<br>";

?>
