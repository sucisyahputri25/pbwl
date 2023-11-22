<?php

$id = $_GET['id'];

$kat = new App\Pelanggan();
$rows = $kat->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?hal=pel_tampil">Kembali</a>
</div>