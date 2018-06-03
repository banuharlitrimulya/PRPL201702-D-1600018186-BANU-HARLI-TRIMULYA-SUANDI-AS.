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

$id = $_GET['id'];

$sql = "DELETE FROM user WHERE id='$id'";
if($konek->query($sql)){
  echo "Data User BERHASIL dihapus!<br/>";
}else{
  echo "Data User GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_admin.php'>Daftar Admin</a>";
?>

</body>
</html>