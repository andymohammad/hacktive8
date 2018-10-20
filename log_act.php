<?php 
include 'config/koneksi.php';


IF(ISSET($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $cek = mysql_num_rows(mysql_query("SELECT * FROM petugas WHERE USERNAME='$username' AND PASSWD='$password'"));
    $data = mysql_fetch_array(mysql_query("SELECT * FROM petugas WHERE USERNAME='$username' AND PASSWD='$password'"));
    IF($cek > 0)
    {
        
        session_start();
        $_SESSION['username'] = $data['USERNAME'];
        $_SESSION['password'] = $data['PASSWD'];
        echo "<script language=\"javascript\">alert(\"welcome \");document.location.href='pages/index.php';</script>";
    }else{
        echo "<script language=\"javascript\">alert(\"Invalid username or password\");document.location.href='index.php';</script>";
    }
}

?>

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>