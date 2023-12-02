<!DOCTYPE html>
<html>
<head>
<title>Pendidikan Web Dasar</title>
</head>
<body>

<h1>Operasi Aritmatika</h1>
<p>Input Dinamis</p>
<form action="index.php" method="POST">
	Input 1: <input type="number" name="num1"><br>
	Input 2: <input type="number" name="num2"><br>
	<input type="submit" name="calculate" value="result">
</form>

<?php
	$num1 =  $_POST["num1"];
	$num2 = $_POST["num2"] || 0;

	echo "<h2>Operasi Atritmatika</h2>";
	echo "Input <strong> ".$num1." dan ".$num2."</strong>";

	if (!$num1 && !$num2) {
		echo "Kalimat tidak boleh Kosong";
		return;
	}

	// tambah
	$num1_tambah =  $_POST["num1"];
	$num2_tambah = $_POST["num2"];
	$tambah = $num1_tambah + $num2_tambah;

	// kurang
	$num1_kurang =  $_POST["num1"];
	$num2_kurang = $_POST["num2"];
	$kurang = $num1_kurang - $num2_kurang;

	// kali
	$num1_kali =  $_POST["num1"];
	$num2_kali = $_POST["num2"];
	$kali = $num1_kali * $num2_kali;

	// bagi
	$num1_bagi =  $_POST["num1"];
	$num2_bagi = $_POST["num2"];
	$bagi = $num1_bagi / $num2_bagi;

	// Mod
	$num1_mod =  $_POST["num1"];
	$num2_mod = $_POST["num2"];
	$mod = $num1_mod % $num2_mod;

	echo "<li>Perjumlahan (+) = <strong>".$tambah."</strong>";
	echo "<li>Pengurangan (-) = <strong>".$kurang."</strong>";
	echo "<li>Perkalian (*) = <strong>".$kali."</strong>";
	echo "<li>Pembagian (/) = <strong>".$bagi."</strong>";
	echo "<li>Mod (%) = <strong>".$mod."</strong>";
?>
</body>
</html>