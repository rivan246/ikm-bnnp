<?php

//panggil koneksi database
include "koneksi.php";

//tampilkan data tikm
$tampil = mysqli_query($koneksi, "SELECT * from ikm limit 1");
$data = mysqli_fetch_array($tampil);
//tampung data ke dalam variabel
$id_ikm = $data['id_ikm'];
$puas = $data['puas'];
$cukup = $data['cukup'];
$kurang = $data['kurang'];


//ambil nilai keterangan
$keterangan = $_GET['ket'];

//uji jika keterangan tidak kosong
if(isset($keterangan)){
	//uji jika keterangan = simpan
	if($keterangan == "puas")
	{
		//nilai puas di tambah 1
		$puas = $puas + 1;
		//query update nilai puas dalam tabel tikm
		$query = "UPDATE ikm SET puas= '$puas' where id_ikm = '$id_ikm' ";
		mysqli_query($koneksi, $query);
		echo "<script>alert('Terima kasih, anda berhasil memberikan penilaian.');document.location='index.php'</script>";
	}
	elseif($keterangan == "cukup")
	{
		//nilai cukup di tambah 1
		$cukup = $cukup + 1;
		//query update nilai cukup dalam tabel tikm
		$query = "UPDATE ikm SET cukup= '$cukup' where id_ikm = '$id_ikm' ";
		mysqli_query($koneksi, $query);
		echo "<script>alert('Terima kasih, anda berhasil memberikan penilaian.');document.location='index.php'</script>";
	}
	elseif($keterangan == "kurang")
	{
		//nilai kurang di tambah 1
		$kurang = $kurang + 1;
		//query update nilai kurang dalam tabel tikm
		$query = "UPDATE ikm SET kurang= '$kurang' where id_ikm = '$id_ikm' ";
		mysqli_query($koneksi, $query);
		echo "<script>alert('Terima kasih, anda berhasil memberikan penilaian.');document.location='index.php'</script>";
	}
	elseif($keterangan == "reset")
	{
		//reset
		
		$query = "UPDATE ikm SET `puas` = '0', `cukup` = '0', `kurang` = '0' where id_ikm = '$id_ikm' ";
		mysqli_query($koneksi, $query);
		echo "<script>alert('Jumlah Suara Telah Di Reset!!');document.location='loginadmin/logout.php'</script>";
		
	}

	//update data sesuai query
	
}



?>