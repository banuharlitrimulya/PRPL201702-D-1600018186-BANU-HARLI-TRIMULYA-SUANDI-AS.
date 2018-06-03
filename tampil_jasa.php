<!DOCTYPE html>
<html>
<head>
  <title>Tampil Jasa</title>
  <link rel="stylesheet" type="text/css" href="tester.css"></li>
</head>
<body>
  <center>
  <a href='dashboard.php'>Kembali Ke Menu</a>
  <h1 align="center">Daftar Data Jasa Lainnya</h1>
  <form action='search_jasa.php' method='post'>
  <div>
  <input type='search' id='mySearch' name='nama'>
  <button>Search</button>
  </div>
  </form>
  <table border='1'>
    <tr><td>No.</td>
      <td>Nama</td>
      <td>Harga</td>
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

$sql = "SELECT * FROM jasa";
$data = $konek->query($sql);

if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['nama']."</td>";
    echo "<td>".$row['harga']."</td>";
    echo "<td><a href='update_jasa.php?nama=".$row['nama']."'>Edit</a></td>";
    echo "<td><a href='delete_jasa.php?nama=".$row['nama']."'>Delete</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

echo"<br>";
$e = $konek->query("SELECT COUNT(*) AS jumlah FROM jasa");
$f = $e->fetch_assoc();
echo "Jumlah Data : ".$f['jumlah']."";

$konek->close();
?>

</body>
</html>