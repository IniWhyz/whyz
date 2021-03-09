<head>
    <?php
    include_once("koneksi.php");
    $id = $_GET['id'];


    $query = "SELECT * FROM penilaian WHERE id=" . $id;

    $hasil = mysqli_query($conn, $query);

    ?>
</head>

<body>
    <center>
        <br><br>
        <form method="post" action="penilaian_edit.php">

            <?php while ($data = mysqli_fetch_array($hasil)) { ?>

                <form>
                    <fieldset>
                        <h1>
                            <font face='Maiandra GD' size='6'> UBAH DATA
                        </h1>
                        </font>
                        <br>
                        <label>
                            <font face='comic sans MS'>ID Mahasiswa
                                <input type="id_mahasiswa" name="id_mahasiswa" value="<?php echo $data['id_mahasiswa'] ?>" />
                        </label></br>
                        <br>
                        <label>
                            <font face='comic sans MS'>ID Mapel
                                <input type="id_mapel" name="id_mapel" value="<?php echo $data['id_mapel'] ?>" />
                        </label></br>
                        <br>
                        <label>
                            <font face='comic sans MS'>Nilai
                                <input type="nilai" name="nilai" value="<?php echo $data['nilai'] ?>" />
                        </label></br>
                        <br>
                        <label>
                            <font face='comic sans MS'>Tanggal Ujian
                                <input type="date" name="tgl_ujian" value="<?php echo $data['tgl_ujian'] ?>" />
                        </label></br>
                        <br>
                        <label>
                            <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
                            <input type="submit" value="Edit" />
                        </label></br></font>
                        </br>
                    </fieldset>
    </center>
<?php }
?>
</form>
</body>