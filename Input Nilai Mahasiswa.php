<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$hasil=(($_POST ['uas'])*0.4 +($_POST ['uts'])*0.3 + ($_POST ['tgs'])*0.3 + ($_POST ['absen'])*0.3);

if(($hasil>=0)&&($hasil<=50))
    $grade="E";
elseif(($hasil>=50)&&($hasil<=70))
    $grade="C";
elseif(($hasil>=70)&&($hasil<=80))
    $grade="B";
else
    $grade="A";
?>
    nim         : <?php echo $_POST ['nim'];?><p>
    nama        : <?php echo $_POST ['nama'];?><p>
    kelas       : <?php echo $_POST ['kls'];?><p>
    jurusan     : <?php echo $_POST ['jrs'];?><p>
    nilai uas   : <?php echo $_POST ['uas'];?><p>
    nilai uts   : <?php echo $_POST ['uts'];?><p>
    nilai tugas : <?php echo $_POST ['tgs'];?><p>
    nilai absen : <?php echo $_POST ['absen'];?><p>
    Nilai Murni : <?php echo $hasil;?><p>
    Grade       : <?php echo $grade;?><p>

</body>
</html>