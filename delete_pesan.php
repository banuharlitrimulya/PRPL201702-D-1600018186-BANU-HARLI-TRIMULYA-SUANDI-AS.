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

$nopesan = $_GET['nopesan'];

$sql = "DELETE FROM pesan WHERE nopesan='$nopesan'";
if($konek->query($sql)){
  echo "Data Pesan BERHASIL dihapus!<br/>";
}else{
  echo "Data Pesan GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_pesan.php'>Daftar Data Pesan</a>";
?>
