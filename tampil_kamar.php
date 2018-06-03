
<!DOCTYPE html>
<html>
<head>
  <title>Tampil Kamar</title>
  <link rel="stylesheet" type="text/css" href="tester.css"></li>
</head>
<body>
  <center>
  <a href='dashboard.php'>Kembali Ke Menu</a>
  <h1 align="center">Daftar Data Kamar</h1>
  <form action='search_kamar.php' method='post'>
  <div>
  <input type='search' id='mySearch' name='idkamar'>
  <button>Search</button>
  </div>
  </form>
  <table border='1'>
    <tr><td>No.</td>
      <td>ID Kamar</td>
      <td>ID Jenis</td>
      <td>Nomor KTP</td>
      <td>Kamar</td>
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

$sql = "SELECT * FROM kamar";
$data = $konek->query($sql);

if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['idkamar']."</td>";
    echo "<td>".$row['idjenis']."</td>";
    echo "<td>".$row['nik']."</td>";
    echo "<td>".$row['kamar']."</td>";
    echo "<td><a href='update_kamar.php?idkamar=".$row['idkamar']."'>Edit</a></td>";
    echo "<td><a href='delete_kamar.php?idkamar=".$row['idkamar']."'>Delete</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

echo"<br>";
$e = $konek->query("SELECT COUNT(*) AS jumlah FROM kamar");
$f = $e->fetch_assoc();
echo "Jumlah Data : ".$f['jumlah']."";

$konek->close();
?>

</body>
</html>