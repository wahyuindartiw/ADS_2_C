<?php
include "../../config/koneksi.php";
$date = date("Y-m-d");
mysql_query("INSERT INTO summit(Tanggal_Pembelian, Nama_Barang, Qty, Harga, tgl)
VALUES(
'$_POST[Tanggal Pembelian]',
'$_POST[Nama Barang]',
'$_POST[Qty]',
'$_POST[Harga]'$date')");
echo "<script>window.alert('Data Tersimpan, silahkan tunggu konfirmasi dari pihak admin untuk proses selanjutnya');
        window.location=('../media.php?module=sekolah')</script>";


?>