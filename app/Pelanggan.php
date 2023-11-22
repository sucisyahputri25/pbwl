<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Pelanggan extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_pelanggan";
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
        $pel_id = $_POST['pel_id'];
        $pel_nama = $_POST['pel_nama'];
        $pel_alamat = $_POST['pel_alamat'];
        $pel_hp = $_POST['pel_hp'];


        $sql = "INSERT INTO tb_pelanggan (pel_id, pel_nama, pel_alamat, pel_hp ) VALUES (:pel_id, :pel_nama, :pel_alamat, :pel_hp)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pel_id", $pel_id);
        $stmt->bindParam(":pel_nama", $pel_nama);
        $stmt->bindParam(":pel_alamat", $pel_alamat);
        $stmt->bindParam(":pel_hp", $pel_hp);
        $stmt->execute();
    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_pelanggan WHERE pel_id=:pel_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pel_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $pel_id = $_POST['pel_id'];
        $pel_nama = $_POST['pel_nama'];
        $pel_alamat = $_POST['pel_alamat'];
        $pel_hp = $_POST['pel_hp'];

        $sql = "UPDATE tb_pelanggan SET pel_id=:pel_id, pel_nama=:pel_nama, pel_hp=:pel_hp, pel_alamat=:pel_alamat WHERE pel_id=:pel_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pel_id", $pel_id);
        $stmt->bindParam(":pel_nama", $pel_nama);
        $stmt->bindParam(":pel_alamat", $pel_alamat);
        $stmt->bindParam(":pel_hp", $pel_hp);
        $stmt->execute();

    }
    public function delete($id)
    {

        $sql = "DELETE FROM tb_pelanggan WHERE pel_id=:pel_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pel_id", $id);
        $stmt->execute();

    }
}