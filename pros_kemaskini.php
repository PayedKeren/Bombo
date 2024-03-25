<?php
	include('config.php');
	if (isset($_POST ['hantar']));
	session_start();

	{
		$angkagiliran = $_SESSION['angka_giliran'];
		$nama_pelajar=$_POST["nama_pelajar"];
		$markah_teori=$_POST["markah_teori"];
		$gred_teori=$_POST["gred_teori"];
		$markah_amali=$_POST["markah_amali"];
		$gred_amali=$_POST["gred_amali"];


		$add=mysqli_query($connect, "UPDATE `markah_pelajar` SET `nama_pelajar`='$nama_pelajar',`markah_teori`='$markah_teori',`gred_teori`='$gred_teori',`markah_amali`='$markah_amali',`gred_amali`='$gred_amali' WHERE angka_giliran = '$angkagiliran'");
		header('Location:index.php');
	}
?>
