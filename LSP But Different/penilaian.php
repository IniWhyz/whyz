<head>
    <?php
    error_reporting(0); {
        //koneksi
        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "penilaian_mahasiswa");
        //insert
        if (isset($_POST['btn_simpan'])) {

            $id_mahasiswa = $_POST["id_mahasiswa"];
            $id_mapel = $_POST["id_mapel"];
            $nilai = $_POST["nilai"];
            $tgl_ujian = $_POST["tgl_ujian"];



            $insert = "insert into penilaian
		(id_mahasiswa,id_mapel,nilai,tgl_ujian)
		values('" . $id_mahasiswa . "','" . $id_mapel . "','" . $nilai . "','" . $tgl_ujian . "')";
            $sql_insert = mysqli_query($conn, $insert);
            header("location:penilaian_view.php");
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
                    <font face='comic sans MS'>ID mahasiswa :</font><input type="text" name="id_mahasiswa" autocomplete="off" />
                </label><br>
                <br>
                <label>
                    <font face='comic sans MS'>ID Mapel :</font><input type="text" name="id_mapel" autocomplete="off" />
                </label><br><br>
                <label>
                    <font face='comic sans MS'>Nilai :</font><input type="text" name="nilai" autocomplete="off" />
                </label><br><br>
                <label>
                    <font face='comic sans MS'>Tanggal Ujian :</font><input type="date" name="tgl_ujian" />
                </label><br><br>

                <label>
                    <input type="submit" name="btn_simpan" value="simpan" />
                </label>
            </fieldset>
            </br>
        </form>