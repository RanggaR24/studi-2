<?php include 'lib/library.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id_karyawan = $_POST['id_karyawan'];
        $nama_karyawan = $_POST['nama_karyawan'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $no_hp = $_POST['no_hp'];
        $tgl_masuk = $_POST['tgl_masuk'];
        $jam_masuk = $_POST['jam_masuk'];
        $jam_selesai = $_POST['jam_selesai'];
        $id_jabatan = $_POST['id_jabatan'];
        $jumlah_jam = $jam_selesai - $jam_masuk;

        $sql="UPDATE karyawan SET id_karyawan = '$id_karyawan', nama_karyawan = '$nama_karyawan', jenis_kelamin = '$jenis_kelamin', no_hp = '$no_hp', 
            tgl_lembur = '$tgl_masuk', jam_masuk = '$jam_masuk', jam_selesai = '$jam_selesai' WHERE id_karyawan = '$id_karyawan'";
        $mysqli -> query($sql) or die ($mysqli -> error);
        
        $sql = "UPDATE transaksi SET id_karyawan = '$id_karyawan', jumlah_jam = '$jumlah_jam' WHERE id_karyawan ='$id_karyawan'";
        
        $mysqli -> query($sql) or die ($mysqli -> error);

    header ('location: index.php');
}
    $id_karyawan=$_GET['id_karyawan'];
    if(empty($id_karyawan)) header ('location: index.php');
    $sql = "SELECT * FROM karyawan WHERE id_karyawan='$id_karyawan'";
    $query = $mysqli->query($sql);
    $lembur = $query->fetch_array();
    if(empty($lembur)) header ('location: index.php');

    $sql = "SELECT * FROM lembur";
    $datalembur = $mysqli->query($sql) or die ($mysqli->error);

    $sql = 'SELECT * FROM karyawan';
    $dataLembur = $mysqli->query($sql) or die ($mysqli->error);

    $form = "edit";
    $url = "edit.php";

    include 'views/v_tambah.php';
?>