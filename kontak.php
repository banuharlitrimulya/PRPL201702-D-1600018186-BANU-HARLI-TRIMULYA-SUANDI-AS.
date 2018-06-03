<!DOCTYPE html>
<html>
<head>
  <title>Kontak</title>
  <link rel="stylesheet" type="text/css" href="tester.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- boostrap -->
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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
    <div id="contact" class="container-fluid">
      <h1>Contact us</h1>
      
      <form method="post" action="admin/simpan_contact.php" onSubmit="validateForm() ">
      <p>
            Name:<br />
            <input name="name" type="text" value="" maxlength="100" id="formName" class="form-control" style="max-width:600px;" placeholder="Nama" placeholder="Nama" pattern="[A-Za-z ]+" required oninvalid="this.setCustomValidity('Just for word')" oninput="setCustomValidity('')" />
            <span id="formNameError" style="color:#CC0000;display:none;">Name is empty.</span>
        </p>
      <p>
            Email:<br />
            <input name="email" type="text" value="" maxlength="150" id="formEmail" class="form-control" style="max-width:600px;" placeholder="Email" placeholder="Name" pattern="([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z])+" required oninvalid="this.setCustomValidity('Pleace include @')" oninput="setCustomValidity('')" />
            <span id="formEmailError" style="color:#CC0000; display:none;">Email is empty or invalid.</span>
        </p>
      <p>
            Komentar:<br />
            <textarea name="comments" rows="5" id="formComments" class="form-control" style="max-width:600px;" placeholder="Komentar" placeholder="Name" pattern="[a-zA-Z ]+" required oninvalid="this.setCustomValidity('Just for word')" oninput="setCustomValidity('')"></textarea>
            <span id="formCommentsError" style="color:#CC0000;display:none;">Comments are empty.</span>
        </p>
        <input type="submit" name="formSubmit" class="btn btn-primary" value="Submit"/>
        
        </form>
        <h2>Follow Us</h2>
          <a href="www.twitter.com">Twitter<img src="image/twitter.png" height="30px" width="50px"></a>
          <a href="www.facebook.com">Facebook<img src="image/facebook.png" height="30px" width="20px"></a>
          <a href="www.instagram.com">Instagram<img src="image/instagram.png" height="30px" width="40px"></a><br><br><br>
        <!-- <td ><a>&copy;2018 Banu Harli Trimulya Suandi As. 1600018186. Teknik Informatika.-Universitas Ahmad Dahlan </a></td>
              <td height="35px"><img src="image/Logo-UAD-berwarna-full-color.png" style="width: 60px;">
        </td> -->
    </div>
  </div>
</div>


</body>
</html>