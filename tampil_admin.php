
<!DOCTYPE html>
<html>
<head>
  <title>Tampil User</title>
  <link rel="stylesheet" type="text/css" href="tester.css"></li>
</head>
<body>
  <center>
  <a href='dashboard.php'>Kembali ke Menu</a>
  <h1 align="center">Daftar User</h1>
  <form action='search_admin.php' method='post'>
  <div>
  <input type='search' id='mySearch' name='id'>
  <button>Search</button>
  </div>
  </form>
  <table border='1'>
    <tr><td>No.</td>
      <td>ID</td>
      <td>Nama</td>
      <td>Usename</td>
      <td>Password</td>
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

$sql = "SELECT * FROM user";
$data = $konek->query($sql);

if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['nama']."</td>";
    echo "<td>".$row['username']."</td>";
    echo "<td>".$row['password']."</td>";
    echo "<td><a href='update_admin.php?id=".$row['id']."'>Edit</a></td>";
    echo "<td><a href='delete_admin.php?id=".$row['id']."'>Delete</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

echo"<br>";
$e = $konek->query("SELECT COUNT(*) AS jumlah FROM user");
$f = $e->fetch_assoc();
echo "Jumlah Data : ".$f['jumlah']."";

$konek->close();
?>

</body>
</html>