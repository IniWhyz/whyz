<head>
    <?php
    error_reporting(0); {
        //koneksi
        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "penilaian_mahasiswa");
        //insert
        if (isset($_POST['btn_simpan'])) {

            $mapel = $_POST["mapel"];
            $id_jurusan = $_POST["id_jurusan"];



            $insert = "insert into mata_pelajaran
		(mapel,id_jurusan)
		values('" . $mapel . "','" . $id_jurusan . "')";
            $sql_insert = mysqli_query($conn, $insert);
            header("location:mata_pelajaran_view.php");
        }
    }
    ?>
</head>

<body>
    <center>
        <br>
        <form action='' method='POST'>
            <fieldset>

                <h2>
                    <font face='Maiandra GD' size='6'>ISI DATA</font>
                </h2>
                <label>
                    <font face='comic sans MS'>Mapel :</font><input type="text" name="mapel" autocomplete="off" />
                </label><br>
                <br>
                <label>
                    <font face='comic sans MS'>Id jurusan :</font><input type="text" name="id_jurusan" autocomplete="off" />
                </label><br><br>
                <label>
                    <input type="submit" name="btn_simpan" value="simpan" />
                </label>
            </fieldset>
            </br>
        </form>