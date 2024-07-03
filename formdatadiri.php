<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>
<body>
<h1>Form Registrasi</h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<pre>
Isikan data dibawah ini:
Nama          : <input type="text" name="nama">
Alamat        : <textarea name="alamat" rows="5" cols="40"></textarea>
Tempat lahir  : <input type="text" name="tempat">
Tanggal lahir : <input type="date" name="tanggal">
Jenis Kelamin : <input type="radio" name="jenis" value="laki-laki">laki-laki
                <input type="radio" name="jenis" value="perempuan">perempuan<p>
Pendidikan    : <select name="pendidikan"><option value="-pilih-" ><option value="SMA/SMK">SMA/SMK<option value="D3">D3<option value="S1">S1</select>

<input type="submit" value="TAMPIL"><input type="reset" value="BATAL">
</pre>
</form>

<?php
$nama =$_POST['nama'];
$alamat =$_POST['alamat'];
$tempat=$_POST['tempat'];
$tanggal=$_POST['tanggal'];
$jenis=$_POST['jenis'];
$pendidikan=$_POST['pendidikan'];
if(!empty($nama)){
    echo "nama           :$nama<br>";}
if(!empty($alamat)){
    echo "alamat         :$alamat<br>";}
if(!empty($tempat)){
    echo "tempat lahir   :$tempat<br>";}
if(!empty($tanggal)){
    echo "tanggal lahir  :$tanggal<br>";}
if(!empty($jenis)){
    echo "jenis kelamin  :$jenis<br>";}
if(!empty($pendidikan)){
    echo "pendidikan     :$pendidikan<br>";}
?>

<b><h1>Data Registrasi</h1></b>
     <table border=1 width="500px">
                 <tr><td>Nama</td><td><?php echo $nama;?></td></tr>
                 <tr><td>Alamat</td><td><?php echo $alamat;?></td></tr>
                 <tr><td>Tempat Lahir</td><td><?php echo $tempat;?></td></tr>
                 <tr><td>Tanggal Lahir</td><td><?php echo $tanggal;?></td></tr>
                 <tr><td>Jenis Kelamin</td><td><?php echo $jenis;?></td></tr>
                 <tr><td>Pendidikan</td><td><?php echo $pendidikan;?></td></tr>
     </table>
     <a href="formregistrasi.php">Back To Home</a>

</body>
</html>