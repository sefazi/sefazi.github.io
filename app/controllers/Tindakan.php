<?php

class Tindakan extends Controller{
    public function index()
    {
        $this->view('template/header');
        $this->view('template/sidebar');
        $this->view('template/navbar');
        $this->view('tindakan/tindakan');
        $this->view('template/logout-modal');
        $this->view('template/footer');
    }
    
    public function add()
    {
        $data['ob'] = $this->model('Model_kasir')->getQty();
        $this->view('template/header');
        $this->view('template/sidebar');
        $this->view('template/navbar');
        $this->view('tindakan/add',$data);
        $this->view('template/logout-modal');
        $this->view('template/footer');
    }

    public function get()
    {
        echo json_encode($this->model('Model_kasir')->get($_POST));
    }
}