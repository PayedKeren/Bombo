<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Markah Pelajar</title>
</head>
<style type="text/css">
	h2 {
		text-align: center;
		padding-top: 20px;
	}
	body {
		background-color: #4C7F9E;
	}

</style>
<body>
	<center>
		<h2>Borang Penambahan Rekod Pelajar</h2>

		<table border="0" cellpadding="5" cellspacing="1" bgcolor="white" style="
		padding: 20px; border-top: 1px solid black; border-left: 2px solid black; border-right: 2px solid black; border-bottom: 1px solid black; border-radius: 10px;">

		<form action="Pros_Kemaskini.php" method="post">

			<tr>
				<td>Nama Pelajar</td><td>:</td><td> <input type="text" name="nama_pelajar" required>
					<br><br></td>
			</tr>

			<tr>
				<td>Markah Teori</td><td>:</td><td> <input type="text" name="markah_teori" required>
					<br><br></td>
			</tr>

			<tr>
				<td>Gred Teori</td><td>:</td><td> <input type="text" name="gred_teori" required>
					<br><br></td>
			</tr>

			<tr>
				<td>Markah Amali</td><td>:</td><td> <input type="text" name="markah_amali" required>
					<br><br></td>
			</tr>

			<tr>
				<td>Gred Amali</td><td>:</td><td> <input type="text" name="gred_amali" required>
					<br><br></td>
			</tr>

			<tr>
				<td colspan="3">
					<center><input type="Submit" name="hantar" name="Hantar"><br></center>
				</td>
			</tr>
	</center>

</body>

<?php

	session_start();
	$_SESSION['angka_giliran'] = $_GET['angka_giliran']

?>

</html>