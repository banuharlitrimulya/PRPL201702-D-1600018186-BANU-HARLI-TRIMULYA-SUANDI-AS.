<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
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
  <h2>Tambah Data Hak Akses</h2>
  <form method="post" action="simpan_admin.php" onSubmit="validateForm()">
  <p>
        ID : <br />
        <input name="id" type="text" value="" maxlength="100" id="id" class="form-control" style="max-width:600px;" placeholder="ID" pattern="[0-9]+" required oninvalid="this.setCustomValidity('Just for number')" oninput="setCustomValidity('')"/>
        <span id="formNIKError" style="color:#CC0000;display:none;">NIK is empty.</span>
    </p>
  <p>
        Nama : <br />
        <input name="nama" type="text" value="" maxlength="100" id="nama" class="form-control" style="max-width:600px;" placeholder="Nama" pattern="[A-Za-z ]+" required oninvalid="this.setCustomValidity('Just for word')" oninput="setCustomValidity('')" />
        <span id="formNameError" style="color:#CC0000;display:none;">Name is empty.</span>
    </p>
  <p>
        Username : <br />
        <input name="username" type="text" value="" maxlength="100" id="username" class="form-control" style="max-width:600px;" placeholder="Username" pattern="[A-Za-z ]+" required oninvalid="this.setCustomValidity('Just for word')" oninput="setCustomValidity('')" />
        <span id="formPhoneError" style="color:#CC0000;display:none;">Phone is empty.</span>
    </p>
  <p>
        Password : <br />
        <input name="password" type="text" value="" maxlength="150" id="password" class="form-control" style="max-width:600px;" placeholder="Password" pattern="[0-9A-Za-z]+" required oninvalid="this.setCustomValidity('Pleace include @')" oninput="setCustomValidity('')" />
        <span id="formEmailError" style="color:#CC0000; display:none;">Email is empty or invalid.</span>
    </p>
    <input type="submit" name="formSubmit" class="btn btn-primary" value="Submit"/>
    
  </form>
</div>
</body>
</html>
