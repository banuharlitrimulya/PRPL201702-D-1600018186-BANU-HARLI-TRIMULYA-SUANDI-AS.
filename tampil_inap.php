
<!DOCTYPE html>
<html>
<head>
  <title>Tampil Inap</title>
  <link rel="stylesheet" type="text/css" href="tester.css"></li>
</head>
<body>
  <center>
  <a href='dashboard.php'>Kembali ke Menu</a>
  <h1 align="center">Daftar Inap</h1>
  <form action='search_inap.php' method='post'>
  <div>
  <input type='search' id='mySearch' name='idinap'>
  <button>Search</button>
  </div>
  </form>
  <table border='1'>
    <tr><td>No.</td>
      <td>ID Inap</td>
      <td>ID Kamar</td>
      <td>Jumlah Hari</td>
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

$sql = "SELECT * FROM inap";
$data = $konek->query($sql);

if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['idinap']."</td>";
    echo "<td>".$row['idkamar']."</td>";
    echo "<td>".$row['jmlhari']."</td>";
    echo "<td><a href='update_inap.php?idinap=".$row['idinap']."'>Edit</a></td>";
    echo "<td><a href='delete_inap.php?idinap=".$row['idinap']."'>Delete</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

echo"<br>";
$e = $konek->query("SELECT COUNT(*) AS jumlah FROM inap");
$f = $e->fetch_assoc();
echo "Jumlah Data : ".$f['jumlah']."";

$konek->close();
?>

</body>
</html>