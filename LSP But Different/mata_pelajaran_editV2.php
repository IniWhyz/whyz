<head>
    <?php
    include_once("koneksi.php");
    $id = $_GET['id'];


    $query = "SELECT * FROM mata_pelajaran WHERE id=" . $id;

    $hasil = mysqli_query($conn, $query);

    ?>
</head>

<body>
    <center>
        <br><br>
        <form method="post" action="mata_pelajaran_edit.php">

            <?php while ($data = mysqli_fetch_array($hasil)) { ?>

                <form>
                    <fieldset>
                        <h1>
                            <font face='Maiandra GD' size='6'> UBAH DATA
                        </h1>
                        </font>
                        <br>
                        <label>
                            <font face='comic sans MS'>mapel
                                <input type="mapel" name="mapel" value="<?php echo $data['mapel'] ?>" />
                        </label></br>
                        <br>
                        <label>
                            <font face='comic sans MS'>ID Jurusan
                                <input type="id_jurusan" name="id_jurusan" value="<?php echo $data['id_jurusan'] ?>" />
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