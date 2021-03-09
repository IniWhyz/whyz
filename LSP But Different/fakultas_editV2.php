<head>
    <?php
    include_once("koneksi.php");
    $id = $_GET['id'];


    $query = "SELECT * FROM fakultas WHERE id=" . $id;

    $hasil = mysqli_query($conn, $query);

    ?>
</head>

<body>
    <center>
        <br><br>
        <form method="post" action="fakultas_edit.php">

            <?php while ($data = mysqli_fetch_array($hasil)) { ?>

                <form>
                    <fieldset>
                        <h1>
                            <font face='Maiandra GD' size='6'> UBAH DATA
                        </h1>
                        </font>
                        <br>
                        <label>
                            <font face='comic sans MS'>Fakultas
                                <input type="fakultas" name="fakultas" value="<?php echo $data['fakultas'] ?>" />
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