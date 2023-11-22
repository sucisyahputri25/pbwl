<h2>Add LAYANAN</h2>

<form action="lay_proses.php" method="post">
    <table>
        <tr><input type="hidden" name="lay_id"></tr>
        <tr>
            <td>ID LAYANAN</td>
            <td><input type="text" name="lay_id"></td>
        </tr>
        <tr>
            <td>JENIS</td>
            <td><input type="text" name="lay_jenis"></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="lay_harga"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>