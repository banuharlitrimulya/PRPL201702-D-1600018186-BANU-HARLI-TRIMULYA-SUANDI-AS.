<!DOCTYPE html>
<html>
<head>
  <title>Reservasi</title>
  <style type="text/css">
  body {
    margin: 0;
    font-family: Arial;
    font-size: 17px;
  }
  </style>
  <link rel="stylesheet" type="text/css" href="tester.css">
  </link>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
      width: 100%;
      height: 100%;
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
  <a href="tambah_reservasi.php">Reservasi</a>
  <a href="transaksi.php">Transaksi</a>
  <a href="kontak.php">Kontak</a>
  <a href="admin/logout.php">Logout</a>
  
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div class="background">
  <img src="image/dubai.jpg" alt="dubai" style="width:100%; height: 665px;">
  <div class="content">
    <div id="reservation" class="container-fluid">
      <h2>Reservasi</h2>
      <form method="post" action="simpan_reservasi.php" onSubmit="validateForm()">
      <p>
            Nomor KTP : <br />
            <input name="nik" type="text" value="" maxlength="100" id="formNIK" class="form-control" style="max-width:600px;" placeholder="Nomor KTP" pattern="[0-9]+" required oninvalid="this.setCustomValidity('Just for number')" oninput="setCustomValidity('')"/>
            <span id="formNIKError" style="color:#CC0000;display:none;">NIK is empty.</span>
        </p>
      <p>
            Nama : <br />
            <input name="nama" type="text" value="" maxlength="100" id="formName" class="form-control" style="max-width:600px;" placeholder="Nama" pattern="[A-Za-z ]+" required oninvalid="this.setCustomValidity('Just for word')" oninput="setCustomValidity('')" />
            <span id="formNameError" style="color:#CC0000;display:none;">Name is empty.</span>
        </p>
      <p>
            Phone : <br />
            <input name="phone" type="text" value="" maxlength="100" id="formPhone" class="form-control" style="max-width:600px;" placeholder="Phone" pattern="[0-9]+" required oninvalid="this.setCustomValidity('Just for number')" oninput="setCustomValidity('')" />
            <span id="formPhoneError" style="color:#CC0000;display:none;">Phone is empty.</span>
        </p>
      <p>
            Email : <br />
              <input name="email" type="text" value="" maxlength="150" id="formEmail" class="form-control" style="max-width:600px;" placeholder="Email" pattern="([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z])+" required oninvalid="this.setCustomValidity('Pleace include @')" oninput="setCustomValidity('')" />
            <span id="formEmailError" style="color:#CC0000; display:none;">Email is empty or invalid.</span>
        </p>
      <p>
            Cek In : <br />
            <input name="cekin" type="text" value="" maxlength="100" id="formCekin" class="form-control" style="max-width:600px;" required />
            <span id="formCekinError" style="color:#CC0000;display:none;">Cek in is empty.</span>
        </p>
      <p>
            Cek Out : <br />
            <input name="cekout" type="text" value="" maxlength="100" id="formCekout" class="form-control" style="max-width:600px;" required />
            <span id="formCekoutError" style="color:#CC0000;display:none;">Cek out is empty.</span>
        </p>
      <P > 
          Pilih Kamar : <br />
          <select name="kamar" style="color: black" maxlength="150" style="max-width:600px;">
          <option value="" style="color: black">--Pilih--</option>
          <option value="Deluxe" style="color: black">Deluxe Room</option>
          <option value="Junior" style="color: black">Junior Suite Room</option>
          <option value="Suite" style="color: black">Suite Room</option>
          <option value="Executive" style="color: black">Executive Suite Room</option>
        </select>
      </P>

        <input type="submit" name="formSubmit" class="btn btn-primary" value="Submit"/>
        
      </form>
    </div>
  </div>
</div>


</body>
</html>