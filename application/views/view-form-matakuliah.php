<html>
    
<head>
    <title>form input mahasiswa</title>
</head>

<body>
    <?php echo validation_errors(); ?>
    <center>
        <form action="<?= base_url('matakuliah/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        form input data mata kuliah
                    </th>   
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>kode mtk</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kode" id="kode">
                    </td>
                </tr>
                <tr>
                    <th>nama mtk</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>sks</th>
                    <td>:</td>
                    <td>
                        <select name="sks" id="sks">
                            <option value="">pilih sks</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" values="submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>
