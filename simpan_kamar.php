<!DOCTYPE html>
<html>
<head>
	<title>Kamar</title>
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

$idkamar = $_POST ['idkamar'];
$idjenis = $_POST ['idjenis'];
$nik = $_POST ['nik'];
$kamar = $_POST ['kamar'];

$sql = "INSERT INTO kamar(idkamar,idjenis, nik, kamar) VALUES ('$idkamar','$idjenis','$nik', '$kamar')";
if($konek->query($sql)){
	echo "Data Kamar Berhasil Di tambah! <br/>";
}
else{
	echo "Data Kamar Gagal Di Tambah : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href = 'tester.php'>Kembali ke Menu <a/>";
?>

</body>
</html>