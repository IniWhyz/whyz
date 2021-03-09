<?php
include_once("koneksi.php");
$id = $_POST["id"];
$id_mahasiswa = $_POST["id_mahasiswa"];
$id_mapel = $_POST["id_mapel"];
$nilai = $_POST["nilai"];
$tgl_ujian = $_POST["tgl_ujian"];


$query = "UPDATE penilaian SET 
		id_mahasiswa='$id_mahasiswa',
        id_mapel = '$id_mapel',
        nilai='$nilai',
        tgl_ujian='$tgl_ujian'
		WHERE id='$id'";
$hasil = mysqli_query($conn, $query);
if ($hasil) {
    header('location:penilaian_view.php');
}
