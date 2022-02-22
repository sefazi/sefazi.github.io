<?php

class Apotik extends Controller{
    public function index()
    {
        $data['list'] = $this->model('Model_kasir')->dataAptk();
        $this->view('template/header');
        $this->view('template/sidebar');
        $this->view('template/navbar');
        $this->view('apotik/apotik',$data);
        $this->view('template/logout-modal');
        $this->view('template/footer');
    }
    
    public function add()
    {
        $data ['pe'] = $this->model('Model_reg')->getPerusahaan();
        $data ['ob'] = $this->model('Model_kasir')->getQty();
        $data ['no'] = $this->model('Model_code')->noBukti();
        $this->view('template/header');
        $this->view('template/sidebar');
        $this->view('template/navbar');
        $this->view('apotik/add', $data);
        $this->view('template/logout-modal');
        $this->view('template/footer');
    }

    public function getItem()
    {
       echo json_encode($this->model('Model_kasir')->get($_POST));
    }

    public function added()
    {
        $this->model('Model_kasir')->addNota($_POST);
    }
}