<?php

require_once "inc/Koneksi.php";
require_once "app/Transaksi.php";

$trans = new App\Transaksi();

if (isset($_POST['btn_simpan'])) {
    $trans->simpan();
    header("location:index.php?hal=trans_tampil");
}

if (isset($_POST['btn_update'])) {
    $trans->update();
    header("location:index.php?hal=trans_tampil");
}