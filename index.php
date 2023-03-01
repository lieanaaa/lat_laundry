<?php
$nama=$_POST['nama'];
$pass=$_POST['pass'];
if ($nama=='userlsp' && $pass=='lsp'
   ) {
    header("Location:landing.php");
} else {
    echo "LOGIN ANDA GAGAL!!";
    header('location: login.php');
    
}
?>