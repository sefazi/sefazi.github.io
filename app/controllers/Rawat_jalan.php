<?php

class Rawat_jalan extends Controller{
    public function index()
    {
        $data ['dtp'] = $this->model('Model_reg')->getDtp();
        $this->view('template/header');
        $this->view('template/sidebar');
        $this->view('template/navbar');
        $this->view('rawat_jalan/rawat-jalan', $data);
        $this->view('template/logout-modal');
        $this->view('template/footer');
    }
    
    public function add()
    {
        $data ['pnd'] = $this->model('Model_reg')->getPendidikan();
        $data ['kc'] = $this->model('Model_reg')->getKecamatan();
        $data ['kl'] = $this->model('Model_reg')->getKelurahan();
        $data ['ko'] = $this->model('Model_reg')->getKota();
        $data ['pe'] = $this->model('Model_reg')->getPekerjaan();
        $data ['ins'] = $this->model('Model_code')->getNomr();
        $this->view('template/header');
        $this->view('template/sidebar');
        $this->view('template/navbar');
        $this->view('rawat_jalan/add', $data);
        $this->view('template/logout-modal');
        $this->view('template/footer');
    }

    public function added()
    {
        if( $this->model('Model_reg')->addRj($_POST) > 0 ){
            header('Location:'. BASEURL . '/rawat_jalan');
            exit;
        }
    }
}