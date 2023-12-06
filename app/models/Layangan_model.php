<?php

class Layangan_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllLayang()
    {
        $this->db->query('SELECT * FROM tabel_layangan JOIN tabel_jenis ON tabel_layangan.id_jenis = tabel_jenis.id_jenis JOIN tabel_kategori ON tabel_layangan.id_kategori = tabel_kategori.id_kategori;');
        return $this->db->fetchAll();
    }

    public function getLayanganByID($id)
    {
        $this->db->query('SELECT * FROM tabel_Layangan WHERE id=:id ');
        $this->db->bind('id', $id);
        return $this->db->fetch();
    }

    public function addDataLayangan($data)
    {
        $query = "INSERT INTO tabel_layangan (foto_layangan, nama, ukuran, no_layangan, ukuran_tali, warna_layangan, id_jenis, id_kategori) VALUES (:foto_layangan, :nama, :ukuran, :no_layangan, :ukuran_tali, :warna_layangan, :id_jenis, :id_kategori)";

        $this->db->query($query);
        $this->db->bind(':foto_layangan', $data["foto_layangan"]);
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':ukuran', $data['ukuran']);
        $this->db->bind(':no_layangan', $data['no_layangan']);
        $this->db->bind(':ukuran_tali', $data['ukuran_tali']);
        $this->db->bind(':warna_layangan', $data['warna_layangan']);
        $this->db->bind(':id_jenis', $data['id_jenis']);
        $this->db->bind(':id_kategori', $data['id_kategori']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteDataLayangan($id)
    {
        $query = "DELETE FROM tabel_layangan WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataLayangan($data)
    {
        $query = "UPDATE tabel_layangan SET foto_layangan = :foto_layangan, nama = :nama, ukuran = :ukuran, no_layangan = :no_layangan, ukuran_tali = :ukuran_tali, warna_layangan = :warna_layangan, id_jenis = :id_jenis, id_kategori = :id_kategori WHERE id = :id";

        $this->db->query($query);
        $this->db->bind(':id', intval($data["id"]));
        $this->db->bind(':foto_layangan', $data["foto_layangan"]);
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':ukuran', $data['ukuran']);
        $this->db->bind(':no_layangan', $data['no_layangan']);
        $this->db->bind(':ukuran_tali', $data['ukuran_tali']);
        $this->db->bind(':warna_layangan', $data['warna_layangan']);
        $this->db->bind(':id_jenis', $data['id_jenis']);
        $this->db->bind(':id_kategori', $data['id_kategori']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
