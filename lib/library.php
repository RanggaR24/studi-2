<?php 
session_start();

$host = 'localhost';
$user='root';
$pass = '';
$db='maju2';

$mysqli = mysqli_connect($host, $user, $pass, $db)
          or die('Tidak dapat koneksi ke database');


?>