<!DOCTYPE html>
<?php 

require 'funcitons.php';
if(isset($_POST["submit"])){
    $status = tambah($_POST);
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
        <h1>tambah data</h1>
        <form action="" method="post">
        <label for="">Npm</label>
        <input type="text" name="npm"><br>
        <label for="">Nama</label>
        <input type="text" name="nama"><br>
        <label for="">Kelas</label>
        <input type="text" name="kelas"><br>
        <label for="">Email</label>
        <input type="text" name="email"><br>
        <label for="">Nilai</label>
        <input type="text" name="nilai"><br>
        <button type="submit" name="submit">masukan</button>
        <button type="clear">clear</button>
        </form>

        <a href="admin.php">lihat data</a>
        
        <script src="" async defer></script>
    </body>
</html>