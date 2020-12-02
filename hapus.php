<?php

include 'koneksi.php';


if(!isset($_GET["no"])){
    echo "nomor anggota tidak boleh kosong";
    exit;
}

$no = $_GET['no'];
$sql = "DELETE FROM tb_anggota WHERE no_anggota = '$no'";
$query = mysqli_query($link, $sql) or trigger_error("Query Failed! SQL: $query - Error: ".PHP_EOL.mysqli_error($link), E_USER_ERROR);
header("Refresh:0; url=tampil.php");
