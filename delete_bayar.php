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

$No_service = $_GET['No_service'];

$sql = "DELETE FROM servicemotor WHERE No_service='$No_service'";
if($konek->query($sql)){
  echo "Data Service BERHASIL dihapus!<br/>";
}else{
  echo "Data Service GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampilservice.php'>Daftar Data Service</a>";
?>
