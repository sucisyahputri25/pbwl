<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Layanan extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_layanan";
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
        $lay_id = $_POST['lay_id'];
        $lay_jenis = $_POST['lay_jenis'];
        $lay_harga = $_POST['lay_harga'];

        $sql = "INSERT INTO tb_layanan (lay_id, lay_jenis, lay_harga) VALUES (:lay_id, :lay_jenis, :lay_harga)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":lay_id", $lay_id);
        $stmt->bindParam(":lay_jenis", $lay_jenis);
        $stmt->bindParam(":lay_harga", $lay_harga);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_layanan WHERE lay_id=:lay_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":lay_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $lay_jenis = $_POST['lay_jenis'];
        $lay_harga = $_POST['lay_harga'];
        $lay_id = $_POST['lay_id'];

        $sql = "UPDATE tb_layanan SET lay_jenis=:lay_jenis, lay_harga=:lay_harga WHERE lay_id=:lay_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":lay_jenis", $lay_jenis);
        $stmt->bindParam(":lay_harga", $lay_harga);
        $stmt->bindParam(":lay_id", $lay_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_layanan WHERE lay_id=:lay_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":lay_id", $id);
        $stmt->execute();

    }

}