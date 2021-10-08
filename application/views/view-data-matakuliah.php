<html>

<head>
    <title>tampil mata kuliah</title>
</head>

<bod>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    tampil data mata kuliah
                </th>
            </tr>
            <tr>
                <td colspa="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>kode mtk</th>
                <th>:</th>
                <td>
                    <?= $kode; ?>
                </td>
            </tr>
            <tr>
                <td>nama mtk</td>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>sks</td>
                <td>:</td>
                <td>
                    <?= $sks; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('matakuliah'); ?>">kembali</a>
                </td> 
            </tr>
        </table>
    </center>
</body>

</html>