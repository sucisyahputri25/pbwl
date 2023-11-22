<?php

$lay = new App\layanan;
$rows = $lay->tampil();

?>

<h2>layanan</h2>

<a href="index.php?hal=lay_input" class="btn">Add layanan</a>

<table>
    <tr>
        <th>NO</th>
        <th>ID LAYANAN</th>
        <th>JENIS</th>
        <th>HARGA</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php 
    $no = 1;
    foreach ($rows as $row) { ?>
    <tr>
    <td><?php echo $no++; ?></td>
        <td><?php echo $row['lay_id']; ?></td>
        <td><?php echo $row['lay_jenis']; ?></td>
        <td><?php echo $row['lay_harga']; ?></td>
        <td><a href="index.php?hal=lay_edit&id=<?php echo $row['lay_id']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=lay_delete&id=<?php echo $row['lay_id']; ?>" class="btn" onclick="return confirm('Apakah anda yakin?')">Delete</a></td>
    </tr>
    <?php } ?>
</table>
