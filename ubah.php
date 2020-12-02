<?php
include 'koneksi.php';

if(!isset($_GET["no"])){
    echo "nomor anggota tidak boleh kosong";
    exit;
}

$noanggotaedit = $_GET['no'];
$sql = "SELECT * FROM tb_anggota WHERE no_anggota = '$noanggotaedit' LIMIT 1";
$query = mysqli_query($link, $sql) or trigger_error("Query Failed! SQL: $query - Error: ".PHP_EOL.mysqli_error($link), E_USER_ERROR);
$data = mysqli_fetch_array($query);

?>

<form action="#" method="POST">
    <table>
        <tr>
            <td>Nomor Anggota</td>
            <td><input type="text" name="no_anggota" value="<?= $data['no_anggota'] ?>" placeholder="knggota" required></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?= $data['nama'] ?>" placeholder="kama" required></td>
        </tr>
        <tr>
            <td>Kelamin</td>
            <td>
                <select name="sex" required>
                    <option value="L" <?php if($data['sex'] == "L") echo 'selected'; ?> > Laki-laki</option>
                    <option value="P" <?php if($data['sex'] == "P") echo 'selected'; ?> > Perempuan<option>
                </select>
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <input type="submit" value="Ubah" name="submit">
            </td>
        </tr>
    </table>

</form>

<?php
    include "koneksi.php";

    if(isset($_POST["submit"])){
        $no_anggota = $_POST["no_anggota"];
        $nama = $_POST["nama"];
        $sex = $_POST["sex"];

        $query = "UPDATE tb_anggota  SET no_anggota = '$no_anggota', nama = '$nama', sex = '$sex' WHERE no_anggota = '$noanggotaedit'";

        $insert = mysqli_query($link, $query) or trigger_error("Query Failed! SQL: $query - Error: ".PHP_EOL.mysqli_error($link), E_USER_ERROR);
        header("Refresh:0; url=tampil.php");
    }
?>
