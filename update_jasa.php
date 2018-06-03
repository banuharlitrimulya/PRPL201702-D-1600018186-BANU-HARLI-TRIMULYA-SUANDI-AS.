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


$nama = $_GET['nama'];

$user = mysqli_query($konek, " SELECT * FROM jasa where nama='$nama'");
$row = mysqli_fetch_array($user);
?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="tester.css">
    <meta charset="utf-8">
    <title>Data Jasa</title>
  </head>
  <body>
    <a href="tester.php">Kembali Ke Menu</a>
    <h1>Edit Data Jasa Lainnya</h1>
    <form action="simpan_jasa.php" method="post">
      <td><input type="hidden" name="nama" value="<?php echo $row['nama'];?>"/></td>
      <table>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><input type="text" disabled  value="<?php echo $row['nama'];?>"/></td>
        </tr>
        <tr>
          <td>Harga</td>
          <td>:</td>
          <td><input type="text" name="harga" value="<?php echo $row['harga'];?>"></td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>

      </table>
    </form>
  </body>
</html>
