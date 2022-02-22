<?php

class Model_row{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function countDtp()
    {
        $this->db->query('SELECT * FROM dtp');
        $this->db->execute();
        return $this->db->rowCount();
    }

}