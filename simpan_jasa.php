<!DOCTYPE html>
<html>
<head>
	<title>Jasa</title>
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

$nama = $_POST ['nama'];
$harga = $_POST ['harga'];

$sql = "INSERT INTO jasa(nama, harga) VALUES ('$nama','$harga')";
if($konek->query($sql)){
	echo "Data Jasa Berhasil Di tambah! <br/>";
}
else{
	echo "Data Jasa Gagal Di Tambah : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href = 'tester.php'>Kembali ke Menu <a/>";
?>

</body>
</html>