<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['no']) ){
	header('Location: index.php');
}

//ambil id dari query string
$no = $_GET['no'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM tbl_tugas WHERE no=$no";
$query = mysqli_query($db, $sql);
$tugas = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Tugas Pak Kadek</title>
</head>

<body>
	<header>
		<h3>Formulir Edit Data</h3>
	</header>

	<form action="proses-edit.php" method="POST">

		<fieldset>

			<input type="hidden" name="no" value="<?php echo $tugas['no'] ?>" />

		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $tugas['nama'] ?>" />
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"><?php echo $tugas['alamat'] ?></textarea>
		</p>
		<p>
			<label for="usia">Usia: </label>
			<input type="text" name="usia" placeholder="Usia" value="<?php echo $tugas['usia'] ?>" />
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>

		</fieldset>


	</form>

	</body>
</html>
