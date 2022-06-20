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
        if($id_jabatan==1){
            $bayaran_sewa = $jumlah_jam*25000;
        } else if ($id_jabatan==2){
            $bayaran_sewa =  $jumlah_jam*50000;
        } else if ($id_jabatan==3){
            $bayaran_sewa =  $jumlah_jam*35000;
        }
        


        
        $sql = "INSERT INTO karyawan (id_karyawan, nama_karyawan, jenis_kelamin, no_hp, tgl_lembur, jam_masuk, jam_selesai)
                VALUES ('$id_karyawan','$nama_karyawan', '$jenis_kelamin','$no_hp','$tgl_masuk', '$jam_masuk', '$jam_selesai')";
                $mysqli -> query($sql) or die ($mysqli -> error);

        $sql = "SELECT id_karyawan FROM karyawan WHERE nama_karyawan='$nama_karyawan'";
        $SQL_id_karyawan = $mysqli->query($sql);   
        while($row_id_karyawan=$SQL_id_karyawan->fetch_assoc()){
        $id_karyawan=$row_id_karyawan['id_karyawan'];
        }

        $sql = "INSERT INTO transaksi (id_karyawan, id_jabatan, jumlah_jam, bayaran_sewa) VALUES 
                ('$id_karyawan', '$id_jabatan', '$jumlah_jam', $bayaran_sewa)";
         $mysqli -> query($sql) or die ($mysqli -> error);

        header ('location: index.php');
    }

    $sql = 'SELECT * FROM lembur';
    $datalembur = $mysqli->query($sql) or die ($mysqli->error);

    $sql = 'SELECT * FROM karyawan';
    $dataLembur = $mysqli->query($sql) or die ($mysqli->error);
    
    $form = "tambah";
    $url = "tambah.php";

    include 'views/v_tambah.php';
?>