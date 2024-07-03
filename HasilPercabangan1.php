<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasil Input Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Hasil Input Nilai Mahasiswa/h1>
    <?php
    $hasil=(($_POST ['nilai 1'])*0.15 +($_POST ['nilai 2'])*0.15 + ($_POST ['nilai uts'])*0.2 + ($_POST ['nilai uas'])*0.3 + ($_POST ['nilai absen']));

    if (isset($_POST['nama'], $_POST['nim'], $_POST['kelas'], $_POST['mata_kuliah'], $_POST['nilai 1'],$_POST['nilai 2'],$_POST['nilai uts'],$_POST['nilai uas'],$_POST['nilai absen'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $kelas = $_POST['kelas'];
        $mata_kuliah = $_POST['mata_kuliah'];
        $nilai_1 = $_POST['nilai 1'];
        $nilai_2 = $_POST['nilai 2'];
        $nilai_uts = $_POST['nilai uts'];
        $nilai_uas= $_POST['nilai uas'];
        $nilai_absen = $_POST['nilai absen'];
        $hasil = '';
        $grade = '';

        if ($nilai >= 0 && $nilai < 50) {
            $grade = "E";
        } elseif ($nilai >= 50 && $nilai < 60) {
            $grade = "D";
        } elseif ($nilai >= 60 && $nilai < 75) {
            $grade = "C";
        } elseif ($nilai >= 75 && $nilai < 85) {
            $grade = "B";
        } elseif ($nilai >= 85 && $nilai <= 100) {
            $grade = "A";
        } else {
            $grade = "Nilai Anda di luar jangkauan";
        }

        echo "<div class='alert alert-success' role='alert'>";
        echo "Nama: $nama<br>";
        echo "NIM: $nim<br>";
        echo "Kelas: $kelas<br>";
        echo "Mata Kuliah: $mata_kuliah<br>";
        echo "Nilai: $nilai_1, dikonversi menjadi Grade: $grade";
        echo "</div>";
    } else {
        echo "<div class='alert alert-warning' role='alert'>";
        echo "Silakan isi form dan submit data.";
        echo "</div>";
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>