<?php
include "koneksi.php";
$sql = "select * from tb_anggota";
$result = mysqli_query($link, $sql);
?>
<h2>DAFTAR ANGGOTA PERPUSTAKAAN</h2>
<br>
    <a href="tambah.php">Tambah Data</a>
<br>
<br>
<br>

<table border='1'>
    <tr>
        <th>Nomor</th>
        <th>No.Anggota</th>
        <th>Nama Amggota</th>
        <th>Kelamin</th>
        <th>Option</th>
    </tr>
    <?php
    $itenary = 1;
    while ($temp = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td align='center'><?= $itenary++ ?></td>
            <td align='center'><?php echo $temp[0]; ?></td>
            <td><?php echo $temp[1]; ?></td>
            <td align='center'><?php echo $temp[2]; ?></td>
            <td>
                <a href="ubah.php?no=<?= $temp[0] ?>"> edit </a>
                ||
                <a href="hapus.php?no=<?= $temp[0] ?>"> hapus </a>
            </td>
        </tr>
    <?php
    };
    ?>
</table>

<br>
