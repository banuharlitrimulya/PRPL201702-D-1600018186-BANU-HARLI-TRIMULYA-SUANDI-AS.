<!DOCTYPE html>
<html>
<head>
	<title>Reservasi</title>
	<link rel="stylesheet" type="text/css" href="tester.css">
</head>
<body>

<?php 
//membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$idb_name = "tester";

$konek = new mysqli($host, $username, $password, $idb_name);

//cek koneksi
if($konek->connect_error){
	die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$tgl_cekin = date_create($_POST['cekin']);
$tgl_cekout = date_create($_POST['cekout']);
$durasi = date_diff($tgl_cekin,$tgl_cekout)->format('%a');

$nik = $_POST ['nik'];
$nama = $_POST ['nama'];
$phone = $_POST ['phone'];
$email = $_POST ['email'];
$cekin = $_POST ['cekin'];
$cekout = $_POST ['cekout'];
$kamar = $_POST ['kamar'];

$sql = "INSERT INTO reservasi(nik, nama, phone, email, cekin, cekout, durasi, kamar ) VALUES ('$nik','$nama','$phone','$email', '$cekin', '$cekout','$durasi', '$kamar')";
if($konek->query($sql)){
	echo "Data Customer Berhasil Di tambah! <br/>";
}
else{
	echo "Data Customer Gagal Di Tambah : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href = 'tester.php'>Kembali ke Menu <a/>";
?>

</body>
</html>