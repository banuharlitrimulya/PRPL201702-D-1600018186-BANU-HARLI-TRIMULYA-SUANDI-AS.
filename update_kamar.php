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


$idkamar = $_GET['idkamar'];

$kamar = mysqli_query($konek, " SELECT * FROM kamar where idkamar='$idkamar'");
$row = mysqli_fetch_array($kamar);
?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="tester.css">
    <meta charset="utf-8">
    <title>Data Kamar</title>
  </head>
  <body>
    <a href="tester.php">Kembali Ke Menu</a>
    <h1>Edit Data Kamar</h1>
    <form action="update_kamar.php" method="post">
      <td><input type="hidden" name="idkamar" value="<?php echo $row['idkamar'];?>"/></td>
      <table>
        <tr>
          <td>ID Kamar</td>
          <td>:</td>
          <td><input type="text" disabled  value="<?php echo $row['idkamar'];?>"/></td>
        </tr>
        <tr>
          <td>ID Jenis</td>
          <td>:</td>
          <td><input type="text" disabled  value="<?php echo $row['idkamar'];?>"/></td>
        </tr>
        <tr>
          <td>Nomor KTP</td>
          <td>:</td>
          <td><input type="text" name="nik" value="<?php echo $row['nik'];?>"></td>
        </tr>
        <tr>
          <td>Kamar</td>
          <td>:</td>
          <td><input type="text" name="kamar" value="<?php echo $row['kamar'];?>"></td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>

      </table>
    </form>
  </body>
</html>
