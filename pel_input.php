<h2>Add PELANGGAN</h2>

<form action="pel_proses.php" method="post">
    <table>
            <tr><input type="hidden" name="pel_id"></tr>
        <tr>
            <td>PELANGGAN ID</td>
            <td><input type="text" name="pel_id"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="pel_nama"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="pel_alamat"></td>
        </tr>
        <tr>
            <td>NO TELEPON</td>
            <td><input type="text" name="pel_hp"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>