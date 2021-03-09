<head>
   
    <?php
    error_reporting(0); {
        //koneksi
        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "penilaian_mahasiswa");
        //insert
        if (isset($_POST['btn_simpan'])) {
            $nim = $_POST["nim"];
            $nama = $_POST["nama"];
            $alamat = $_POST["alamat"];
            $no_telp = $_POST["no_telp"];
            $no_hp = $_POST["no_hp"];
            $hobi = $_POST["hobi"];
            $id_jurusan = $_POST["id_jurusan"];


            $insert = "insert into mahasiswa
		(nim,nama,alamat,no_telp,no_hp,hobi,id_jurusan)
		values('" . $nim . "','" . $nama . "','" . $alamat . "','" . $no_telp . "','" . $no_hp . "','" . $hobi . "','" . $id_jurusan . "')";
            $sql_insert = mysqli_query($conn, $insert);
            header("location:mahasiswa_view.php");
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
                    <font face='comic sans MS'>Nim :</font><input type="text" name="nim" autocomplete="off" />
                </label><br>
                <br>
                <label>
                    <font face='comic sans MS'>Nama :</font><input type="text" name="nama" autocomplete="off" />
                </label><br><br>
                <label>
                    <font face='comic sans MS'>Alamat :</font><input type="text" name="alamat" autocomplete="off" />
                </label><br><br>
                <label>
                    <font face='comic sans MS'>No telp :</font><input type="text" name="no_telp" autocomplete="off" />
                </label><br><br>
                <label>
                    <font face='comic sans MS'>No hp :</font><input type="text" name="no_hp" autocomplete="off" />
                </label><br><br>
                <label>
                    <font face='comic sans MS'>Hobi :</font><input type="text" name="hobi" autocomplete="off" />
                </label><br><br>
                <label>
                    <font face='comic sans MS'>Id jurusan :</font><input type="text" name="id_jurusan" autocomplete="off" />
                </label><br><br>
                <label>
                    <input type="submit" name="btn_simpan" value="simpan" />
                </label>
            </fieldset>
            </br>
        </form>