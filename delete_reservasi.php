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

$nik = $_GET['nik'];

$sql = "DELETE FROM reservasi WHERE nik='$nik'";
if($konek->query($sql)){
  echo "Data Customer BERHASIL dihapus!<br/>";
}else{
  echo "Data Customer GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_reservasi.php'>Daftar Customer</a>";
?>

</body>
</html>