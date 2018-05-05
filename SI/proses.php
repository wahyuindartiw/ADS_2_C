<?php
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];

$query=mysql_query("insert into abc(username, password)
value('$username','$password')");
if($query){
echo "LOGIN BERHASIL";
?>
<p> <a href="http://localhost/SI/pages/pantiAsuhan/laporandonasi.php">
&nbsp;&nbsp;Rincian Donasi Panti Jompo
</p></a>
<p> <a href="http://localhost/SI/pages/pantiJompo/laporandonasi2.php">
&nbsp;&nbsp;Rincian Donasi Panti Jompo
</p> </a>
<?php
}else{
echo "Gagal input data";
echo mysql_error();
}
?>