<?php 
$conn = mysqli_connect("localhost", "root", "","git_daftar_mahasiswa");

function query($data){
    global $conn;

    $wadah = [];
    $result = mysqli_query($conn,$data);
        while($hasil = mysqli_fetch_assoc($result)){
            $wadah[] = $hasil;
        }
    return $wadah;
}

?>