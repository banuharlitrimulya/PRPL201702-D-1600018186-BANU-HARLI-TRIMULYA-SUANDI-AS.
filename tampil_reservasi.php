
<!DOCTYPE html>
<html>
<head>
  <title>Tampil Reservasi</title>
  <link rel="stylesheet" type="text/css" href="tester.css"></li>
</head>
<body>
  <center>
  <a href='dashboard.php'>kembali ke Menu</a>
  <h1 align="center">Daftar Customer</h1>
  <form action='search_reservasi.php' method='post'>
  <div>
  <input type='search' id='mySearch' name='nik'>
  <button>Search</button>
  </div>
  </form>
  <table border='1'>
    <tr><td>No.</td>
      <td>Nomor KTP</td>
      <td>Nama</td>
      <td>Phone</td>
      <td>Email</td>
      <td>Cek In</td>
      <td>Cek Out</td>
      <td>Durasi</td>
      <td>Kamar</td>
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

$sql = "SELECT * FROM reservasi";
$data = $konek->query($sql);


$sql = "SELECT * from reservasi inner join jenis on idjenis=kamar order by cekout asc";
          $data = $konek->query($sql);
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['nik']."</td>";
    echo "<td>".$row['nama']."</td>";
    echo "<td>".$row['phone']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['cekin']."</td>";
    echo "<td>".$row['cekout']."</td>";
    echo "<td>".$row['durasi']."</td>";
    echo "<td>".$row['kamar']."</td>";
    echo "<td><a href='update_reservasi.php?nik=".$row['nik']."'>Edit</a></td>";
    echo "<td><a href='delete_reservasi.php?nik=".$row['nik']."'>Delete</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

echo"<br>";
$e = $konek->query("SELECT COUNT(*) AS jumlah FROM reservasi");
$f = $e->fetch_assoc();
echo "Jumlah Data : ".$f['jumlah']."";

$konek->close();
?>

<div id="piechart"></div>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Januari', 2],
          ['Februari', 2],
          ['Maret', 1],
          ['April', 1],
          ['Mei', 0]
        ]);

          // Optional; add a title and set the width and height of the chart
          var options = {'title':'Monthly Visitor Data', 'width':550, 'height':400};

          // Display the chart inside the <div> element with id="piechart"
          var chart = new google.visualization.PieChart(document.getElementById('piechart'));
          chart.draw(data, options);
        }
        </script>

</body>
</html>