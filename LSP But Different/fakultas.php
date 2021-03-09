<head>
    <?php
    error_reporting(0); {
        //koneksi
        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "penilaian_mahasiswa");
        //insert
        if (isset($_POST['btn_simpan'])) {

            $fakultas = $_POST["fakultas"];


            $insert = "insert into fakultas
		(fakultas)
		values('" . $fakultas . "')";
            $sql_insert = mysqli_query($conn, $insert);
            header("location:fakultas_view.php");
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
                    <font face='comic sans MS'>Fakultas :</font><input type="text" name="fakultas" autocomplete="off" />
                </label><br>
                <br>
                <label>
                    <input type="submit" name="btn_simpan" value="simpan" />
                </label>
            </fieldset>
            </br>
        </form>