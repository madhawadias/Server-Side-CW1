<?php
class SearchResults extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('USerlist_model', 'userlist_model');

    }

    public function userlist(){
        $genre=$this->session->selected_genre;
        $users_list=$this->userlist_model->get_user_list($genre);
        $data=array(
            'users_list'=>$users_list
        );
         $this->load->view('header');
         $this->load->view('searchresults',$data);
         $this->load->view('footer');

        
    }
}