<h2>Cek Kategori Usia Mahasiswa</h2>

<form method="POST">
    <input type="text" placeholder="Masukkan Nama" name="nama" required>
    <br><br>

    <input type="number" placeholder="Masukkan Umur" name="umur" required>
    <br><br>

    <button type="submit" name="submit">Cek Kategori</button>
</form>

<?php

if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $umur = (int) $_POST['umur'];

    if ($umur < 13) {
        $kategori = "Anak-anak";
    } elseif ($umur <= 17) {
        $kategori = "Remaja";
    } elseif ($umur <= 59) {
        $kategori = "Dewasa";
    } else {
        $kategori = "Lansia";
    }

    echo "<p>Nama : $nama</p>";
    echo "<p>Umur : $umur tahun</p>";
    echo "<p>Kategori Usia : $kategori</p>";
}

?>