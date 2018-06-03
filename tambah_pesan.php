<html>
<head><title>Tambah Pesan</title></head>
<body>
    <center>
    <a href='dashboard.php'>Kembali ke Menu</a></center>
    <form action = "simpan_pesan.php" method ="post"> 
    <center><h2>Data Pesan</h2></center>
    <form>
    <table align="center">
    <form action="simpan_pesan.php" method="post">

<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "tester";

$konek = new mysqli($host, $username, $password, $db_name);

if(!$konek){
    echo"Eror";
}
else{
    echo"";
}
    $nopes = "SELECT max(nopesan) as nopes FROM pesan where nopesan like'%NP%'";
    $shownp = mysqli_query($konek, $nopes);
    $nosp = mysqli_fetch_assoc($shownp);
    $nosp1 = $nosp['nopes'];
    $nosp2 = substr($nosp1, 3, 3);
    $nospp = "NP".sprintf('%03s', $nosp2+1);

    ?>

    <tr><td>Nomor Pesan</td><td>:</td><td><center><input type="text" name="nopesan" size="30" maxlength="30" required="" id="nopesan" value=<?=$nospp;?>></center></td></tr>
    <tr><td>No. KTP</td><td>:</td><td><center><input type="text" name="nik" size="30" maxlength="30" required="" id="nik"></center></td></tr>
    <tr><td>ID Kamar</td><td>:</td><td><center><input type="text" name="idkamar" size="30" maxlength="30" required="" id="idkamar"></center></td></tr>
    <tr><td>ID Jenis</td><td>:</td><td><center><input type="text" name="idjenis" size="30" maxlength="30" required="" id="idjenis"></center></td></tr>
  <tr> <td></td> <td></td> 
<td>

<input  type="submit" value="Save"><input type="reset" value="Cancel"><br></br>


</select></tr></td>
</td> </tr>
</table>
</form>
</td> </tr>
</table>

</body>
</html>