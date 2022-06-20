<?php 
    include 'lib/library.php'; 
    include 'lib/lib.php';

    $success = flash('success');
    $error = flash('error');
    cekLogin();

    $sql = 'SELECT *, CASE WHEN transaksi.id_jabatan = 1 THEN transaksi.jumlah_jam *25000 when transaksi.id_jabatan = 2 THEN transaksi.jumlah_jam * 50000 WHEN transaksi.id_jabatan = 3 THEN transaksi.jumlah_jam *35000 END AS jumlah FROM karyawan, lembur, transaksi WHERE karyawan.id_karyawan=transaksi.id_karyawan AND lembur.id_jabatan=transaksi.id_jabatan';

    $data = $mysqli->query($sql) or die ($mysqli->error);

    $search= @$_GET['search'];
    if(!empty($search)) $sql =" SELECT *, CASE WHEN transaksi.id_jabatan = 1 THEN transaksi.jumlah_jam *25000 when transaksi.id_jabatan = 2 THEN transaksi.jumlah_jam * 50000 WHEN transaksi.id_jabatan = 3 THEN transaksi.jumlah_jam *35000 END AS jumlah FROM karyawan, lembur, transaksi WHERE karyawan.id_karyawan=transaksi.id_karyawan AND lembur.id_jabatan=transaksi.id_jabatan and nama_karyawan LIKE '%$search%' OR no_hp LIKE '%$search%'";

    $order_field=@$_GET['sort'];
    $order_mode=@$_GET['order'];    

    if(!empty($order_field) && !empty($order_mode)) $sql .= " ORDER BY $order_field $order_mode";

    $listlembur = $mysqli->query($sql);

    include 'views/v_indeks.php';
?>