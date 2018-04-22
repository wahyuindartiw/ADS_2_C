<?php
include"config/koneksi.php";

$pass=md5($_POST['password']);

$user=$_POST['username'];

	$sql=mysql_query("select * from user where username='$user' and password='$pass'");
	$count=mysql_num_rows($sql);
	$rs=mysql_fetch_array($sql);
		if($count>0){
			session_start();
				$_SESSION['user']=$rs['username'];
				$_SESSION['level']=$rs['level'];				
			
			header('location:admin.php');
		}else{		
			echo"<center><h2>username atau password anda salah.</h2><br>
			<a href=http://localhost/SI/login.php><b>Ulangi Lagi</b></a></center>";	
		}
?>
