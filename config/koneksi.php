<?php
$hostmysql = "localhost";
$username = "root"; //mysql_username
$password = ""; //mysql_password
$database = "kknt79"; //nama_database yang barusan kita buat
error_reporting(E_ALL ^ E_DEPRECATED);
$conn = mysql_connect("$hostmysql","$username","$password");
if (!$conn) die ("Gagal Melakukan Koneksi");
mysql_select_db($database,$conn) or die ("Database Tidak Diketemukan di Server"); ?>