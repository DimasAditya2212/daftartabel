<!DOCTYPE html>
<?php
    if(isset($_POST["submit"])){
        if($_POST["username"] == "admin" && $_POST["password"] == "admin"){
            header("location: admin.php");
        } else{
            $error = true;
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
        <h1>silahkan login</h1>
            <?php if(isset($error)) :?>
                <p>anda salah masukan</p>
            <?php endif ?>
        <form action="" method="post">
            <label for="">Masukan username</label>
            <input type="text" name="username"><br>
            <label for="">Masukan Password</label>
            <input type="password" name="password"><br>
            <button type="submit" name="submit">Login</button>
            <button type="clear" name="clear">Ulangi</button>


        </form>
        
        <script src="" async defer></script>
    </body>
</html>