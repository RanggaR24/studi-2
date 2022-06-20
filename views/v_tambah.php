<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.form{
    margin-top: 100px;
    margin-left: 690px;
    margin-right: 690px;
    padding: 20px;
    background: lightgrey;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
    border-radius: 10px;
}
h1{
    text-align: center;
    color: black;
}
table{
    padding:5px;
}
td{
    padding:10px;
    color: black;
}
a{
    text-decoration: none;
    color: whitesmoke;
}
button{
    border: none;
    padding: 7px 10px;
    background-color: red;
    border-radius: 20px;
    color: whitesmoke;
    padding: 13px 20px;
    margin-top: 7px;
    
}
button[type='submit']:hover{
    background-color: whitesmoke;
    color: black;
}
.button:hover{
    background-color: whitesmoke;
}
a:hover{
    color: black;
}
button[type='submit']{
    background-color:cadetblue;
}

input[type="text"]{
    border: none;
    padding: 10px;
    padding-right: 30px;
    border-radius: 10px;
    border: ;
}
select{
    border: none;
    padding: 5px;
    border-radius: 10px;
    border: ;
}
.button{
    margin-left: 10px;
}

    </style>
</head>  
<body>
    <?php
	$action = 'tambah.php';
	if (!empty($lembur)) {
		$action = 'edit.php';
	} 
    ?>
    <div class="form" >
    <h1>Form Lembur</h1>
    <form action="<?= $action ?>" method="post">
        <table align="center">
            <tr>
                <?php if(isset($_GET['id_karyawan'])) { ?>
                <td>ID Karyawan </td>
                <td>: <input type="text" name="id_karyawan" placeholder="Masukkan Nama Lengkap" readonly value="<?= @$lembur['id_karyawan'] ?>"></td>
                <?php } else { ?>
                    <td>ID Karyawan </td>
                <td>: <input type="text" name="id_karyawan" placeholder="Masukkan Nama Lengkap" value="<?= @$lembur['id_karyawan'] ?>"></td>
                <?php } ?>
            </tr>
            <tr>
                <td>Nama Lengkap </td>
                <td>: <input type="text" name="nama_karyawan" placeholder="Masukkan Nama Lengkap" value="<?= @$lembur['nama_karyawan'] ?>"></td>
            </tr>
            <tr>
                <td>Nomor Handphone </td>
                <td>: <input type="text" name="no_hp" placeholder="Masukkan Nomor Handphone" value="<?= @$lembur['no_hp'] ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin </td>
                <td>: <input type="radio" name="jenis_kelamin" value ="Laki-Laki" <?= @$lembur['jenis_kelamin'] == 'Laki-Laki' ? 'checked' : ''?>>Laki - Laki 
                <input type="radio" name="jenis_kelamin" value="Perempuan" <?= @$lembur['jenis_kelamin'] == 'Perempuan' ? 'checked' : '' ?>> Perempuan</td>
            </tr>
            <tr>
                <td>Jabatan </td>
                <td>: 
                <select name="id_jabatan">
                <option>[Pilih Jabatan]</option>
                <?php while ($lem = @$datalembur -> fetch_array()) { ?>
                    <option value="<?= $lem['id_jabatan'] ?>" <?= @$lembur['id_jabatan'] == $lem['id_jabatan'] ? 'selected' : '' ?>>
                    <?= $lem['nama_jabatan'] ?>
                </option>
                <?php } ?>
                 </select>
            </td>
            </tr>
            <tr>
            <tr>
                <td>Tanggal Masuk </td>
                <td>: <input type="date" name="tgl_masuk" placeholder="" value="<?= @$lembur['tgl_lembur'] ?>"></td>
            </tr>
            <tr>
                <td>Jam Masuk Lembur</td>
                <td>: <input type="time" name="jam_masuk" placeholder="" value="<?= @$lembur['jam_masuk'] ?>"></td>
            </tr>
            <tr>
                <td>Jam Selesai Lembur</td>
                <td>: <input type="time" name="jam_selesai" placeholder="" value="<?= @$lembur['jam_selesai'] ?>"></td>
            </tr>
            
            <tr>
                <td colspan=2 align="left"><button type="submit"><i class="fa fa-floppy-o"></i> Submit</button> 
                <?php if(isset($_GET['nis'])){
                    ?>
                <button class="button"><a href="index.php"><i class="fa fa-reply"></i> Batal</a></button></td>
                <?php } else { ?>
                    <button class="button"><a href="index.php"><i class="fa fa-reply"></i> Batal</a></button></td>
                <?php } ?>
            </tr>
            
        </table>
    </form>
    </div>
</body>
</html>