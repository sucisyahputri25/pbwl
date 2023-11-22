<?php

$id = $_GET['id'];

$lay = new App\Layanan();
$rows = $lay->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?hal=lay_tampil">Kembali</a>
</div>