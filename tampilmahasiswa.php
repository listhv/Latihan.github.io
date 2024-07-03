<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa</title>
</head>
<body>
    <?php
    $nama =$_POST['nama'];
    $alamat =$_POST['alamat'];
    $jeniskel =$_POST['jeniskel'];
    $pekerjaan =$_POST['pekerjaan'];
    $hobi1 =$_POST['hobi1'];
    $hobi2=$_POST['hobi2'];
    $hobi3 =$_POST['hobi3'];
    ?>

    <table border=1 bgcolor="Cyan">
    <tr>
    <td colspam=1 align="center"><b>Data mahasiswa</b></td>
    </tr>
    <tr><td>nama</td><td><?php echo $nama;?></td></tr>
    <tr><td>alamat</td><td><?php echo $alamat;?></td></tr>
    <tr><td>jenis kelamin</td><td><?php echo $jeniskel;?></td></tr>
    <tr><td>pekerjaan</td><td><?php echo $pekerjaan;?></td></tr>
    <tr><td>hobi</td><td><?php echo $hobi1,",",$hobi2,",",$hobi3;?></td></tr>
   </table>
   <a href="formlatihan.php">INPUT DATA LAGI</a>
</body>
</html>