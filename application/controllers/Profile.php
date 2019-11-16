<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profile extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }




    public function get_profile($user_id)
    {
        $this->load->view('header');
        $this->load->view('profile');
        $this->load->view('footer');
    }
}
