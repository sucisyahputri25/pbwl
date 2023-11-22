<?php

$id = $_GET['id'];
$pel = new App\Pelanggan();

$row = $pel->edit($id);
?>

<h2>Edit Pelanggan</h2>

<form action="pel_proses.php" method="post">
    <input type="hidden" name="pel_id" value="<?php echo $row['pel_id']; ?>">
    <table>
        <tr>
            <td>ID PELANGGAN</td>
            <td><input type="text" name="pel_id" value="<?php echo $row['pel_id']; ?>"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="pel_nama" value="<?php echo $row['pel_nama']; ?>"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="pel_alamat" value="<?php echo $row['pel_alamat']; ?>"></td>
        </tr>
        <tr>
            <td>NO TELEPON</td>
            <td><input type="text" name="pel_hp" value="<?php echo $row['pel_hp']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>