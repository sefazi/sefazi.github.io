<?php

class Home extends Controller{
    public function index()
    {
        $data ['brs'] = $this->model('Model_row')->countDtp();
        $this->view('template/header');
        $this->view('template/sidebar');
        $this->view('template/navbar');
        $this->view('home/index', $data);
        $this->view('template/logout-modal');
        $this->view('template/footer');
    }
}