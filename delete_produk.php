<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
	<link rel="stylesheet" type="text/css" href="tester.css"></link>
</head>
<body>
<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "tester";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$nama = $_GET['nama'];

$sql = "DELETE FROM produk WHERE nama='$nama'";
if($konek->query($sql)){
  echo "Data Produk BERHASIL dihapus!<br/>";
}else{
  echo "Data Produk GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_produk.php'>Daftar Produk</a>";
?>

</body>
</html>