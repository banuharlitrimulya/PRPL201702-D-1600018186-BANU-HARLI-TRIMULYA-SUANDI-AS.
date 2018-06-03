<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
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

$id = $_POST ['id'];
$nama = $_POST ['nama'];
$username = $_POST ['username'];
$password = $_POST ['password'];

$sql = "INSERT INTO user(id, nama, username, password) VALUES ('$id','$nama','$username','$password')";
if($konek->query($sql)){
	echo "Data User Berhasil Di tambah! <br/>";
}
else{
	echo "Data User Gagal Di Tambah : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href = 'tester.php'>Kembali ke Menu <a/>";
?>

</body>
</html>