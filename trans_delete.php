<?php

$id = $_GET['id'];

$trans = new App\Transaksi();
$rows = $trans->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?hal=pel_tampil">Kembali</a>
</div>