<!DOCTYPE html>
<html>
<head>
  <title>Tampil Produk</title>
  <link rel="stylesheet" type="text/css" href="tester.css"></li>
</head>
<body>
  <center>
  <a href='dashboard.php'>Kembali Ke Menu</a>
  <h1 align="center">Daftar Data Makanan dan Minuman</h1>
  <form action='search_produk.php' method='post'>
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

$sql = "SELECT * FROM produk";
$data = $konek->query($sql);

if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['nama']."</td>";
    echo "<td>".$row['harga']."</td>";
    echo "<td><a href='update_produk.php?nama=".$row['nama']."'>Edit</a></td>";
    echo "<td><a href='delete_produk.php?nama=".$row['nama']."'>Delete</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

echo"<br>";
$e = $konek->query("SELECT COUNT(*) AS jumlah FROM produk");
$f = $e->fetch_assoc();
echo "Jumlah Data : ".$f['jumlah']."";

$konek->close();
?>

</body>
</html>