<?php
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "penilaian_mahasiswa");
$sqli_delete = "delete from jurusan where id='" . $_GET["id"] . "'";
$delete = mysqli_query($conn, $sqli_delete);
header("location:jurusan_view.php");
