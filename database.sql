CREATE TABLE IF NOT EXISTS tb_pelanggan (
    pel_id INT PRIMARY KEY,
    pel_nama VARCHAR(255) NOT NULL,
    pel_alamat VARCHAR(255) NOT NULL,
    pel_hp VARCHAR(15) NOT NULL
);

CREATE TABLE IF NOT EXISTS tb_layanan (
    lay_id INT PRIMARY KEY,
    lay_jenis VARCHAR(255) NOT NULL,
    lay_harga DECIMAL(10, 3) NOT NULL
);

CREATE TABLE IF NOT EXISTS tb_transaksi (
    trans_id INT PRIMARY KEY,
    trans_id_pelanggan INT,
    trans_id_layanan INT,
    trans_tgl_masuk DATE,
    trans_tgl_selesai DATE,
    trans_berat DECIMAL(5, 2) NOT NULL,
    trans_total DECIMAL(10, 3) NOT NULL,
    FOREIGN KEY (trans_id_pelanggan) REFERENCES tb_pelanggan(pel_id),
    FOREIGN KEY (trans_id_layanan) REFERENCES tb_layanan(lay_id)
);
