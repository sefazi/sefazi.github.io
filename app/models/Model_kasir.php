<?php

class Model_kasir{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function dataAptk()
    {
        $this->db->query('SELECT * FROM aptk');
        return $this->db->resultSet();
    }


    public function getQty()
    {
        $query = 'SELECT * FROM daftar_obat';
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function get($data)
    {
        $this->db->query('SELECT * FROM daftar_obat WHERE id=:id');
        $this->db->bind('id', $data['id']);
        return $this->db->single();
    }

    public function addNota($data)
    {
        $this->db->query('INSERT INTO aptk VALUES ( :nobukti, :nama, :perusahaan, :subtotal, :jasa_racik, :grandtotal, :obat)');
        
        $this->db->bind('nobukti', $data['nobukti']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('perusahaan', $data['perusahaan']);
        $this->db->bind('subtotal', $data['total']);
        $this->db->bind('jasa_racik', $data['jasa']);
        $this->db->bind('grandtotal', $data['grandtotal']);
        $this->db->bind('obat', $data['obat']);
        $this->db->execute();
    }

}