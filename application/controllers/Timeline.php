<?php
class Timeline extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Timeline_model', 'timeline_model');
    }
     
    public function index(){

       
        $user_id=$this->session->logged_in['user_id'];
        $user_name=$this->session->logged_in['username'];
        $posts_list=$this->getPosts($user_id);
       
        $values=array(
            'username'=>$user_name
        );
        $this->load->view('header');
        $this->load->view('timeline',$values);
        $this->load->view('footer');
    }

    public function search_users(){
          $errors=array();
          $genre=$this->input->post('genre_name_input');
          if(empty($genre)){
            array_push($errors,"Genre is empty");
          }
          if(count($errors)==0){
            $this->session->set_userdata('selected_genre', $genre);     
            redirect('/searchresults/userlist');
          }          
    }

    public function create_post(){
        $user_id=$this->session->logged_in['user_id'];
        $content=$this->input->post('post_content');
        date_default_timezone_set('Asia/Colombo');
        $created_at=date('Y-m-d H:i:s');
        $this->timeline_model->saveUserPost($user_id,$content,$created_at);
        redirect('/timeline');
         
    }

    public function getPosts($user_id){
         
    }
}