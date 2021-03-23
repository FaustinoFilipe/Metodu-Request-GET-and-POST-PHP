<!DOCTYPE html>
<html>
<head>
	<title>Metodu POST</title>
</head>
<!--metodu post signifika haruka dadus liu husi layar kotuk ita labele hare, kontrariu ho get nebe haruka liu husi url ita bele hare-->
<body>
<!--cek buton submit klik ona ga lae-->
<?php if(isset($_POST["submit"])): ?>

<h1>WELCOME Mr. <?= $_POST["naran"]; ?></h1>

<?php endif; ?>

	<form action="" method="post">
		Input Naran : 
		<input type="text" name="naran">
		<br>
		<button type="submit" name="submit">Send</button>
	</form>

</body>
</html>