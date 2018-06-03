<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <!--  -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="Chart.bundle.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
  <style type="text/css">

  </style>
  <!-- Filter -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
  <style>
   body
   {
    margin:0;
    padding:0;
    background-color:#f1f1f1;
   }
   .box
   {
    width:1270px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:25px;
   }
   .container {
      width: 100%;
      height: 100%;
      margin: 15px auto;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <a href="#"><img src="logo.png" width="50px" height="50px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Admin</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="tambah_admin.php">Tambah Data Hak Akses</a></p>
     <!--  <p><a href="tambah_jenis.php">Tambah Data Jenis</a></p> -->
      <p><a href="tambah_kamar.php">Tambah Data Kamar</a></p>
      <p><a href="tambah_pesan.php">Tambah Data Pesan</a></p>
      <p><a href="tambah_produk.php">Tambah & Minuman</a></p>
      <p><a href="tambah_jasa.php">Tambah Jasa Lainnya</a></p>
      <br><br>
      <p><a href="tampil_admin.php">Tampil Data Hak Akses</a></p>
      <!-- <p><a href="tampil_jenis.php">Tampil Data Jenis</a></p> -->
      <p><a href="tampil_kamar.php">Tampil Data Kamar</a></p>
      <p><a href="tampil_pesan.php">Tampil Data Pesan</a></p>
      <p><a href="tampil_produk.php">Tampil & Minuman</a></p>
      <p><a href="tampil_jasa.php">Jasa Lainnya</a></p>
      <br><br>
      <p><a href="tester.php">Kembali Ke Menu</a></p>
    </div>
  <div class="col-sm-10 text-left"> 
          <!-- <h2>Latest Booking</h2>

          <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for cekin and cekout.." title="Type in a cekin and cekout"> -->
  <div class="container box">
   <h1 align="center">Data Pengunjung</h1>
   <br />
   <div class="table-responsive">
    <br />
    <div class="row">
     <div class="input-daterange">
      <div class="col-md-4">
       <input type="text" name="start_date" id="start_date" class="form-control" />
      </div>
      <div class="col-md-4">
       <input type="text" name="end_date" id="end_date" class="form-control" />
      </div>      
     </div>
     <div class="col-md-4">
      <input type="button" name="search" id="search" value="Search" class="btn btn-info" />
     </div>
    </div>
    <br />
    <table id="order_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Nomor KTP</th>
       <th>Nama</th>
       <th>Nomor HP</th>
       <th>Email</th>
       <th>Cek In</th>
       <th>Cek Out</th>
       <th>Durasi</th>
       <th>Kamar</th>
      </tr>
     </thead>
    </table>
    
   </div>
  </div>

    <!-- Grafik -->
     <div class="container">
      <canvas id="myChart" width="23" height="10"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni"],
                    datasets: [{
                            label: '# of Votes',
                            data: [12, 19, 3, 5, 2, 3],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>

          <script>
          function myFunction() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
              td = tr[i].getElementsByTagName("td")[0];
              if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                  tr[i].style.display = "";
                } else {
                  tr[i].style.display = "none";
                }
              }       
            }
          }
          </script>
          
      <!-- <hr>
      <h3>Test</h3>
      <p>Lorem ipsum...</p> -->
  </div>
    <!-- <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div> -->
  </div>
</div>

<footer class="container-fluid text-center">
  <p>&copy;2018 Banu Harli Trimulya Suandi As. 1600018186. Teknik Informatika.-Universitas Ahmad Dahlan</p>
</footer>
</body>
</html>

<!-- js filter -->
<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 
 $('.input-daterange').datepicker({
  todayBtn:'linked',
  format: "yyyy-mm-dd",
  autoclose: true
 });

 fetch_data('no');

 function fetch_data(is_date_search, start_date='', end_date='')
 {
  var dataTable = $('#order_data').DataTable({
   "processing" : true,
   "serverSide" : true,
   "order" : [],
   "ajax" : {
    url:"fetch.php",
    type:"POST",
    data:{
     is_date_search:is_date_search, start_date:start_date, end_date:end_date
    }
   }
  });
 }

 $('#search').click(function(){
  var start_date = $('#start_date').val();
  var end_date = $('#end_date').val();
  if(start_date != '' && end_date !='')
  {
   $('#order_data').DataTable().destroy();
   fetch_data('yes', start_date, end_date);
  }
  else
  {
   alert("Both Date is Required");
  }
 }); 
 
});
</script>
