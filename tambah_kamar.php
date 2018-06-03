<!DOCTYPE html>
<html>
<head>
	<title>Data Kamar</title>
	<link rel="stylesheet" type="text/css" href="tester.css">
  </link>
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

</head>
<body>
	<div id="reservation" class="container-fluid">
  <a href='dashboard.php'>Kembali ke Menu</a>
  <h2>Tambah Data Kamar</h2>
  <form method="post" action="simpan_kamar.php" onSubmit="validateForm()">
  <p>
        ID Kamar : <br />
        <input name="idkamar" type="text" value="" maxlength="100" id="idkamar" class="form-control" style="max-width:600px;" placeholder="ID Kamar" pattern="[0-9]+" required oninvalid="this.setCustomValidity('Just for number')" oninput="setCustomValidity('')"/>
        <span id="formNIKError" style="color:#CC0000;display:none;">Nomor kosong.</span>
    </p>
   <p>
        ID Jenis : <br />
        <input name="idjenis" type="text" value="" maxlength="100" id="id" class="form-control" style="max-width:600px;" placeholder="ID Jenis" pattern="[0-9]+" required oninvalid="this.setCustomValidity('Just for number')" oninput="setCustomValidity('')"/>
        <span id="formNIKError" style="color:#CC0000;display:none;">Nomor kosong.</span>
    </p>
  <p>
        Nomor KTP : <br />
        <input name="nik" type="text" value="" maxlength="100" id="nik" class="form-control" style="max-width:600px;" placeholder="Nomor KTP" pattern="[0-9]+" required oninvalid="this.setCustomValidity('Just for number')" oninput="setCustomValidity('')"/>
        <span id="formNIKError" style="color:#CC0000;display:none;">Nomor kosong.</span>
    </p>
  <P > 
      Jenis Kamar : <br />
      <select name="kamar" style="color: black">
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
</body>
</html>
