<html>
    <center>
    <?php
        include"file2.php";
        $id=$_REQUEST['id'];
        $nama=$_REQUEST['nama'];
        $jurusan=$_REQUEST['jurusan'];
        $alamat=$_REQUEST['alamat'];
        $no_wa=$_REQUEST['no_wa'];

        $mysqli="INSERT INTO anggota (`id`,`nama`,`jurusan`, `alamat`, `no_wa`) VALUES ('$id', '$nama', '$jurusan','$alamat','$no_wa')";
        $result=mysqli_query($conn,$mysqli);

        if($result){
            echo "Data berhasil disimpan";
        }else{
            echo "Data gagal disimpan";
        }
    ?>
    <head>
        <meta charset="utf-8">
        <title>Form</title>
    </head>
    <body>
    <div class="links">
        <br>
        <a href="file1.php">
        <button>Input ulang?</button>
        <a href="show.php">
        <button>Input ulang 2?</button>
        </a>
    </center>
    </body>
</html>