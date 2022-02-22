<?php

class Adjust_ob extends Controller{
    public function index()
    {
        $this->view('template/header');
        $this->view('template/sidebar');
        $this->view('template/navbar');
        $this->view('adjust_ob/adjust_ob');
        $this->view('template/logout-modal');
        $this->view('template/footer');
    }
    
    public function add()
    {
        $this->view('template/header');
        $this->view('template/sidebar');
        $this->view('template/navbar');
        $this->view('adjust_ob/add');
        $this->view('template/logout-modal');
        $this->view('template/footer');
    }
}