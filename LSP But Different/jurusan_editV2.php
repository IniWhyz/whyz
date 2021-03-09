<head>
    <?php
    include_once("koneksi.php");
    $id = $_GET['id'];


    $query = "SELECT * FROM jurusan WHERE id=" . $id;

    $hasil = mysqli_query($conn, $query);

    ?>
</head>

<body>
    <center>
        <br><br>
        <form method="post" action="jurusan_edit.php">

            <?php while ($data = mysqli_fetch_array($hasil)) { ?>

                <form>
                    <fieldset>
                        <h1>
                            <font face='Maiandra GD' size='6'> UBAH DATA
                        </h1>
                        </font>
                        <br>
                        <label>
                            <font face='comic sans MS'>Jurusan
                                <input type="jurusan" name="jurusan" value="<?php echo $data['jurusan'] ?>" />
                        </label></br>
                        <br>
                        <label>
                            <font face='comic sans MS'>ID Fakultas
                                <input type="id_fakultas" name="id_fakultas" value="<?php echo $data['id_fakultas'] ?>" />
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