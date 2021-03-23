<?php
//metodu $_GET & $_POST ==== array associative
// meodu $_GET haruka dadus liu husi url
$_GET["nama"] = "Faustino Filipe";
$_GET["nre"] ="20190204050";

var_dump($_GET);
echo "<br><br>";
//array multi dimensaun tamba array iha array nia laran
$mahasiswa =[
	[
	"naran"=>"Faustino",
	"nre"=>"20190204050",
	"departamen"=>"Informatica",
	"email"=>"faustinofilipe6@gmail.com"],
	[
	"naran"=>"Joao",
	"nre"=>"20190204051",
	"departamen"=>"Civil",
	"email"=>"joao123@gmail.com"], 
];

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Metodu GET</title>
 </head>
 <body>
 	<h1>Daftar Mahasiswa</h1>
<ul>
 	<?php foreach ($mahasiswa as $mhs) ://$mahasiswa bele dehan plural no $mhs singular ?>
 		<li>
 <a href="pratik2.php?naran=<?= $mhs["naran"]; ?>&nre=<?= $mhs["nre"]; ?>&departamen=<?= $mhs["departamen"]; ?>&email=<?= $mhs["email"]; ?>"><?=$mhs["naran"]; ?></a>
 		</li>

 	<?php endforeach; ?>
 </ul>
 </body>
 </html>