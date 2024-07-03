<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>
<body>
<h1>Form Registrasi:</h1>
<form action="?php echo $_SERVER_SELF['PHP_SELF'];?" method="post">
<pre>
Isikan data dibawah ini    :
Nama                       :<input type="text" name="nama" size="25">
Alamat                     :<textarea input type="text" name="alamat" size="25" rows="5" cols="35"></textarea>
Tempat Lahir               :<input type="text" name="tempat" size="25">
Tanggal Lahir              :<input type="text" name="tanggal" size="25"></font>
</pre>
<pre>
Jenis Kelamin              :<input type="radio" name="jenis" value="Laki-Laki">Laki-Laki<input type="radio" name="jenis" value="Perempuan">Perempuan<p>
Pendidikan                  <select name="Pendidikan">
                            <option value="-pilih-">
                            <option value="SMA/SMK">SMA/SMK
                            <option value="D3">D3
                            <option value="S1">S1
                            </select>
<p><input type="Submit" value="Submit"><input type="reset" value="Cancel">  
</pre>
</form>
</body>
</html>

<html>
<head>
     <title>Tugas 06</title>
</head>
     <body>
<?php
                 $nama=$_POST['nama'];
                 $alamat=$_POST['alamat'];
                 $tempat=$_POST['tempat'];
                 $tanggal=$_POST['tanggal'];
                 $jenis=$_POST['jenis'];
                 $Pendidikan=$_POST['Pendidikan'];
?>
<b><h1>Data Registrasi</h1></b>
     <table border=1 width="500px">
                 <tr><td>Nama</td><td><?php echo $nama;?></td></tr>
                 <tr><td>Alamat</td><td><?php echo $alamat;?></td></tr>
                 <tr><td>Tempat Lahir</td><td><?php echo $tempat;?></td></tr>
                 <tr><td>Tanggal Lahir</td><td><?php echo $tanggal;?></td></tr>
                 <tr><td>Jenis Kelamin</td><td><?php echo $jenis;?></td></tr>
                 <tr><td>Pendidikan</td><td><?php echo $Pendidikan;?></td></tr>
     </table>
     <a href="formregistrasi.php">Back To Home</a>
</body>
</html>