<head>
    <?php
    include_once("koneksi.php");
    $id = $_GET['id'];


    $query = "SELECT * FROM mahasiswa WHERE id=" . $id;

    $hasil = mysqli_query($conn, $query);

    ?>
</head>

<body>
    <center>
        <br><br>
        <form method="post" action="mahasiswa_edit.php">

            <?php while ($data = mysqli_fetch_array($hasil)) { ?>

                <form>
                    <fieldset>
                        <h1>
                            <font face='Maiandra GD' size='6'> UBAH DATA
                        </h1>
                        </font>
                        <br>
                        <label>
                            <font face='comic sans MS'>nim
                                <input type="nim" name="nim" value="<?php echo $data['nim'] ?>" />
                        </label></br>
                        <br>
                        <label>
                            <font face='comic sans MS'>nama
                                <input type="nama" name="nama" value="<?php echo $data['nama'] ?>" />
                        </label></br>
                        <br>
                        <label>
                            <font face='comic sans MS'>alamat
                                <input type="alamat" name="alamat" value="<?php echo $data['alamat'] ?>" />
                        </label></br>
                        <br>
                        <label>
                            <font face='comic sans MS'>no telp
                                <input type="no_telp" name="no_telp" value="<?php echo $data['no_telp'] ?>" />
                        </label></br>
                        <br>
                        <label>
                            <font face='comic sans MS'>No hp
                                <input type="no_hp" name="no_hp" value="<?php echo $data['no_hp'] ?>" />
                        </label></br>
                        <br>
                        <label>
                            <font face='comic sans MS'>hobi
                                <input type="hobi" name="hobi" value="<?php echo $data['hobi'] ?>" />
                        </label></br>
                        <br>
                        <label>
                            <font face='comic sans MS'>ID jurusan
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