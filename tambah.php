<h2>TAMBAH DATA ANGGOTA PERPUSTAKAAN</h2>


<form action="#" method="POST">
    <table>
        <tr>
            <td>Nomor Anggota</td>
            <td><input type="text" name="no_anggota" value="" placeholder="knggota" required></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="" placeholder="kama" required></td>
        </tr>
        <tr>
            <td>Kelamin</td>
            <td>
                <select name="sex" required>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan<option>
                </select>
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <input type="submit" value="Simpan" name="submit">
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

        $query = "INSERT INTO tb_anggota (no_anggota, nama, sex) VALUES ('$no_anggota', '$nama', '$sex')";

        $insert = mysqli_query($link, $query) or trigger_error("Query Failed! SQL: $query - Error: ".PHP_EOL.mysqli_error($link), E_USER_ERROR);
        header("Refresh:0; url=tampil.php");
    }
?>