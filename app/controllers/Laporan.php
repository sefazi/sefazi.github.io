<?php

class Laporan extends Controller{
    public function index()
    {
        $this->view('template/header');
        $this->view('template/sidebar');
        $this->view('template/navbar');
        $this->view('laporan/lap_lain/index');
        $this->view('template/logout-modal');
        $this->view('template/footer');
    }
    
    public function piutang()
    {
        $this->view('template/header');
        $this->view('template/sidebar');
        $this->view('template/navbar');
        $this->view('laporan/lap_lain/jenis/piutang/piutang');
        $this->view('template/logout-modal');
        $this->view('template/footer');
    }
}