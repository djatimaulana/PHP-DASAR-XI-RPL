<?php

	//ketika button buat di klick
	if (isset($_POST['buat'])) {
	//nama dari inputan
	$namaKue=$_POST['kue'];
	//membuat Cookie
   setcookie('kue', $namaKue , time() + 3600);

   header("location:cookie.php");
}

	//ketika button hapus di click
	if (isset($_POST['hapus'])) {

	//membuat Cookie
   setcookie('kue', "" , time() - 3600);

   header("location:cookie.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cookie </title>
</head>
<body>
	<h1>Nanti cookie muncul di bawah !</h1>
	<?php if (isset($_COOKIE['kue'])): ?>
		<h4>kue kue apa yang sabar kue<?= $_COOKIE['kue']?></h4>
	<?php endif ?>
	<form method="post" action="">
		<input type="text" name="kue">
		<button type="submit" name="buat">buat</button>
		<button type="submit" name="hapus">hapus</button>
	</form>
</body>
</html>