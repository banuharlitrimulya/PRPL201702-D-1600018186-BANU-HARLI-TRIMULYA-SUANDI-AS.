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
$nama = $_POST['nama'];
$cekin = $_POST['cekin'];
$cekout = $_POST['cekout'];

$idkamar = $_POST['idkamar'];
$kamar = $_POST['kamar'];
$jmlhari = $_POST['jmlhari'];

$idjenis = $_POST['idjenis'];
$fasilitas = $_POST['fasilitas'];
$hargakamar = $_POST['hargakamar'];

$totalharga = $_POST['totalharga'];

$sql = "UPDATE service SET nopesan='$nopesan', nik='$nik', nama='$nama', cekin='$cekin', cekout='$cekout', idkamar='$idkamar', kamar='$kamar', jmlhari='$jmlhari', idjenis='$idjenis', fasilitas='$fasilitas',hargakamar='$hargakamar',  totalharga='$totalharga' WHERE nopesan='$nopesan'";
if($konek->query($sql)){
  echo "Data Pesan BERHASIL diedit!<br/>";
}else{
  echo "Data Pesan GAGAL diedit : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_pesan.php'> Daftar Data Pesan </a>";
?>