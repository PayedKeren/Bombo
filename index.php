<?php
//UNTUK PANGGIL FAIL
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Markah Pelajar</title>
</head>
<body>
	<center>
		<h2>SENARAI MARKAH PENILAIAN BERTERUSAN KOHORT 2019</h2>
		<br>
		<table border="1" cellpadding ="5" cellspacing="0" bgcolor="white">
			<tr>
			<th>Bil</th>
			<th>Angka Giliran</th>
			<th>Nama pelajar</th>
			<th>Markah Teori</th>
			<th>Gred Teori</th>
			<th>Markah Amali</th>
			<th>Gred Amali</th>
			<th>Tindakan</th>
		</tr>

		<?php
		$bil = 1;
		$papar=mysqli_query($connect, "SELECT * FROM markah_pelajar");
		while ($row=mysqli_fetch_array($papar)) {
			echo "
			<tr>
			<td>".$bil."</td>
			<td>".$row['angka_giliran']."</td>
			<td>".$row['nama_pelajar']."</td>
			<td>".$row['markah_teori']."</td>
			<td>".$row['gred_teori']."</td>
			<td>".$row['markah_amali']."</td>
			<td>".$row['gred_amali']."</td>
			<td>","<a href=\"kemaskini.php?angka_giliran=".$row['angka_giliran']."
			          \" Onclick=\" return confirm('Rekod ini akan dikemaskini')\">
			          kemaskini</td>
			</tr>

			";
		++$bil;

		}

		?>
		</table>

      <p>
		<a href="tambah.php"><button name="Tambah" type="submit">Tambah Rekod Baharu</button>
		</a></p>
	</center>

</body>
</html>