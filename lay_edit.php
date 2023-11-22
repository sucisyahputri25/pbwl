<?php

$id = $_GET['id'];
$lay = new App\Layanan();

$row = $lay->edit($id);
?>

<h2>Edit Layanan</h2>

<form action="lay_proses.php" method="post">
    <input type="hidden" name="lay_id" value="<?php echo $row['lay_id']; ?>">
    <table>
        <tr>
            <td>ID Layanan</td>
            <td><input type="text" name="lay_id" value="<?php echo $row['lay_id']; ?>"></td>
        </tr>
        <tr>
            <td>JENIS</td>
            <td><input type="text" name="lay_jenis" value="<?php echo $row['lay_jenis']; ?>"></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="lay_harga" value="<?php echo $row['lay_harga']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>