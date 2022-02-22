<?php

class Model_reg {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDtp()
    {
        $this->db->query('SELECT * FROM dtp ORDER BY nomr DESC');
        return $this->db->resultSet();
    } 
    
    public function getRj()
    {
        $this->db->query('SELECT * FROM rj ORDER BY tgl DESC');
        return $this->db->resultSet();
    }
    
    public function getPerusahaan()
    {
        $this->db->query('SELECT * FROM perusahaan ORDER BY nama ASC');
        return $this->db->resultSet();
    }

    public function getPekerjaan()
    {
        $this->db->query('SELECT * FROM pekerjaan ORDER BY nama ASC');
        return $this->db->resultSet();
    }

    public function getPendidikan()
    {
        $this->db->query('SELECT * FROM pendidikan ORDER BY nama ASC');
        return $this->db->resultSet();
    }

    public function getKecamatan()
    {
        $this->db->query('SELECT * FROM kecamatan ORDER BY nama ASC');
        return $this->db->resultSet();
    }

    public function getKelurahan()
    {
        $this->db->query('SELECT * FROM kelurahan ORDER BY nama ASC');
        return $this->db->resultSet();
    }

    public function getKota()
    {
        $this->db->query('SELECT * FROM kota ORDER BY nama ASC');
        return $this->db->resultSet();
    }

    public function addDtp($data)
    {
        $query = "INSERT INTO dtp VALUES ( :nomr, :tgldftr, :nama, :alamat, :rt, :rw, :kelurahan, :kecamatan, :kota, :kodepos, :kotalahir, :ttl, :jk, :telp, :hp, :agama, :wn, :pendidikan, :pekerjaan)";

        $this->db->query($query);
        $this->db->bind('nomr', $data['nomr']);
        $this->db->bind('tgldftr',  date('Y-m-d') );
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('rt', $data['rt']);
        $this->db->bind('rw', $data['rw']);
        $this->db->bind('kelurahan', $data['kelurahan']);
        $this->db->bind('kecamatan', $data['kecamatan']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('kodepos', $data['kodepos']);
        $this->db->bind('kotalahir', $data['kotalahir']);
        $this->db->bind('ttl', $data['ttl']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('telp', $data['telp']);
        $this->db->bind('hp', $data['hp']);
        $this->db->bind('agama', $data['agama']);
        $this->db->bind('wn', $data['wn']);
        $this->db->bind('pendidikan', $data['pendidikan']);
        $this->db->bind('pekerjaan', $data['pekerjaan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}