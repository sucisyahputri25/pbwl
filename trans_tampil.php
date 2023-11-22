<?php

$trans = new App\Transaksi;
$rows = $trans->tampil();

?>

<h2>Transaksi</h2>

<a href="index.php?hal=trans_input" class="btn">Add Transaksi</a>

<table>
    <tr>
        <th>NO</th>
        <th>ID TRANSAKSI</th>
        <th>ID PELANGGAN</th>
        <th>ID LAYANAN</th>
        <th>TANGGAL MASUK</th>
        <th>TANGGAL SELESAI</th>
        <th>BERAT</th>
        <th>TOTAL</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php 
    $no = 1;
    foreach ($rows as $row) { ?>
    <tr>
    <td><?php echo $no++; ?></td>
        <td><?php echo $row['trans_id']; ?></td>
        <td><?php echo $row['trans_id_pelanggan']; ?></td>
        <td><?php echo $row['trans_id_layanan']; ?></td>
        <td><?php echo $row['trans_tgl_masuk']; ?></td>
        <td><?php echo $row['trans_tgl_selesai']; ?></td>
        <td><?php echo $row['trans_berat']; ?> KG</td>
        <td><?php echo $row['trans_total']; ?></td>
        <td><a href="index.php?hal=trans_edit&id=<?php echo $row['trans_id']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=trans_delete&id=<?php echo $row['trans_id']; ?>" class="btn" onclick="return confirm('Apakah anda yakin?')">Delete</a></td>
    </tr>
    <?php } ?>
</table>