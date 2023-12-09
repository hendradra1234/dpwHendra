<?php
include 'dbConnection.php';
$nim = $_POST['nim'];
$name = $_POST['nm_lengkap'];
$tmptLahir = $_POST['tmp_lahir'];
$tglLahir = $_POST['tgl_lahir'];
$jenisKelamin = $_POST['jk'];

$result = mysqli_query($connection, "INSERT INTO tbl_mahasiswa VALUES('$nim', '$name', '$tmptLahir', '$tglLahir', '$jenisKelamin');");

if($result) {
    echo "<h1>Error, Cannot save Data</h1>";
} else {
    echo "<h1>Data Saved Successfully</h1>";
}
?>