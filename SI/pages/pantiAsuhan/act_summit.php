<?php
include "../../config/koneksi.php";
// $date = date("Y-m-d");
mysql_query("INSERT INTO submitpa(panti, tgl, nama_barang, qty, harga)
VALUES('$_POST[nama]','$_POST[tgl]','$_POST[barang]','$_POST[banyak]','$_POST[harga]')");
// echo "$date";
echo "<script>window.alert('Data Tersimpan, silahkan tunggu konfirmasi dari pihak admin untuk proses selanjutnya');
window.location=('http://localhost/SI/pages/pantiAsuhan/rincian.php')</script>";


?>