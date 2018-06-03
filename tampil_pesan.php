<!DOCTYPE html>
<html>
<head>
    <title>Tampil Pesan</title>
</head>
<body>
    <center>
    <a href='dashboard.php'>Kembali ke Menu</a>
    <h1>Daftar Data Pesan</h1>
    <form action='search_pesan.php' method='post'>
    <div>
    <input type='search' id='mySearch' name='nopesan'>
    <button>Search</button>
    </div>
   
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

    echo "<table border='1'>";
    echo "<tr>
            <td>No.</td>
            <td>No Pesan</td>

            <td>Nomor KTP</td>
            <td>Nama</td>
            <td>Cek In</td>
            <td>Cek Out</td>

            <td>Id Kamar</td>
            <td>Nama Kamar</td>
            <td>Jumlah Hari</td>

            
            <td>Id Jenis</td>
            <td>Fasilitas</td>
            <td>Harga Kamar</td>

            <td>Total Harga</td>
            <td>Status</td>
            <td colspan=3>Action</td>
        </tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    
 
    $reservasi ="SELECT * FROM reservasi where nik='$row[nik]'";
    $data1 = $konek->query($reservasi);
    $row1 = $data1->fetch_assoc();

    $kamar ="SELECT * FROM kamar where idkamar='$row[idkamar]'"; 
    $data2 = $konek->query($kamar); 
    $row2 = $data2->fetch_assoc();

    $jenis ="SELECT * FROM jenis where idjenis='$row[idjenis]'";
    $data3 = $konek->query($jenis);
    $row3 = $data3->fetch_assoc();


    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['nopesan']."</td>";

    echo "<td>".$row['nik']."</td>";
    echo "<td>".$row1['nama']."</td>";
    echo "<td>".$row1['cekin']."</td>";
    echo "<td>".$row1['cekout']."</td>";

    echo "<td>".$row['idkamar']."</td>";
    echo "<td>".$row2['kamar']."</td>";
    echo "<td>".$row2['jmlhari']."</td>";

    echo "<td>".$row['idjenis']."</td>";
    echo "<td>".$row3['fasilitas']."</td>";
    echo "<td>".$row3['hargakamar']."</td>";    
  
      
    }
echo "<td>";
$total_biaya = 0;
while($row2 = $data2->fetch_assoc()){
  $kamar = "SELECT * FROM kamar WHERE idkamar = '$row2[idkamar]'";
  $harga = mysqli_query($konek, $kamar);
  while ($baris = mysqli_fetch_assoc($harga)){
    $total_biaya = $total_biaya + $baris['hargakamar'];
  }
}

echo "Rp.".$total_biaya;
echo "</td>";
echo "<td>".$row['status']."</td>";
echo "<td><a href='delete_pesan.php?nopesan=".$row['nopesan']."'>Delete</a></td>
    <td><a href='formbayar.php?nopesan=".$row['nopesan']."'>Bayar</a></td>";
    

echo "</tr>";
     
 }
else{
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
