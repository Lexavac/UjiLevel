<?php
$host       = "localhost"; // server local yang di pakai 
$user       = "root"; // root adalah user default dari php 
$password   = ""; // default 
$database   = "siswa"; // database yang di pakai
$connect    = mysqLi_connect($host, $user, $password, $database) or die ("Gagal Menghubungkan"); // function dari php untuk menghubungkan ke php my admin 

?>