<?php

$id = $_GET['id'];
$trans = new App\Transaksi();

$row = $trans->edit($id);
?>

<h2>Edit Transaksi</h2>

<form action="trans_proses.php" method="post">
    <input type="hidden" name="trans_id" value="<?php echo $row['trans_id']; ?>">
    <table>
        <tr>
            <td>ID Transaksi</td>
            <td><input type="text" name="trans_id" value="<?php echo $row['trans_id']; ?>"></td>
        </tr>
        <tr>
            <td>ID PELANGGAN</td>
            <td><input type="text" name="trans_id_pelanggan" value="<?php echo $row['trans_id_pelanggan']; ?>"></td>
        </tr>
        <tr>
            <td>ID LAYANAN</td>
            <td><input type="text" name="trans_id_layanan" value="<?php echo $row['trans_id_layanan']; ?>"></td>
        </tr>
        <tr>
            <td>TANGGAL MASUK</td>
            <td><input type="text" name="trans_tgl_masuk" value="<?php echo $row['trans_tgl_masuk']; ?>"></td>
        </tr>
        <tr>
            <td>TANGGAL SELESAI</td>
            <td><input type="text" name="trans_tgl_selesai" value="<?php echo $row['trans_tgl_selesai']; ?>"></td>
        </tr>
        <tr>
            <td>BERAT</td>
            <td><input type="text" name="trans_berat" value="<?php echo $row['trans_berat']; ?>"></td>
        </tr>
        <tr>
            <td>TOTAL</td>
            <td><input type="text" name="trans_total" value="<?php echo $row['trans_total']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>

