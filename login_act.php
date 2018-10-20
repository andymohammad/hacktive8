<?php 
session_start();
include 'config/koneksi.php';
include 'idle.php';
$USERNAME=$_POST['uname'];
$PASSWD=$_POST['pass'];
//$PAS=md5($pass);
$query=mysql_query("select * from petugas where USERNAME='$USERNAME' and PASSWD='$PASSWD'")or die(mysql_error());
if(mysql_num_rows($query)==1){
	$_SESSION['USERNAME']=$USERNAME;
	$_SESSION['nama']=$NAMA;
	login_validasi();
	header("location:pages/?");
}else{
	header("location:index.php?login=gagal")or die(mysql_error());
	
}
// echo $pas;
 ?>