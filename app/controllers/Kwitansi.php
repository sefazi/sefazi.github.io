<?php

class Kwitansi extends Controller{
    public function index()
    {
        $this->view('template/header');
        $this->view('template/sidebar');
        $this->view('template/navbar');
        $this->view('kwitansi/kwitansi');
        $this->view('template/logout-modal');
        $this->view('template/footer');
    }
    
    public function add()
    {
        $this->view('template/header');
        $this->view('template/sidebar');
        $this->view('template/navbar');
        $this->view('kwitansi/add');
        $this->view('template/logout-modal');
        $this->view('template/footer');
    }
}