<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tabel Tugas Pak Kadek</title>
</head>

<body>
	<header>
	</header>

	<nav>
		<a href="form-tambah.php">[+] Tambah Baru</a>
	</nav>

	<br>

	<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Usia</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>

		<?php
		$sql = "SELECT * FROM tbl_tugas";
		$query = mysqli_query($db, $sql);
		$urut= 1;

		while($tugas = mysqli_fetch_array($query)){
			echo "<tr>";

			echo "<td>".$urut++."</td>";
			echo "<td>".$tugas['nama']."</td>";
			echo "<td>".$tugas['alamat']."</td>";
			echo "<td>".$tugas['usia']." tahun"."</td>";

			echo "<td>";
			echo "<a href='form-edit.php?no=".$tugas['no']."'>Edit</a> | ";
			echo "<a href='delete.php?no=".$tugas['no']."'>Hapus</a>";
			echo "</td>";

			echo "</tr>";
		}
		?>

	</tbody>
	</table>

	</body>
</html>
