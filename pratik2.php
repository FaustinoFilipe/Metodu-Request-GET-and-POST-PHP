<?php 
//cek dadus la laos husi $_GET
//isset signifika halo tiha ona ou lae
if(!isset($_GET["naran"]) ||
 !isset($_GET["nre"]) ||
 !isset($_GET["departamen"]) ||
 !isset($_GET["email"])
){
	//redirect
	header("Location: metodGET.php");
	exit;
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Mahasiswa</title>
</head>
<body>
	<h1>Detail Mahasiswa</h1>
	<ul>
		<li><?= $_GET["naran"]; ?></li>
		<li><?= $_GET["nre"]; ?></li>
		<li><?= $_GET["departamen"]; ?></li>
		<li><?= $_GET["email"]; ?></li>
	</ul>
<a href="metodGET.php">Back To Home</a>
</body>
</html>