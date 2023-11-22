<?php

require_once "inc/Koneksi.php";
require_once "app/Pelanggan.php";

$pel = new App\Pelanggan();

if (isset($_POST['btn_simpan'])) {
    $pel->simpan();
    header("location:index.php?hal=pel_tampil");
}

if (isset($_POST['btn_update'])) {
    $pel->update();
    header("location:index.php?hal=pel_tampil");
}