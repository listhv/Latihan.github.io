<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input data mahasiswa</title>
</head>
<body bgcolor="green">
<form action="tampilmahasiswa.php" method="post">
<b>Pengelolaan data mahasiswa</b>
<br>
<pre>
nama : <input type="text" name="nama" size="25" maxlength="50">
alamat : <input type="text" name="alamat" size="25" maxlength="50">
</pre>
jenis kelamin : <input type="radio" name="jeniskel" value="Laki-laki">laki-laki
                <input type="radio" name="jeniskel" value="Perempuan">perempuan 
<p>
pekerjaan: <select name="pekerjaan">
    <option value="-pilih-">
    <option value="pelajar">pelajar
    <option value="karyawan">karyawan
    <option value="wirausaha">wirausaha
    <option value="lain-lain">lain-lain
</select>
<p>
hobi : <input type="checkbox" name="hobi1" value="olahraga">olahraga
<input type="checkbox" name="hobi2" value="musik">musik
<input type="checkbox" name="hobi3" value="jalan-jalan">jalan-jalan
<p>

<input type="submit" value="kirim"><input type="reset" value="batal">
</form>
    
</body>
</html>