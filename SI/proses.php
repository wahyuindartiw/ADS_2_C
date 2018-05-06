<?php
include "koneksi.php";

$user=$_POST['username'];
$pass=md5($_POST['password']);

	$sql=mysql_query("select * from user where username='$user' and password='$pass'");
	$count=mysql_num_rows($sql);
	$rs=mysql_fetch_array($sql);
		if($count>0){
			session_start();
				$_SESSION['user']=$rs['username'];
				$_SESSION['level']=$rs['level'];
				 echo "<p> <a href='http://localhost/SI/pages/pantiAsuhan/laporandonasi.php'>
				&nbsp;&nbsp;Rincian Donasi Panti Jompo
				</p></a>
				<p> <a href='http://localhost/SI/pages/pantiJompo/laporandonasi2.php'>
				&nbsp;&nbsp;Rincian Donasi Panti Jompo </a> </p> ";
			header('location:admin.php');
		}else{		
			echo"<center><h2>username atau password anda salah.</h2><br>
			<a href=http://localhost/SI/login.php><b>Ulangi Lagi</b></a></center>";	
		}
?>