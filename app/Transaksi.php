<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Transaksi extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_transaksi";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $trans_id = $_POST['trans_id'];
        $trans_id_pelanggan = $_POST['trans_id_pelanggan'];
        $trans_id_layanan = $_POST['trans_id_layanan'];
        $trans_tgl_masuk = $_POST['trans_tgl_masuk'];
        $trans_tgl_selesai = $_POST['trans_tgl_selesai'];
        $trans_berat = $_POST['trans_berat'];
        $trans_total = $_POST['trans_total'];

        $sql  ="INSERT INTO tb_transaksi (trans_id, trans_id_pelanggan, trans_id_layanan, trans_tgl_masuk, trans_tgl_selesai, trans_berat, trans_total ) VALUES (:trans_id, :trans_id_pelanggan, :trans_id_layanan, :trans_tgl_masuk, :trans_tgl_selesai, :trans_berat, :trans_total)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":trans_id", $trans_id);
        $stmt->bindParam(":trans_id_pelanggan", $trans_id_pelanggan);
        $stmt->bindParam(":trans_id_layanan", $trans_id_layanan);
        $stmt->bindParam(":trans_tgl_masuk", $trans_tgl_masuk);
        $stmt->bindParam(":trans_tgl_selesai", $trans_tgl_selesai);
        $stmt->bindParam(":trans_berat", $trans_berat);
        $stmt->bindParam(":trans_total", $trans_total);
        $stmt->execute();
    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_transaksi WHERE trans_id=:trans_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":trans_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $trans_id = $_POST['trans_id'];
        $trans_id_pelanggan = $_POST['trans_id_pelanggan'];
        $trans_id_layanan = $_POST['trans_id_layanan'];
        $trans_tgl_masuk = $_POST['trans_tgl_masuk'];
        $trans_tgl_selesai = $_POST['trans_tgl_selesai'];
        $trans_berat = $_POST['trans_berat'];
        $trans_total = $_POST['trans_total'];

        $sql = "UPDATE tb_transaksi SET trans_id=:trans_id, trans_id_pelanggan=:trans_id_pelanggan, trans_id_layanan=:trans_id_layanan, trans_tgl_masuk=:trans_tgl_masuk, trans_tgl_selesai=:trans_tgl_selesai, trans_berat=:trans_berat, trans_total=:trans_total WHERE trans_id=:trans_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":trans_id", $trans_id);
        $stmt->bindParam(":trans_id_pelanggan", $trans_id_pelanggan);
        $stmt->bindParam(":trans_id_layanan", $trans_id_layanan);
        $stmt->bindParam(":trans_tgl_masuk", $trans_tgl_masuk);
        $stmt->bindParam(":trans_tgl_selesai", $trans_tgl_selesai);
        $stmt->bindParam(":trans_berat", $trans_berat);
        $stmt->bindParam(":trans_total", $trans_total);
        $stmt->execute();

    }
    public function delete($id)
    {

        $sql = "DELETE FROM tb_transaksi WHERE trans_id=:trans_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":trans_id", $id);
        $stmt->execute();

    }
}