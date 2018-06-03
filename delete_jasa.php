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

$sql = "DELETE FROM jasa WHERE nama='$nama'";
if($konek->query($sql)){
  echo "Data Jasa BERHASIL dihapus!<br/>";
}else{
  echo "Data Jasa GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_jasa.php'>Daftar Jasa</a>";
?>

</body>
</html>