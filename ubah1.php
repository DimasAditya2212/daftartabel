<!DOCTYPE html>
<?php 

require 'funcitons.php';

$npmubah = $_GET["npm"];
$ubahvalue= query("SELECT * FROM 3db01 WHERE Npm = $npmubah")[0];

if(isset($_POST["submit"])){
    $status = ubah($_POST);
    if($status > 0){
        echo "data berhasil masuk";
    } else{
        echo "data gagal";
    }
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
        <h1>ubah data</h1>
        <form action="" method="post">
        <label for="">Npm</label>
        <input type="text" name="npm" required value="<?= $ubahvalue["Npm"]; ?>"><br>
        <label for="">Nama</label>
        <input type="text" name="nama" required value="<?= $ubahvalue["Nama"]; ?>"><br>
        <label for="">Kelas</label>
        <input type="text" name="kelas" required value="<?= $ubahvalue["Kelas"]; ?>"><br>
        <label for="">Email</label>
        <input type="text" name="email"  value="<?= $ubahvalue["Email"]; ?>"><br>
        <label for="">Nilai</label>
        <input type="text" name="nilai" required value="<?= $ubahvalue["Nilai"]; ?>"><br>
        <button type="submit" name="submit">Ubah</button>
        </form>

        <a href="admin.php">lihat data</a>
        
        <script src="" async defer></script>
    </body>
</html>