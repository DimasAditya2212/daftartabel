<!DOCTYPE html>
<?php 
require 'funcitons.php';

$mahasiswa = query("SELECT * FROM 3db01");
if(isset($_POST["cari"])){
    $mahasiswa = cari($_POST["cari_isi"]);
}

?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Daftar Mahasiswa Kelas 3db01</h1>

        <form action="" method="post">
        <input type="text" name="cari_isi" size="30">
        <button type="submit" name="cari">Cari</button>
        </form>
        <br>
        <table border="1" cellspacing="0" cellpadding="15">
        <tr>
            <th>Npm</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Email</th>
            <th>Nilai</th>
        </tr>
        <?php foreach($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $mhs["Npm"];  ?></td>
            <td>
                <a href="ubah1.php?npm=<?=$mhs['Npm']; ?>">Ubah</a>
                <a href="hapus.php?npm=<?=$mhs['Npm']; ?>">Hapus</a>
            </td>
            <td><?= $mhs["Nama"];  ?></td>
            <td><?= $mhs["Kelas"];  ?></td>
            <td><?= $mhs["Email"];  ?></td>
            <td><?= $mhs["Nilai"];  ?></td>   
        </tr>
        <?php endforeach; ?>
        </table>
        <a href="tambah.php">mau tambah tabel?</a>
        
        <script src="" async defer></script>
    </body>
</html>