<?php

require_once "inc/Koneksi.php";
require_once "app/Layanan.php";

$lay = new App\Layanan();

if (isset($_POST['btn_simpan'])) {
    $lay->simpan();
    header("location:index.php?hal=lay_tampil");
}

if (isset($_POST['btn_update'])) {
    $lay->update();
    header("location:index.php?hal=lay_tampil");
}