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

function ubah($data){
    global $conn;

    $npmtambah = htmlspecialchars($data["npm"]);
    $namatambah = htmlspecialchars($data["nama"]);
    $kelastambah = htmlspecialchars($data["kelas"]);
    $emailtambah = htmlspecialchars($data["email"]);
    $nilaitambah = htmlspecialchars($data["nilai"]);

    $mengubah ="UPDATE 3db01 SET 
            Npm = '$npmtambah',
            Nama = '$namatambah',
            Kelas = '$kelastambah',
            Email = '$emailtambah',
            Nilai = '$nilaitambah'

            WHERE Nama = '$namatambah'
    ";
    mysqli_query($conn, $mengubah);

    return mysqli_affected_rows($conn);
}

function cari($data){
    $hasilcarifungsi = "SELECT * FROM 3db01 
                WHERE
                Npm LIKE '%$data%' OR
                Nama LIKE '%$data%' OR
                Kelas LIKE '%$data%' OR
                Email LIKE '%$data%' OR
                Nilai LIKE '%$data%'
                ";
    return query($hasilcarifungsi);
}
?>