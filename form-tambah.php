<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
	<header>
		<h3>Formulir Pendaftaran Siswa Baru</h3>
	</header>

	<form action="proses-tambah.php" method="POST">

		<fieldset>

		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="isikan nama lengkap" />
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat" placeholder="isikan alamat"></textarea>
		</p>
		<p>
			<label for="alamat">Usia: </label>
			<input type="text" name="usia" placeholder="isikan usia" />
		</p>
		<p>
			<input type="submit" value="tambah" name="tambah" />
		</p>

		</fieldset>

	</form>

	</body>
</html>
