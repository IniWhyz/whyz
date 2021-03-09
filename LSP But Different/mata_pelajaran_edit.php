<?php
include_once("koneksi.php");
$id = $_POST["id"];
$mapel = $_POST["mapel"];
$id_jurusan = $_POST["id_jurusan"];


$query = "UPDATE mata_pelajaran SET 
		mapel='$mapel',
        id_jurusan='$id_jurusan'
		WHERE id='$id'";
$hasil = mysqli_query($conn, $query);
if ($hasil) {
    header('location:mata_pelajaran_view.php');
}
