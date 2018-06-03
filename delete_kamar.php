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

$idkamar = $_GET['idkamar'];

$sql = "DELETE FROM kamar WHERE idkamar='$idkamar'";
if($konek->query($sql)){
  echo "Data kamar BERHASIL dihapus!<br/>";
}else{
  echo "Data kamar GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_kamar.php'>Daftar Kamar</a>";
?>

</body>
</html>