 <script>
        function B() {
            location.replace("menu.php")
        }
    </script>
    <button type="submit" class="btn btn-info" onclick="B()"><b>Back</b></button>

<?php
if (isset($_GET['search'])) {

    $sear = $_GET['sear'];
    $query = "SELECT * FROM `mahasiswa`
	  	         
	  	          WHERE 
	  	         
	  	          nim LIKE '%$sear%' OR
                  nama LIKE '%$sear%' OR
                  alamat LIKE '%$sear%' OR
                  no_telp LIKE '%$sear%' OR
                  no_hp LIKE '%$sear%' OR
                  hobi LIKE '%$sear%' OR
                  id_jurusan LIKE '%$sear%' 


	  	          ";
    $search_result = find($query);
} else {
    $query = "SELECT * FROM `mahasiswa`";
    $search_result = find($query);
}

function find($query)
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "penilaian_mahasiswa");
    $filter_result = mysqli_query($conn, $query);
    return $filter_result;
}

?>
<script>
    function backu() {
        location.replace("mahasiswa.php")
    }
</script>

<head>

    <title>You can see this</title>

</head>

<body>
    <br><br>
    <fieldset>
        <center>
            <br>
            <div class="TITLE">
                <font face='Maiandra GD' size='6'>DATA MAHASISWA</font>
            </div>
            <br>
            <form method="GET" action="">
                <input type="" name="sear" autocomplete="off">
                <input type="submit" name='search' value="search">
            </form>
            <button class="button1" type="submit" onclick="backu()"><a href="mahasiswa.php"></a><b>ADD</b></button>
            <br></br>
            <form action="" method="post">
                <table border="1">
                    <tr>
                        <th>
                            <font face='candara'>ID
                        </th>

                        <th>
                            <font face='candara'>Nim
                        </th>

                        <th>
                            <font face='candara'>Nama
                        </th>

                        <th>
                            <font face='candara'>Alamat
                        </th>

                        <th>
                            <font face='candara'>NO Telp
                        </th>

                        <th>
                            <font face='candara'>No hp
                        </th>

                        <th>
                            <font face='candara'>hobi
                        </th>

                        <th>
                            <font face='candara'>ID Jurusan
                        </th>

                        <th colspan="2">
                            <font face='candara'>Action
                        </th>
                        </font>
                    </tr>


                    <?php while ($data = mysqli_fetch_array($search_result)) : ?>

                        <tr>
                            <td><font face='Maiandra GD'><?php echo $data["id"]; ?></td>
                            <td><font face='Maiandra GD'><?php echo $data["nim"]; ?></td>
                            <td><font face='Maiandra GD'><?php echo $data["nama"]; ?></td>
                            <td><font face='Maiandra GD'><?php echo $data["alamat"]; ?></td>
                            <td><font face='Maiandra GD'><?php echo $data["no_telp"]; ?></td>
                            <td><font face='Maiandra GD'><?php echo $data["no_hp"]; ?></td>
                            <td><font face='Maiandra GD'><?php echo $data["hobi"]; ?></td>
                            <td><font face='Maiandra GD'><?php echo $data["id_jurusan"]; ?></td>

                            <td>
                                <font face='comic sans MS'>
                                    <a href="mahasiswa_editV2.php?id=<?php echo $data['id']; ?>"> Edit </a>
                            </td>
                            <td>
                                <font face='comic sans MS'>
                                    <a href="mahasiswa_delete.php?id=<?php echo $data['id']; ?>">Delete</a>
                            </td>
                            </font>
                        </tr>
    </fieldset>
<?php endwhile; ?>
</table>
</form>
</body>