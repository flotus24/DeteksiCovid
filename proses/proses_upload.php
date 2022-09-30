<?php
	include 'koneksi.php';//koneksi ke database

	if(isset($_POST['upload'])){
		date_default_timezone_get("Asia/Jakarta");
		$tgl = date("d-m-Y");
		//mengambil informasi dari file yang di upload
		$tmp_file = $_FILES['fupload']['tmp_name'];
		$nm_file = $_FILES['fupload']['name'];
		$ukuran_file = $_FILES['fupload']['size'];
		$desc = $_POST['desc'];

		$size = 10000000;//limit ukuran file 10 MB
	}

	if($ukuran_file > $size){
		echo "<strong>Gagal upload!</strong><br>Ukuran Maksimal <strong>100 MB</strong>, saat ini ukuran file <strong>".$ukuran_file."</strong>";
		echo "<a href='../form_upload.php'><br/>Upload ulang</a>";
		exit();
	}else{
		if($nm_file){
			//alamat direktori yang digunakan untuk menyimpan hasil upload
			$dir = "../file/$nm_file";
			move_uploaded_file($tmp_file, $dir);

			$sql = "INSERT INTO t_file(nama_file, deskripsi, tanggal) VALUES ('$nm_file','$desc', '$tgl')";
			$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

			echo "Upload Berhasil!";
			echo "<br>";
			echo "<a href='../upload.php'>Upload ulang</a>";
			echo "<br>";
			echo "<a href='../index.php'>Kembali ke halaman utama</a>";
		}else{
			echo "Gagal upload!";
			echo "<br>";
			echo "<a href='../index.php'>Upload ulang</a>";
		}
	}
?>