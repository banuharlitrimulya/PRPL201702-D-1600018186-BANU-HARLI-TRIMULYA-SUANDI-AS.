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

$idjenis = $_GET['idjenis'];

$sql = "DELETE FROM jenis WHERE idjenis='$idjenis'";
if($konek->query($sql)){
  echo "Data Jenis BERHASIL dihapus!<br/>";
}else{
  echo "Data Jenis GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_jenis.php'>Daftar Jenis</a>";
?>

</body>
</html>