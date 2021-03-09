<head>
    
    <?php
    error_reporting(0); {
        //koneksi
        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "penilaian_mahasiswa");
        //insert
        if (isset($_POST['btn_simpan'])) {

            $jurusan = $_POST["jurusan"];
            $id_fakultas = $_POST["id_fakultas"];


            $insert = "insert into jurusan
		(jurusan,id_fakultas)
		values('" . $jurusan . "','" . $id_fakultas . "')";
            $sql_insert = mysqli_query($conn, $insert);
            header("location:jurusan_view.php");
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
                    <font face='comic sans MS'>Jurusan :</font><input type="text" name="jurusan" autocomplete="off" />
                </label><br>
                <br>
                <label>
                    <font face='comic sans MS'>ID Fakultas :</font><input type="text" name="id_fakultas" autocomplete="off" />
                </label><br><br>
                <label>
                    <input type="submit" name="btn_simpan" value="simpan" />
                </label>
            </fieldset>
            </br>
        </form>