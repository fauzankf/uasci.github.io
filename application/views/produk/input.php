<!DOCTYPE html>
<html>

<head>
    <title>Input Produk</title>
</head>

<body>
    <?php echo form_open('produk/save') ?>
    <?php echo $judul ?>
    <table width="289" border="1">
        <form>
            <tr>
                <td>Kode Produk</td>
                <td><input type="text" name="kode_produk" id="kode_produk" placeholder="Masukan Kode produk"></td>
            </tr>

            <tr>
                <td>Nama produk</td>
                <td><input type="text" name="nama_produk" id="nama_produk" placeholder="Masukan Nama produk"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" id="harga" placeholder="Masukan Harga produk"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="text" name="stok" id="stok" placeholder="Masukan Stok produk"></td>
            </tr>

            <tr align="center">
                <td><input type="submit" name="button" id="button" value="Simpan"></td>
                <td><input type="reset" name="button2" id="button2" value="Batal"></td>
            </tr>
        </form>
    </table>
    <?php echo form_close() ?>
</body>

</html>