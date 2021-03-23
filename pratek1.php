<?php 
//variabel scope/lingkup variabel
$x =30;

function tampilX(){
	global $x;
	
	echo $x;
}
tampilX();
echo "<br><br>";

//cek naran server

echo $_SERVER["SERVER_NAME"];

