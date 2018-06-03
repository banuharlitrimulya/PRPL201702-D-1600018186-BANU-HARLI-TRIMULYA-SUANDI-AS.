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
$nopesan = $_POST['nopesan'];
$nik = $_POST['nik'];
$idkamar = $_POST['idkamar'];
$idjenis = $_POST['idjenis'];


echo "<a href='tester.php'>Kembali ke Menu</a><br>";
echo "<a href='tambah_pesan.php'>Tambah Data Pesan</a><br>";

$sql = "INSERT INTO pesan (nopesan, nik, idkamar, idjenis) VALUES ('$nopesan', '$nik', '$idkamar', '$idjenis')";

if($konek->query($sql)){
  echo "Sukses menambahkan data pesan!<br/>";
}else{
  echo "Gagal menambahkan data pesan, NO PESAN yang anda inputkan sudah TERPESAN<br/>";
}

$konek->close();
?>
