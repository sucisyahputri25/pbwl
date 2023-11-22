<h2>Add TRANSAKSI</h2>

<form action="trans_proses.php" method="post">
    <table>
            <tr><input type="hidden" name="trans_id"></tr>
        <tr>
            <td>ID TRANSAKSI</td>
            <td><input type="text" name="trans_id"></td>
        </tr>
        <tr>
            <td>ID PELANGGAN</td>
            <td><input type="text" name="trans_id_pelanggan"></td>
        </tr>
        <tr>
            <td>ID LAYANAN</td>
            <td><input type="text" name="trans_id_layanan"></td>
        </tr>
        <tr>
            <td>TANGGAL MASUK</td>
            <td><input type="date" name="trans_tgl_masuk"></td>
        </tr>
        <tr>
            <td>TANGGAL SELESAI</td>
            <td><input type="date" name="trans_tgl_selesai"></td>
        </tr>
        <tr>
            <td>BERAT</td>
            <td><input type="text" name="trans_berat"></td>
        </tr><tr>
            <td>TOTAL</td>
            <td><input type="text" name="trans_total"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>

