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
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$idjenis = $_POST['idjenis'];
$kamar = $_POST['kamar'];
$No_polisi = $_POST['No_polisi'];
$Jenis_kendaraan = $_POST['Jenis_kendaraan'];
$Tanggal_masuk = $_POST['Tanggal_masuk'];
$Tanggal_keluar = $_POST['Tanggal_keluar'];
$Jenis_service = $_POST['Jenis_service'];

$sql = "UPDATE service SET No_ktp='$No_ktp', Nama='$Nama', Idbarang='$Idbarang', Namabarang='$Namabarang', No_polisi='$No_polisi', Jenis_kendaraan='$Jenis_kendaraan', Tanggal_masuk='$Tanggal_masuk', Tanggal_keluar='$Tanggal_keluar', Jenis_service='$Jenis_service' WHERE No_service='$No_service'";
if($konek->query($sql)){
  echo "Data Service BERHASIL diedit!<br/>";
}else{
  echo "Data Service GAGAL diedit : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampilservice.php'> Daftar Data Service </a>";
?>