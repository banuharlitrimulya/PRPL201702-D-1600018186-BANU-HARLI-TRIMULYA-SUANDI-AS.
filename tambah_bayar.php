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

echo "<a href='tampilservice.php'>Kembali ke Daftar Data</a>";

$No_service = $_GET['No_service'];
$sql = mysqli_query($konek, "SELECT * FROM servicemotor WHERE No_service = '$No_service'");
$show = mysqli_fetch_assoc($sql);
$tampilbrg ="SELECT * FROM tampilbarang where No_service='$No_service'";
$data4 = $konek->query($tampilbrg);
$total_biaya = 0;
while($row4 = $data4->fetch_assoc()){
  $barang = "SELECT * FROM sparepart WHERE Idbarang = '$row4[Idbarang]'";
  $harga = mysqli_query($konek, $barang);
  while ($baris = mysqli_fetch_assoc($harga)){
    $total_biaya = $total_biaya + $baris['Hargabarang'];
		}
	}
if(isset($_POST['Bayar'])){
	
    $total_biaya = $_POST['Total'];
    $bayar = $_POST['Bayar1'];
    $hasil = $bayar-$total_biaya;
	$update = mysqli_query($konek, "UPDATE 'servicemotor' SET 'status'='selesai' WHERE No_service='$_POST[No_service]'");
}
?>
<html>
<head>
    <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
    <title>PEMBAYARAN</title></head>
<br><br>
<body>
    <form action="#" method="POST">
                <h2>PEMBAYARAN SERVICE</h2>
            
	           <label for="No_service">No service : </label>
                <input type="text" name="No_service" value="<?=$show['No_service'];?>" readonly id="No_service"><br><br>
          
            <label for="Total">Total : </label>
            <input type="text" name="Total" value="<?=$total_biaya;?>" readonly id="total"><br><br>
 
                    
           <label for="Bayar">PEMBAYARAN : </label>
           <input type="text" name="Bayar1" id="Bayar"><br><br>
           
           <input type="submit" name="Bayar" value="BAYAR">
           
    </form>
    <?php
    if(isset($_POST['Bayar'])){
          $status = 'Lunas';
          $sqlbayar = mysqli_query($konek, "UPDATE 'service' SET Status = 'Status' WHERE 'No_service' = '$_POST[No_service]'");

    ?>
    <div class="card col-sm-4">
        <div class="card-body">
               <label>Uang Yang Di bayarkan</label>
            
               Rp. <?=$bayar;?></div>
         <div class="card-body">
               <label>Kembalian</label>
               Rp. <?=$hasil;?></div>
            </div><br>
            <input  type="submit" value="Save"><br></br>
    <?php
}

    ?>
</body>
</html>
