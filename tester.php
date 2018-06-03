<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="tester.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .background {
  position: relative;
  max-width: 100%;
  max-height: 600px;
  margin: 0 auto;
  background-repeat: no-repeat;
}

.background img {vertical-align: middle;}

.background .content {
  position: absolute;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5); /* Black background with transparency */
  color: #f1f1f1;
  width: 97%;
  padding: 20px;
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="tester.php" class="active">Home</a>
  <a href="about.php">About</a>
  <a href="galeri.php">Galeri</a>
  <a href="dashboard.php">Dashboard</a>
  <!-- <div class="dropdown">
    <button class="dropbtn">Data Master 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="tambah_admin.php">Tambah Data Hak Akses</a>
      <a href="tambah_jenis.php">Tambah Data Jenis</a>
      <a href="tambah_kamar.php">Tambah Data Kamar</a>
      <a href="tambah_pesan.php">Tambah Data Pesan</a>
      <a href="tambah_produk.php">Makanan & Minuman</a>
      <a href="tambah_jasa.php">Jasa Lainnya</a>
    </div>
  </div>  -->
  <!-- <div class="dropdown">
    <button class="dropbtn">Laporan 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="tampil_admin.php">Tampil Data Hak Akses</a>
      <a href="tampil_jenis.php">Tampil Data Jenis</a>
      <a href="tampil_kamar.php">Tampil Data Kamar</a>

      <a href="tampil_pesan.php">Tampil Data Pesan</a>
      <a href="tampil_produk.php">Makanan & Minuman</a>
      <a href="tampil_jasa.php">Jasa Lainnya</a>
    </div>
  </div> -->
  <a href="tambah_reservasi.php">Reservasi</a>
  <a href="transaksi.php">Transaksi</a>
  <a href="kontak.php">Kontak</a>
  <a href="admin/logout.php">Logout</a>
  
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div class="background">
  <img src="image/dubai.jpg" alt="dubai" style="width:100%; height: 665px;">
  <div class="content">
    <CENTER>
    <h1>Welcome To Golden Palace Hotel WAKANDA</h1>
    <p>A BRAND NEW CERTIFIED 5 STAR GOLDEN PALACE HOTEL IN WAKANDA</p>
  </CENTER>
  </div>
</div>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

</body>
</html>
