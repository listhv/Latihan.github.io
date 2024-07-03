<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data karyawan</title>
</head>
<body>
    <h1>Data Karyawan >> Edit Data</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<pre>
NIK           : <input type="text" name="nik">
Nama          : <input type="text" name="nama">
Tempat lahir  : <input type="text" name="tempat">
Tanggal lahir : <input type="text" name="tanggal">
Alamat        : <textarea name="alamat" rows="5" cols="40"></textarea>
No telepon    : <input type="text" name="notelp">
Jabatan       : <select name="jabatan"><option value="-pilih-" ><option value="Manager">Manager<option value="OB">OB<option value="Marketing">Marketing</select>
Status        : <select name="status"><option value="-pilih-" ><option value="Tetap">Tetap<option value="tidak tetap">tidak tetap</select>


<input type="submit" value="SIMPAN"><input type="reset" value="BATAL">
</pre>
</form>

<?php
$nik =$_POST['nik'];
$nama =$_POST['nama'];
$tempat=$_POST['tempat'];
$tanggal=$_POST['tanggal'];
$alamat =$_POST['alamat'];
$notelp =$_POST['notelp'];
$jabatan=$_POST['jabatan'];
$status=$_POST['status'];
?>

<b><h1>Data Karyawan</h1></b>
     <table border=1 width="500px">
                 <tr><td>NIK</td><td><?php echo $nik;?></td></tr>
                 <tr><td>Nama</td><td><?php echo $nama;?></td></tr>
                 <tr><td>Tempat Lahir</td><td><?php echo $tempat;?></td></tr>
                 <tr><td>Tanggal Lahir</td><td><?php echo $tanggal;?></td></tr>
                 <tr><td>Alamat</td><td><?php echo $alamat;?></td></tr>
                 <tr><td>No telepon</td><td><?php echo $notelp;?></td></tr>
                 <tr><td>Jabatan</td><td><?php echo $jabatan;?></td></tr>
                 <tr><td>Status</td><td><?php echo $status;?></td></tr>
                 </table>
     <a href="kuis1.php">Back</a>
</body>
</html>