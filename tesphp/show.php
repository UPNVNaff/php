<?php
    include"file2.php";
    $id=$_REQUEST['id'];
    $nama=$_REQUEST['nama'];
    $jurusan=$_REQUEST['jurusan'];
    $alamat=$_REQUEST['alamat'];
    $no_wa=$_REQUEST['no_wa'];

    $mysqli="SELECT * FROM anggota ORDER BY nama ASC";
    $result=mysqli_query($conn,$mysqli);

    if(!$result){
        echo "Data gagal ditampilkan!";
    }
?>