<!DOCTYPE html>
<html>
<head>
	<title>Jenis</title>
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

$idjenis = $_POST ['idjenis'];
$fasilitas = $_POST ['fasilitas'];
$hargakamar = $_POST ['hargakamar'];

$sql = "INSERT INTO jenis(idjenis, fasilitas, hargakamar) VALUES ('$idjenis','$fasilitas','$hargakamar')";
if($konek->query($sql)){
	echo "Data Jenis Berhasil Di tambah! <br/>";
}
else{
	echo "Data Jenis Gagal Di Tambah : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href = 'tester.php'>Kembali ke Menu <a/>";
?>

</body>
</html>