<?php

$server="localhost:3308";
$user="root";
$pass="";
$database_name="formulir_pendaftaran";

$koneksi=mysqli_connect($server, $user, $pass, $database_name);
if ($koneksi){
        echo "dapat terhubung";

    }
else{
    echo "Mysql tidak terhubung";
}
?>