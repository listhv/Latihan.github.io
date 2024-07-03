<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $jumlah=5;
        $harga=20000;
        $total=$harga*$jumlah;

        // echo"jumlah beli :$jumlah";
        // echo"harga barang : $harga";
        // echo"total bayar :$total";
    ?>

    <table border=1>
        <tr>
            <td>jumlah beli </td>
            <td>harga barang </td>
            <td>total bayar </td>

        </tr>

        <tr>
            <td><?php echo "$jumlah" ?></td>
            <td><?php echo "$harga" ?></td>
            <td><?php echo "$total" ?></td>
        </tr>
    </table>
</body>
</html>