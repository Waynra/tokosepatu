<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        margin-top: 8%;
    }
    table, th, td {
            font-size: xx-large;
            line-height: 80px
        }
</style>
<body>
<center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Pembelian
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>No. Hp</td>
                <td>:</td>
                <td>
                    <?= $nohp; ?>
                </td>
            </tr>
            <tr>
                <td>Merk Sepatu</td>
                <td>:</td>
                <td>
                    <?= $merk; ?>
                </td>
            </tr>
            <tr>
                <td>Ukuran</td>
                <td>:</td>
                <td>
                    <?= $ukuran; ?>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>
                    <?= $harga;?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('sepatu'); ?>"></a>
                </td>
            </tr>
        </table>
        <p ><button><a  href="<?php echo base_url() . "index.php/sepatu"?>" style="font-size: xx-large; text-decoration: none;">Kembali</a></button></p>
    </center>
    
</body>
</html>