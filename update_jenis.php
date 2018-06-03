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

$idjenis = $_GET['idjenis'];

$jenis = mysqli_query($konek, " SELECT * FROM jenis where idjenis='$idjenis'");
$row = mysqli_fetch_array($jenis);
?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="tester.css">
    <meta charset="utf-8">
    <title>Data Jenis</title>
  </head>
  <body>
    <a href="tester.php">Kembali Ke Menu</a>
    <h1>Edit Data Jenis</h1>
    <form action="update_jenis.php" method="post">
      <td><input type="hidden" name="idjenis" value="<?php echo $row['idjenis'];?>"/></td>
      <table>
        <tr>
          <td>ID Jenis</td>
          <td>:</td>
          <td><input type="text" disabled  value="<?php echo $row['idjenis'];?>"/></td>
        </tr>
        <tr>
          <td>Fasilitas</td>
          <td>:</td>
          <td><input type="text" name="fasilitas" value="<?php echo $row['fasilitas'];?>"></td>
        </tr>
        <tr>
          <td>Harga</td>
          <td>:</td>
          <td><input type="text" name="hargakamar"  value="<?php echo $row['hargakamar'];?>"/></td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>

      </table>
    </form>
  </body>
</html>
