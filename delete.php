<?php include 'lib/library.php';
    $id_karyawan=$_GET['id_karyawan'];
    $sql = "DELETE FROM karyawan WHERE id_karyawan ='$id_karyawan'";
    $mysqli -> query($sql) or die ($mysqli -> error);
    header ('location: index.php');
    
?>