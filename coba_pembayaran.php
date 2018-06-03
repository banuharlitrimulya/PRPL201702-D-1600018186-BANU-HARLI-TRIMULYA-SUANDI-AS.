<?php
if($_POST["name"]){
 
$to = "danualbantani@gmail.com"; //email dikirimkan ke
 $subject = "Konfirmasi Pembayaran | tokobukukarisma.com"; //subject
 
$nama = $_POST["name"];
 $from = $_POST["email"];
 $telp = $_POST["telephone"];
 $nor = $_POST["nomororder"];
 $bank = $_POST["bank"];
 $prek = $_POST["pemilikrek"];
 $norek = $_POST["norek"];
 $tgl = $_POST["tanggal"];
 $jml = $_POST["jumlah"];
 $comm = $_POST["comment"];
 
if(empty($nama)){ $error.= "Nama Kosong";}
 if(empty($from)){ $error.= "Email Kosong";}
 if(empty($telp)){ $error.= "Telepon Kosong";}
 if(empty($nor)){ $error.= "Nomor Order Kosong";}
 if(empty($bank)){ $error.= "Nama Bank Kosong";}
 if(empty($prek)){ $error.= "Pemilik Rekening Kosong";}
 if(empty($norek)){ $error.= "No. Rekening Kosong";}
 if(empty($tgl)){ $error.= "Tanggal Kosong";}
 if(empty($jml)){ $error.= "Jumlah Pembayaran Kosong";}
 if(empty($comm)){ $comm = "<i>Tidak ada pesan.</i>';}else{$comm=htmlspecialchars($comm);}
 
if($error){
 echo '
<span style="color:red;"><b>Ada Kesalahan:</b></span>
 
'.$error;
 }else{
 
//pesan
 $message = '
<div style="background:#003366;width:500px;margin:5px;padding:5px;"><span style="color:#fff;font-weight:bold;">KONFIRMASI PEMBAYARAN | tokobukukarisma.com</span></div>
<div style="background:#f0f0f0;width:500px;margin:5px;padding:5px;">
<table width="100%" border="0" cellspacing="2" cellpadding="2">
<tbody>
<tr bgcolor="#FFFFFF">
<td width="35%">Nomor Order</td>
<td width="65%"><strong>: '.$nor.'</strong></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr bgcolor="#FFFFFF">
<td>Nama</td>
<td><strong>: '.$nama.'</strong></td>
</tr>
<tr bgcolor="#FFFFFF">
<td>Email</td>
<td><strong>: '.$from.'</strong></td>
</tr>
<tr bgcolor="#FFFFFF">
<td>Telepon</td>
<td><strong>: '.$telp.'</strong></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr bgcolor="#FFFFFF">
<td>BANK</td>
<td><strong>: '.$bank.'</strong></td>
</tr>
<tr bgcolor="#FFFFFF">
<td>No. Rekening</td>
<td><strong>: '.$norek.'</strong></td>
</tr>
<tr bgcolor="#FFFFFF">
<td>Pemilik Rekening</td>
<td><strong>: '.$prek.'</strong></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr bgcolor="#FFFFFF">
<td>Jumlah Pembayaran</td>
<td><strong>: '.$jml.'</strong></td>
</tr>
<tr bgcolor="#FFFFFF">
<td>Tanggal Pembayaran</td>
<td><strong>: '.$tgl.'</strong></td>
</tr>
</tbody>
</table>
Catatan pelanggan:
<table width="100%" border="0" cellspacing="2" cellpadding="2" bgcolor="#FFFFFF">
<tbody>
<tr>
<td>'.$comm.'</td>
</tr>
</tbody>
</table>
</div>
';
 //Pesan akhir
 
//echo $message;
 
$headers = "From: $from\r\n";
 $headers .= "Content-type: text/html\r\n";
 $sent = mail($to, $subject, $message, $headers);
 
if($sent){
 echo 'Konfirmasi telah dikirim. Kami akan mengkonfirmasi anda kembali melalui email.';
 }else{
 echo 'Konfirmasi gagal. Silahkan ulangi atau hubungi administrator.';
 }
 }
}
?>
 
<link rel="stylesheet" href="themes/ui-lightness/jquery.ui.all.css">
<script src="jquery-1.5.1.js">
<script src="ui/jquery.ui.core.js">
<script src="ui/jquery.ui.widget.js">
<script src="ui/jquery.ui.datepicker.js">
 
$(function() {
 $( "#tanggal" ).datepicker();
 });
<div class="padder">
<div id="messages_product_view">getMessagesBlock()->getGroupedHtml() ?></div>
<div class="page-head">
<h3>__('Konfirmasi Pembayaran') ?></h3>
</div>
<div class="head-alt2">
<h4 class="title">__('Isi data di bawah ini.') ?></h4>
</div>
<ul>
 <li>
<div class="input-box">__('Name') ?> <span class="required">*</span>
<input name="name" id="name" title="__('Name') ?>" value="htmlEscape($this->helper('contacts')->getUserName()) ?>" class="required-entry input-text" type="text"/></div>
<div class="input-box">__('BANK') ?>
<select name="bank" title="__('BANK') ?>"> __('BRI') ?></div>
<div class="clear"></div></li>
 <li>
<div class="input-box">__('Email') ?> <span class="required">*</span>
<input name="email" id="email" title="__('Email') ?>" value="htmlEscape($this->helper('contacts')->getUserEmail()) ?>" class="required-entry input-text validate-email" type="text"/></div>
<div class="input-box">__('Pemilik Rekening') ?>
<input name="pemilikrek" id="pemilikrek" title="__('Pemilik Rekening') ?>" value="" class="input-text" type="text"/></div>
<div class="clear"></div></li>
 <li>
<div class="input-box">__('Telephone') ?>
<input name="telephone" id="telephone" title="__('Telephone') ?>" value="" class="input-text" type="text"/></div>
<div class="input-box">__('Nomor Rekening') ?>
<input name="norek" id="norek" title="__('Nomor Rekening') ?>" value="" class="input-text" type="text"/></div>
<div class="clear"></div></li>
 <li>
<div class="input-box">__('No. Order') ?>
<input name="nomororder" id="nomororder" title="__('No. Order') ?>" value="" class="input-text" type="text"/></div>
<div class="input-box">__('Tanggal Pembayaran') ?>
<input name="tanggal" id="tanggal" title="__('Tanggal Pembayaran') ?>" value="" class="input-text" type="text"/></div>
<div class="clear"></div></li>
 <li>
<div class="input-box">__('Jumlah Pembayaran') ?>
<input name="jumlah" id="jumlah" title="__('Jumlah Pembayaran') ?>" value="" class="input-text" type="text"/></div>
<div class="clear"></div></li>
 <li>
<div class="input-box">__('Comment') ?> <span class="required">*</span>
<textarea name="comment" id="comment" title="__('Comment') ?>" class="required-entry input-text" style="height:150px;width:525px;" cols="50" rows="5"></div></li>
</ul>
<div class="button-set">
<p class="required">__('* Required Fields') ?></p>
 
<input type="image" src="getSkinUrl('images/btn_submit.gif');?>" alt="__('Submit') ?>"/></div>
var contactForm = new VarienForm('contactForm', true);</div>