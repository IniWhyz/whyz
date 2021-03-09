<style type="text/css">
    body {
        background-image: url(19066.jpg);
        background-size: 100% 752px;
    }

    .container {
        perspective: 320px;
    }

    .button {
        display: block;
        margin: 40px;
        width: 240px;
        height: 80px;
        border: none;
        background-color: #e15f41;
        color: #fff;
        transition: 0.5s;
        font-size: 18px;
        border-radius: 6px;
        outline: none;
        cursor: pointer;
    }

    .button:hover {
        transform: rotateX(14deg);
        box-shadow: 0 15px 15px #e15f41;
    }

    .button:hover {
        color: white;
        background: red;
        box-shadow: 0 0 10px red, 0 0 40px red, 0 0 80px red;
    }

    .logout {
        display: block;
        margin-top: -700px;
        margin-right: -1140px;
        width: 130px;
        height: 55px;
        border: none;
        transition: 0.5s;
        font-size: 18px;
        border-radius: 6px;
        background-color: white;
    }

    .logout:hover {
        color: white;
        background: black;
        box-shadow: 0 0 10px white, 0 0 40px white, 0 0 80px white;
    }
</style>

<head>
    <script>
        function fakultas() {
            location.replace("fakultas.php")
        }

        function jurusan() {
            location.replace("jurusan.php")
        }

        function mahasiswa() {
            location.replace("mahasiswa.php")
        }

        function mata_pelajaran() {
            location.replace("mata_pelajaran.php")
        }

        function penilaian() {
            location.replace("penilaian.php")
        }

        function logout() {
            location.replace("logout.php")
        }
    </script>
</head>

<body>
    <br></br>
    <center>
        <td>
            <font face='Maiandra GD' size='10' color='white'>
                <b>Menu</b>
            </font>
        </td>

        <div class="container">
            <button class="button btn1" type="submit" onclick="fakultas()">
                <a href="fakultas.php"></a>
                <b>Fakultas</b>
            </button>

            <button class="button btn2" type="submit" onclick="jurusan()">
                <a href="jurusan.php"></a>
                <b>Jurusan</b>
            </button>

            <button class="button btn3" type="submit" onclick="mahasiswa()">
                <a href="mahasiswa.php"></a>
                <b>Mahasiswa</b>
            </button>

            <button class="button btn4" type="submit" onclick="mata_pelajaran()">
                <a href="mata_pelajaran.php"></a>
                <b>Mata Pelajaran</b>
            </button>

            <button class="button btn5" type="submit" onclick="penilaian()">
                <a href="penilaian.php"></a>
                <b>Penilaian</b>
            </button>

            <button class="logout" type="submit" onclick="logout()">
                <a href="logout.php"></a>
                <b>LogOut</b></font>
            </button>
        </div>
        <br></br>
    </center>
</body>