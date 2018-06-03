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


$id = $_GET['id'];

$user = mysqli_query($konek, " SELECT * FROM user where id='$id'");
$row = mysqli_fetch_array($user);
?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="tester.css">
    <meta charset="utf-8">
    <title>Data Admin</title>
  </head>
  <body>
    <a href="tester.php">Kembali Ke Menu</a>
    <h1>Edit Data Admin</h1>
    <form action="simpan_admin.php" method="post">
      <td><input type="hidden" name="id" value="<?php echo $row['id'];?>"/></td>
      <table>
        <tr>
          <td>ID</td>
          <td>:</td>

          <td><input type="text" disabled  value="<?php echo $row['id'];?>"/></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><input type="text" name="nama" value="<?php echo $row['nama'];?>"></td>
        </tr>
        <tr>
          <td>Username</td>
          <td>:</td>
          <td><input type="text" name="username" value="<?php echo $row['username'];?>"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td>:</td>
          <td><input type="text" name="password" value="<?php echo $row['password'];?>"></td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>

      </table>
    </form>
  </body>
</html>
