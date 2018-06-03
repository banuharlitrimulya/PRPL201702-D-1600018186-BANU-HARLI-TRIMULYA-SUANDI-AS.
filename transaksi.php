<!DOCTYPE html>
    <html>
        <head>
            <title>Transaki Pemesanan</title>
           
           
            <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
              <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
              <link rel="stylesheet" href="/resources/demos/style.css">
              <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
              <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
              <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
              <meta http-equiv="X-UA-Compatible" content="IE=edge" />
              <meta name="viewport" content="width=device-width, initial-scale=1" />
              <meta name="google-site-verification" content="snA7C_3rIRtbTcg4ylbz0rNW84SKiKp-ykZbKoUq-jU" />

              <script src="/js/jquery.min.js" type="application/javascript"></script>
                <script src="/js/jquery-ui.min.js" type="application/javascript"></script>
                <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
                <script src="/js/bootstrap.min.js" type="application/javascript"></script>

                <link href="/css/jquery-ui.theme.min.css" rel="stylesheet" type="text/css" />
                <script src="/js/jquery.signature.js" type="application/javascript"></script>
                <link href="/css/jquery.signature.css" rel="stylesheet" type="text/css" />
                <script src="/js/jquery.ui.touch-punch.min.js" type="application/javascript"></script>
              <script>
              $( function() {
                  formCekin = $( "#formCekin" )
                    .datepicker({
                      dateFormat : "yy/mm/dd",
                      defaultDate: "+1w",
                      changeMonth: true,
                      numberOfMonths: 2
                    })
                    .on( "change", function() {
                      formCekout.datepicker( "option", "minDate", getDate( this ) );
                    }),
                  formCekout = $( "#formCekout" ).datepicker({
                    dateFormat : "yy/mm/dd",
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 2
                  })
                  .on( "change", function() {
                    formCekin.datepicker( "option", "maxDate", getDate( this ) );
                  });
             
                function getDate( element ) {
                  var date;
                  try {
                    date = $.datepicker.parseDate( dateFormat, element.value );
                  } catch( error ) {
                    date = null;
                  }
             
                  return date;
                }
              } );
              </script>

            <script>
                //mendeksripsikan variabel yang akan digunakan
                var nota;
                var tanggal;
                var kode;
                var nama;
                var harga;
                var jumlah;
                var stok;
                $(function(){
                    //meload file pk dengan operator ambil barang dimana nantinya
                    //isinya akan masuk di combo box
                    $("#kode").load("pk.php","op=ambilbarang");
                    
                    //meload isi tabel
                    $("#barang").load("pk.php","op=barang");
                    
                    //mengkosongkan input text dengan masing2 id berikut
                    $("#nama").val("");
                    $("#harga").val("");
                    $("#jumlah").val("");
                    $("#stok").val("");
                                
                    //jika ada perubahan di kode barang
                    $("#kode").change(function(){
                        kode=$("#kode").val();
                        
                        //tampilkan status loading dan animasinya
                        $("#status").html("loading. . .");
                        $("#loading").show();
                        
                        //lakukan pengiriman data
                        $.ajax({
                            url:"proses.php",
                            data:"op=ambildata&kode="+kode,
                            cache:false,
                            success:function(msg){
                                data=msg.split("|");
                                
                                //masukan isi data ke masing - masing field
                                $("#nama").val(data[0]);
                                $("#harga").val(data[1]);
                                $("#stok").val(data[3]);
                                $("#jumlah").focus();
                                //hilangkan status animasi dan loading
                                $("#status").html("");
                                $("#loading").hide();
                            }
                        });
                    });
                    
                    //jika tombol tambah di klik
                    $("#tambah").click(function(){
                        kode=$("#kode").val();
                        stok=$("#stok").val();
                        jumlah=$("#jumlah").val();
                        if(kode=="Kode Barang"){
                            alert("Kode Barang Harus diisi");
                            exit();
                        }else if(jumlah > stok){
                            alert("Stok tidak terpenuhi");
                            $("#jumlah").focus();
                            exit();
                        }else if(jumlah < 1){
                            alert("Jumlah beli tidak boleh 0");
                            $("#jumlah").focus();
                            exit();
                        }
                        nama=$("#nama").val();
                        harga=$("#harga").val();
                        
                                                
                        $("#status").html("sedang diproses. . .");
                        $("#loading").show();
                        
                        $.ajax({
                            url:"pk.php",
                            data:"op=tambah&kode="+kode+"&nama="+nama+"&harga="+harga+"&jumlah="+jumlah,
                            cache:false,
                            success:function(msg){
                                if(msg=="sukses"){
                                    $("#status").html("Berhasil disimpan. . .");
                                }else{
                                    $("#status").html("ERROR. . .");
                                }
                                $("#loading").hide();
                                $("#nama").val("");
                                $("#harga").val("");
                                $("#jumlah").val("");
                                $("#stok").val("");
                                $("#kode").load("pk.php","op=ambilbarang");
                                $("#barang").load("pk.php","op=barang");
                            }
                        });
                    });
                    
                    //jika tombol proses diklik
                    $("#proses").click(function(){
                        nota=$("#nota").val();
                        tanggal=$("#tanggal").val();
                        
                        $.ajax({
                            url:"pk.php",
                            data:"op=proses&nota="+nota+"&tanggal="+tanggal,
                            cache:false,
                            success:function(msg){
                                if(msg=='sukses'){
                                    $("#status").html('Transaksi Pembelian berhasil');
                                    alert('Transaksi Berhasil');
                                    exit();
                                }else{
                                    $("#status").html('Transaksi Gagal');
                                    alert('Transaksi Gagal');
                                    exit();
                                }
                                $("#kode").load("pk.php","op=ambilbarang");
                                $("#barang").load("pk.php","op=barang");
                                $("#loading").hide();
                                $("#nama").val("");
                                $("#harga").val("");
                                $("#jumlah").val("");
                                $("#stok").val("");
                            }
                        })
                    })
                });
            </script>
        </head>
        <body>
            <div class="container">
                <?php
                include "db/koneksi.php";
                $p=isset($_GET['act'])?$_GET['act']:null;
                switch($p){
                    default:
                        echo "<table class='table table-bordered'>
                            <tr>
                                <td colspan='3'><a href='?page=penjualan&act=tambah' class='btn btn-primary'>Input Transaksi</a></td>
                            </tr>
                                <tr>
                                    <td>No.Nota</td>
                                    <td>Tanggal</td>
                                    <td>Jumlah</td>
                                    <td>Tools</td>
                                </tr>";
                                $query=mysql_query("select * from penjualan");
                                while($r=mysql_fetch_array($query)){
                                    echo "<tr>
                                            <td><a href='?page=penjualan&act=detail&nota=$r[nonota]'>$r[nonota]</a></td>
                                            <td>$r[tanggal]</td>
                                            <td>$r[total]</td>
                                            <td><a href='?page=penjualan&act=detail&nota=$r[nonota]'>Cetak Nota</a></td>
                                        </tr>";
                                }
                                echo"</table>";
                        
                        break;
                    case "tambah":
                        $tgl=date('Y-m-d');
                        //untuk autonumber di nota
                        $auto=mysql_query("select * from penjualan order by nonota desc limit 1");
                        $no=mysql_fetch_array($auto);
                        $angka=$no['nonota']+1;
                        echo "<div class='navbar-form pull-right'>
                                No. Nota : <input type='text' id='nota' value='$angka' readonly >
                                <input type='text' id='tanggal' value='$tgl' readonly>   
                            </div>";
                            
                            echo'<legend>Transaksi Penjualan</legend>
                            <form action = "save_reservasi.php" method="post">
                            <label>Nomor KTP</label><br>
                            <input type="text" id="nik" name ="nik" class="form-control" style="max-width:600px;" placeholder="Nomor KTP" > <br>
                            <label>Nama</label><br>
                            <input type="text" id="nama" name ="nama" class="form-control" style="max-width:600px;" placeholder="Nama"><br>
                            <label>Phone</label><br>
                            <input type="text" id="phone" name ="phone" class="form-control" style="max-width:600px;" placeholder="Nomor HP"><br>
                            <label>Email</label><br>
                            <input type="text" id="email" name ="email" class="form-control" style="max-width:600px;" placeholder="Email"><br>
                            <label>Cekin</label><br>
                            <input type="text" id="formCekin" name ="cekin" class="form-control" style="max-width:600px;" placeholder=""><br>
                            <label>Cekout</label><br>
                            <input type="text" id="formCekout" name ="cekout" class="form-control" style="max-width:600px;" placeholder=""><br>


                            <label>Kode Kamar</label>
                            <select id="kode"></select>
                            <input type="text" id="nama" placeholder="Nama Kamar" readonly>
                            <input type="text" id="harga" placeholder="Harga" class="span2" readonly>
                            <input type="text" id="stok" placeholder="stok" class="span1" readonly>
                            <input type="text" id="jumlah" placeholder="Jumlah Hari" class="span1">
                            <button id="tambah" class="btn">Tambah</button>
                            
                            <span id="status"></span>
                            <table id="barang" class="table table-bordered">
                                    
                            </table>
                            <div class="form-actions">
                                <button id="proses" type="submit" name="submit">Proses</button>
                            </div> </form> <button><a href=transaksi.php?page=penjualan&act=cetak> cetak nota </a></button>';

                            $p=isset($_GET['act'])?$_GET['act']:null;
                            switch($p){
                            default:
                            }
                            break;
                    case 'cetak':
                                $query=mysql_query("select * from penjualan order by nonota desc limit 1");
                                while($r=mysql_fetch_array($query)){
                                    echo " 
                                        <a href='transaksi.php?page=penjualan&act=detail&nota=$r[nonota]'><button class='btn btn-primary'>Cetak Nota</button></a>";
                                }

                        break;
                    case "detail":
                        echo "<legend>Nota Penjualan</legend>";
                        $nota=$_GET['nota'];
                        $query=mysql_query("select penjualan.nonota,detailpenjualan.kode,tblbarang.nama,
                                           detailpenjualan.harga,detailpenjualan.jumlah,detailpenjualan.subtotal
                                           from detailpenjualan,penjualan,tblbarang
                                           where penjualan.nonota=detailpenjualan.nonota and tblbarang.kode=detailpenjualan.kode
                                           and detailpenjualan.nonota='$nota'");
                        $nomor=mysql_fetch_array(mysql_query("select * from penjualan where nonota='$nota'"));
                        echo "<div class='navbar-form pull-right'>
                                Nota : <input type='text' value='$nomor[nonota]' disabled>
                                <input type='text' value='$nomor[tanggal]' disabled>
                            </div>";
                        echo "<table class='table table-hover'>
                                <thead>
                                    <tr>
                                        <td>Kode Kamar</td>
                                        <td>Nama Kamar</td>
                                        <td>Harga</td>
                                        <td>Jumlah</td>
                                        <td>Subtotal</td>
                                    </tr>
                                </thead>";
                                while($r=mysql_fetch_row($query)){
                                    echo "<tr>
                                            <td>$r[1]</td>
                                            <td>$r[2]</td>
                                            <td>$r[3]</td>
                                            <td>$r[4]</td>
                                            <td>$r[5]</td>
                                        </tr>";
                                }
                                echo "<tr>
                                        <td colspan='4'><h4 align='right'>Total</h4></td>
                                        <td colspan='5'><h4>$nomor[total]</h4></td>
                                    </tr>
                                    </table>";
                        break;
                }
                ?>
            </div>
        </body>
    </html>