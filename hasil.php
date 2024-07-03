<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasil Input Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Hasil Input Nilai Mahasiswa</h1>
    <?php
    if (isset($_POST['nama'], $_POST['nim'], $_POST['kelas'], $_POST['mata_kuliah'], $_POST['nilai1'],$_POST['nilai2'],$_POST['nilaiuts'],$_POST['nilaiuas'],$_POST['nilaiabsen'],$_POST['Total'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $kelas = $_POST['kelas'];
        $mata_kuliah = $_POST['mata_kuliah'];
        $nilai1= $_POST['nilai1'];
        $nilai2= $_POST['nilai2'];
        $nilaiuts= $_POST['nilaiuts'];
        $nilaiuas = $_POST['nilaiuas'];
        $nilaiabsen = $_POST['nilaiabsen'];
        $Total = $_POST['Total'];
        $grade = '';

        $Total=(($_POST['nilai1'])*0.15 +($_POST ['nilai2'])*0.15 + ($_POST ['nilaiuts'])*0.2 + ($_POST ['nilaiuas'])*0.3 + ($_POST ['nilaiabsen'])*0.2);


        if ($Total >= 0 && $nilai < 50) {
            $grade = "E";
        } elseif ($Total >= 50 && $nilai < 60) {
            $grade = "D";
        } elseif ($Total >= 60 && $nilai < 75) {
            $grade = "C";
        } elseif ($Total >= 75 && $nilai < 85) {
            $grade = "B";
        } elseif ($Total >= 85 && $nilai <= 100) {
            $grade = "A";
        } else {
            $grade = "Nilai Anda di luar jangkauan";
        }

        echo "<div class='alert alert-success' role='alert'>";
        echo "Nama: $nama<br>";
        echo "NIM: $nim<br>";
        echo "Kelas: $kelas<br>";
        echo "Mata Kuliah: $mata_kuliah<br>";
        echo "nilai1: $nilai_1<br>";
        echo "nilai2: $nilai_2<br>";
        echo "nilaiuts: $nilai_uts<br>";
        echo "nilaiuas: $nilai_uas<br>";
        echo "nilaiabsen: $nilai_absen<br>";
        echo "Total:$Total, dikonversi menjadi Grade: $grade";
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