<?php
include "../../config/koneksi.php";
$date = date("Y-m-d");
mysql_query("INSERT INTO adopsi(nama,email,alamat,usia,pekerjaan,alasan,no_hp,tgl)
VALUES(
'$_POST[name]',
'$_POST[email]',
'$_POST[alamat]',
'$_POST[usia]',
'$_POST[pekerjaan]',
'$_POST[alasan]',
'$_POST[no]','$date')");
echo "<script>window.alert('Data Tersimpan, silahkan tunggu konfirmasi dari pihak admin untuk proses selanjutnya');
        window.location=('/si/index.php')</script>";


?>