<?php

class Follow extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('USerlist_model', 'userlist_model');
    }
    
    public function followers(){
        $this->load->view('header');
        $this->load->view('footer');
    }

    public function following(){
        $this->load->view('header');
        $this->load->view('footer');
    }

    public function friends(){
        $this->load->view('header');
        $this->load->view('footer');
    }

}