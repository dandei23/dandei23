<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

	// ambil data dari formulir
	$no = $_POST['no'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$usia = $_POST['usia'];


	// buat query update
	$sql = "UPDATE tbl_tugas SET nama='$nama', alamat='$alamat', usia='$usia' WHERE no=$no";
	$query = mysqli_query($db, $sql);

	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: index.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}


} else {
	die("Akses dilarang...");
}

?>
