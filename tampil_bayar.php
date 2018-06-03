<!DOCTYPE html>
<html>
<head>
  <title>Pembayaran</title>
</head>
<body>
  <center>
  <a href='dashboard.php'>Kembali ke Menu</a>
  <h1>Daftar Data Pembayaran</h1>

  <form action='search_pesan.php' method='post'>
  <div>
  <input type='search' id='mySearch' name='nopesan'>
  <button>Search</button>
  </div>
  </form>
  <table border='1'>
  <tr><td>No.</td>
      <td>Nomor Pesan</td>
      <td>Nomor KTP</td>
      <td>Nama</td>
      <td>ID Kamar</td>
      <td>Nama Kamar</td>
      <td>Harga Kamar</td>
      <td>ID Jenis</td>
      <td>Fasilitas</td>
      <td>ID Inap</td>
      <td>Jumlah Hari</td>
      <td>Total Harga</td>
      <td colspan=2>Action</td>
  </tr>
  </center>
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

$sql = "SELECT * FROM pesan";
$data = $konek->query($sql);


if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    
    //* : untuk memilih semua atribut yang ada di table kendaraan
    //where :ketika no polisi ditable service sama dengan no polisi di table kendaraan 
    $kamar ="SELECT * FROM kamar where idkamar='$row[idkamar]'"; 
    $data1 = $konek->query($kendaraan); 
    $row1 = $data1->fetch_assoc();

    $reservasi ="SELECT * FROM reservasi where nik='$row[nik]'";
    $data2 = $konek->query($pemilik);
    $row2 = $data2->fetch_assoc();

    $inap ="SELECT * FROM inap where idinap='$row[idinap]'";
    $data3 = $konek->query($sparepart);
    $row3 = $data3->fetch_assoc();


    $jenis ="SELECT * FROM jenis where idjenis='$row[idjenis]'";
    $data4 = $konek->query($tampilbarang);
    $data5 = $konek->query($tampilbarang);


    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['No_service']."</td>";
    echo "<td>".$row['No_ktp']."</td>";
    echo "<td>".$row2['Nama']."</td>";
    echo "<td>".$row['No_polisi']."</td>";
    echo "<td>".$row1['Jenis_kendaraan']."</td>";
    echo "<td>".$row['Tanggal_masuk']."</td>";
    echo "<td>".$row['Tanggal_keluar']."</td>";
    echo "<td>".$row['Jenis_service']."</td>";
   
    echo "<td>";
    while($row4 = $data4->fetch_assoc()){

      $barang ="SELECT * FROM sparepart where Idbarang ='$row4[Idbarang]'";
      $harga = mysqli_query($konek, $barang);
      while ($baris = mysqli_fetch_assoc($harga)){
        echo $baris['Namabarang'].",";
      }
      
    }
echo "</td>";
echo "<td>";
$total_biaya = 0;
while($row4 = $data5->fetch_assoc()){
  $barang = "SELECT * FROM sparepart WHERE Idbarang = '$row4[Idbarang]'";
  $harga = mysqli_query($konek, $barang);
  while ($baris = mysqli_fetch_assoc($harga)){
    $total_biaya = $total_biaya + $baris['Hargabarang'];
  }
}

echo "Rp.".$total_biaya;
echo "</td>";
echo "<td>".$row['status']."</td>";
echo "<td><a href='deleteservice.php?No_service=".$row['No_service']."'>Delete</a></td>
    <td><a href='tampilbarang.php?No_service=$row[No_service]'>Tambah Barang</a></td>
    <td><a href='formbayar.php?No_service=".$row['No_service']."'>Bayar</a></td>";
    

echo "</tr>";
     
 }
}else{
  echo "Data Kosong!";
}
echo "</table>";

echo"<br>";
$e = $konek->query("SELECT COUNT(*) AS jumlah FROM pesan");
$f = $e->fetch_assoc();
echo "Jumlah Data : ".$f['jumlah']."";

$konek->close();
?>

</body>
</html>
