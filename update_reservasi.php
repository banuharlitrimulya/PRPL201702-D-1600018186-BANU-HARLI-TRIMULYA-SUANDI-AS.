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

$nik = $_GET['nik'];

$reservation = mysqli_query($konek, " SELECT * FROM reservasi where nik='$nik'");
$row = mysqli_fetch_array($reservation);
?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="tester.css">
    <meta charset="utf-8">
    <title>Data Customer</title>
  </head>
  <body>
    <a href="tester.php">Kembali Ke Menu</a>
    <h1>Edit Data Customer</h1>
    <form action="update_reservasi.php" method="post">
      <td><input type="hidden" name="nik" value="<?php echo $row['nik'];?>"/></td>
      <table>
        <tr>
          <td>Nomor KTP</td>
          <td>:</td>

          <td><input type="text" disabled  value="<?php echo $row['nik'];?>"/></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><input type="text" name="nama" value="<?php echo $row['nama'];?>"></td>
        </tr>
		  <tr>
          <td>Phone</td>
          <td>:</td>
          <td><input type="text" name="phone" value="<?php echo $row['phone'];?>"></td>
        </tr>
		  <tr>
          <td>Email</td>
          <td>:</td>
          <td><input type="text" name="email" value="<?php echo $row['email'];?>"></td>
        </tr>
        <tr>
          <td>Cek In</td>
          <td>:</td>
          <td><input type="text" name="cekin" value="<?php echo $row['cekin'];?>"></td>
        </tr>
        <tr>
          <td>Cek Out</td>
          <td>:</td>
          <td><input type="text" name="cekout" value="<?php echo $row['cekout'];?>"></td>
        </tr>
        <tr>
          <td>Durasi</td>
          <td>:</td>
          <td><input type="text" name="durasi" value="<?php echo $row['durasi'];?>"></td>
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
