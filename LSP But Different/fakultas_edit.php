<?php
include_once("koneksi.php");
$id = $_POST["id"];
$fakultas = $_POST["fakultas"];


$query = "UPDATE fakultas SET 
		fakultas='$fakultas'
		WHERE id='$id'";
$hasil = mysqli_query($conn, $query);
if ($hasil) {
    header('location:fakultas_view.php');
}
