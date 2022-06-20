
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1, h4{
            font-family: sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        h4{
            margin-top:10px;
        }
        table{
            font-family: sans-serif;
            border-collapse: collapse;
            border-color: black;
            margin-right: auto;
            margin-left: auto;
            
        }
        th, td{
                padding: 5px;    
            }

        th{
            text-align:center;
            background-color: darkgrey;
            color: white;
        }

        td{
            background-color: whitesmoke;
            text-align:center;
        }
        a{
            text-decoration: none;
            font-size:17px;
            margin: 3px;
            color: white;

        }
        button{
            margin-bottom: 10px;
            background-color: cadetblue;
            border: none;
            padding: 10px;
            border-radius: 30px;
        }
        .edit{
            padding: 5px;
            background-color: limegreen;
        }
        .hapus{
            padding: 5px;
            background-color: red;
        }
        .huruf{
            font-size: 10px;
        }
        .tambah{
            margin-left: -75px;
            padding: px;
           
        }
        .huruf{
            font-size: 16px;
        }
        td:hover {background-color: #f5f5f5;}
        
        .huruf1{
            color: white;
            border-radius: 20px;
            margin-left: 10px;
            margin-bottom:20px;
        }
        .out{
            padding:10px;
            margin-left: 20px;
            position: relative;
            left: 130vh;
            height: 43px;
            background-color: red;
        }
        .kata{
            font-size: 16px;
            height: 50px;
        }
        .cari{
            margin-bottom: 10px;
            margin-left:  185px;
            border: none;
            padding: 8px;
            border-radius: 10px;
            border: 1px solid black
        }
        .x{
            margin-left: 8px;
            color: white;
            border-radius: 20px;
            padding:9px;
        }
        .container{
            margin-left:590px;
        }
    </style>
</head>
<body>

    <h1>Data Jam Lembur</h1>
    <table border="1">
    <thead>    
    <tr>
            <th>No</th>
            <th>ID Karyawan</th>
            <th>Nama Karyawan
            <a href="index.php?sort=nama_karyawan&order=asc">▲</a>
            <a href="index.php?sort=nama_karyawan&order=desc">▼</a>
            </th>
            <th>Nomor HP
            <a href="index.php?sort=no_hp&order=asc">▲</a>
            <a href="index.php?sort=no_hp&order=desc">▼</a>
            </th>
            <th>Jenis Kelamin</th>
            <th>Jabatan</th>
            <th>Tanggal Lembur</th>
            <TH>Jam Masuk Lembur</TH>
            <th>Jam Selesai Lembur</th>
            <th>Bayaran Lembur/jam</th>
            <th>Jumlah Jam</th>
            <!-- <th>Bayaran Lembur</th> -->
            <th>Aksi</th>
            
        </tr>
    </thead>
    <tbody>
    <?php
        $i = 1;
        while($lembur = $listlembur -> fetch_array())
        {
        ?>
        <tr>
            <td><?= $i++?></td>
            <td><?= $lembur['id_karyawan']?></td>
            <td><?= $lembur['nama_karyawan']?></td>
            <td><?= $lembur['no_hp']?></td>
            <td><?= $lembur['jenis_kelamin']?></td>
            <td><?= $lembur['nama_jabatan']?></td>
            <td><?= $lembur['tgl_lembur']?></td>
            <td><?= $lembur['jam_masuk']?></td>
            <td><?= $lembur['jam_selesai']?></td>
            <td><?= $lembur['bayaran']?></td>
            <td><?= $lembur['jumlah_jam']?></td>
            <!-- <td><?= $lembur['bayaran_lembur']?></td> -->
            <td><button class="edit"><a href="edit.php?id_karyawan=<?= $lembur['id_karyawan'] ?>">Edit<i class="fa fa-pencil"></i></a></button> |
                <button class="hapus"><a href="delete.php?id_karyawan=<?= $lembur['id_karyawan'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></a></button>
            </td>
           
        </tr>
        <?php } ?> 
        <form action="index.php" method="get" class="kk">
            <input class="cari "type="text" name="search" value="<?= @$search ?>">
            <button class="huruf1" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
        <button class="out" onclick="return confirm('Apakah anda yakin ingin Log Out !!')"><a href="logout.php" class="kata"><i class="fa fa-sign-out" aria-hidden="true" >Exit</i></a></button>
        
        <button class="tambah"><a href="tambah.php" type="button" class="huruf">
        <i class="fa fa-plus"></i>
            Tambah Data
        </a>
        </button> 
    </tbody>
    </table>
</body>
</html>