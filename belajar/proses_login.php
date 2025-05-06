<?php
$var_npm = $_POST['npm'];
$var_pwd = $_POST['pwd'];

if(($var_npm=='12345678') and ($var_pwd=='12345678')){
    echo 'login berhasil <br>';
}else{
    echo 'npm atau password anda tidak sesuai <br>';
}

?>