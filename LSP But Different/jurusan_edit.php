<?php
include_once("koneksi.php");
$id = $_POST["id"];
$jurusan = $_POST["jurusan"];
$id_fakultas = $_POST["id_fakultas"];


$query = "UPDATE jurusan SET 
		jurusan='$jurusan',
        id_fakultas='$id_fakultas'
		WHERE id='$id'";
$hasil = mysqli_query($conn, $query);
if ($hasil) {
    header('location:jurusan_view.php');
}
