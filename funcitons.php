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

function tambah($data){
    global $conn;

    $npmtambah = htmlspecialchars($data["npm"]);
    $namatambah = htmlspecialchars($data["nama"]);
    $kelastambah = htmlspecialchars($data["kelas"]);
    $emailtambah = htmlspecialchars($data["email"]);
    $nilaitambah = htmlspecialchars($data["nilai"]);

    $menambahkan ="INSERT INTO 3db01 VALUES ('$npmtambah', '$namatambah', '$kelastambah','$emailtambah', '$nilaitambah')";
    mysqli_query($conn, $menambahkan);

    return mysqli_affected_rows($conn);
}
function hapus($data){
    global $conn;
    mysqli_query($conn,"DELETE FROM 3db01 WHERE Npm = '$data'" );
    header("location: admin.php");
}

?>