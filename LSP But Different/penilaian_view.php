 <script>
        function B() {
            location.replace("menu.php")
        }
    </script>
    <button type="submit" class="btn btn-info" onclick="B()"><b>Back</b></button>

<?php
if (isset($_GET['search'])) {

    $sear = $_GET['sear'];
    $query = "SELECT * FROM `penilaian`
	  	         
	  	          WHERE 
	  	         
	  	          id_mahasiswa LIKE '%$sear%' OR
                  id_mapel LIKE '%$sear%' OR
                  nilai LIKE '%$sear%' OR
                  tgl_ujian LIKE '%$sear%'
                  


	  	          ";
    $search_result = find($query);
} else {
    $query = "SELECT * FROM `penilaian`";
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
        location.replace("penilaian.php")
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
                <font face='Maiandra GD' size='6'>DATA PENILAIAN</font>
            </div>
            <br>
            <form method="GET" action="">
                <input type="" name="sear" autocomplete="off">
                <input type="submit" name='search' value="search">
            </form>
            <button class="button1" type="submit" onclick="backu()"><a href="penilaian.php"></a><b>ADD</b></button>
            <br></br>
            <form action="" method="post">
                <table border="1">
                    <tr>
                        <th>
                            <font face='candara'>ID
                        </th>

                        <th>
                            <font face='candara'> ID Mahasiswa
                        </th>

                        <th>
                            <font face='candara'>ID Mapel
                        </th>

                        <th>
                            <font face='candara'>Nilai
                        </th>

                        <th>
                            <font face='candara'>Tanggal Ujian
                        </th>

                        <th colspan="2">
                            <font face='candara'>Action
                        </th>
                        </font>
                    </tr>


                    <?php while ($data = mysqli_fetch_array($search_result)) : ?>

                        <tr>
                            <td><font face='Maiandra GD'><?php echo $data["id"]; ?></td>
                            <td><font face='Maiandra GD'><?php echo $data["id_mahasiswa"]; ?></td>
                            <td><font face='Maiandra GD'><?php echo $data["id_mapel"]; ?></td>
                            <td><font face='Maiandra GD'><?php echo $data["nilai"]; ?></td>
                            <td><font face='Maiandra GD'><?php echo $data["tgl_ujian"]; ?></td>

                            <td>
                                <font face='comic sans MS'>
                                    <a href="penilaian_editV2.php?id=<?php echo $data['id']; ?>"> Edit </a>
                            </td>
                            <td>
                                <font face='comic sans MS'>
                                    <a href="penilaian_delete.php?id=<?php echo $data['id']; ?>">Delete</a>
                            </td>
                            </font>
                        </tr>
    </fieldset>
<?php endwhile; ?>
</table>
</form>
</body>