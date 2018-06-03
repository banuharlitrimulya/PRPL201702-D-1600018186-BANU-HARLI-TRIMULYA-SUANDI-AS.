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
$No_service = $_POST['No_service'];
$No_ktp = $_POST['No_ktp'];
$Idbarang = $_POST['Idbarang'];
$No_polisi = $_POST['No_polisi'];
$Tanggal_masuk = $_POST['Tanggal_masuk'];
$Tanggal_keluar = $_POST['Tanggal_keluar'];
$Jenis_service = $_POST['Jenis_service'];


echo "<a href='TPPRPL.html'>Kembali ke Menu</a><br>";
echo "<a href='servicemotor.php'>Tambah Data Service</a><br>";

$sql = "INSERT INTO servicemotor (No_service, No_ktp, Idbarang, No_polisi, Tanggal_masuk, Tanggal_keluar, Jenis_service) VALUES ('$No_service', '$No_ktp', '$Idbarang', '$No_polisi', '$Tanggal_masuk', '$Tanggal_keluar', '$Jenis_service')";

if($konek->query($sql)){
  echo "Sukses menambahkan data service!<br/>";
}else{
  echo "Gagal menambahkan data service, No SERVICE yang anda inputkan sudah TERDAFTAR<br/>";
}

$konek->close();
?>
