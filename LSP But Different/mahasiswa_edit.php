<?php
include_once("koneksi.php");
$id = $_POST["id"];
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$no_telp = $_POST["no_telp"];
$no_hp = $_POST["no_hp"];
$hobi = $_POST["hobi"];
$id_jurusan = $_POST["id_jurusan"];

$query = "UPDATE mahasiswa SET 
		nim='$nim',
        nama='$nama',
        alamat='$alamat',
        no_telp='$no_telp',
        no_hp='$no_hp',
        hobi='$hobi',
        id_jurusan='$id_jurusan'
		WHERE id='$id'";
$hasil = mysqli_query($conn, $query);
if ($hasil) {
    header('location:mahasiswa_view.php');
}
