<?php

class Model_code {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getNomr()
    {
        $this->db->query('SELECT max(nomr) FROM dtp');
        $data = $this->db->single();
        $code = implode($data);
        $b = substr($code,1,6);
        $b++;

        $ins = "A";
        $nomr = $ins .  sprintf("%06s", $b);
        return $nomr;
    }

    public function getNoreg()
    {
        $this->db->query('SELECT max(nomr) FROM dtp');
        $data = $this->db->single();
        $code = implode($data);
        $b = substr($code,7);
        $b++;

        $ins = "AI";
        $noreg = $ins .  sprintf("%06s", $b);
        return $noreg;
    }

    public function noBukti()
    {
        $this->db->query('SELECT max(no_bukti) FROM aptk');
        $data = $this->db->single();
        $code = implode($data);
        $b = substr($code,7);
        $b++;

        $ins = "PA";
        $nomr = $ins .  sprintf("%06s", $b);
        return $nomr;
    }
    
}