<?php 
//cek karik buton sumbit klik ona ga sedauk
if(isset($_POST["submit"])){
	//cek username & password
	if($_POST["username"]=="admin" && $_POST["password"]=="1234"){
	//karik loos mak, redirect ba halaman adminhome
		header("Location: admhome.php");
}else{
	//karik sala, hamosu mensajen error
	$error=true;
}


}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
</head>
<body>
	<h1>Login Admin</h1>

<!--se erro mak hamosu mensajan iha kraik ne-->
	<?php if(isset($error)): ?>
	<p style="color: red; font-style: italic;">Username ka password la loos!</p>
<?php endif; ?>
<!--iha for no id atu deklara katak usename label ho text field iha ligasaun nune mos ho password-->
<!--action mamuk signifika form refere haruka dadus fila fali ba nia an nafatin iha form ida ne-->
<ul>	
	<form action="" method="post">
	<li>
		<label for="username">Username : </label>
		<input type="text" name="username" id="username">
	</li>
	<li>
		<label for="password">Password : </label>
		<input type="password" name="password" id="password">
	</li>
	<li>
		<button type="submit" name="submit">Login</button>
	</li>
	</form>
</ul>
</body>
</html>