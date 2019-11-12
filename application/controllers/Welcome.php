<?php

class Welcome extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Welcome_model', 'welcome_model');
    }

    public function index()
    {
        $genres = $this->welcome_model->get_genres();
        $values = array(
            'genres' => $genres
        );
        $this->load->view('welcome', $values);
    }

    public function login()
    {
        $errors = array();
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if (empty($username)) {
            array_push($errors, 'Username is required');
        }
        if (empty($password)) {
            array_push($errors, 'Password is required');
        }

        if (count($errors) == 0) { 
            $result=$this->welcome_model->getUserAccount($username);
            if($result){
                 if(password_verify($password,$result->getPassword())){
                    $session_data = array(
                        'user_id' => $result->getUserId(),
                        'username' => $username,
                        );
                   $this->session->set_userdata('logged_in', $session_data);     
                   redirect('/timeline');
                 }else{
                    array_push($errors, 'Invalid password');
                 }
            }else{
                array_push($errors, 'Invalid usernmae');
            }
        }
               
    }

    public function register()
    {
        $errors = array();

        $firstName = $this->input->post("firstname");
        $lastName = $this->input->post("lastname");
        $email = $this->input->post("email");
        $username = $this->input->post("new_username");
        $password = password_hash($this->input->post("new_password"), PASSWORD_BCRYPT);
        $genres = $this->input->post("music_genres");
        $image_url = "";

        $user_id = uniqid(rand(), true);

        if ($this->isEmailValid($email)) {
            $result = $this->welcome_model->getAlreadyAvailableUsers($username, $email);
            if ($result) {
                if ($result->getUsername() === $username) {
                    array_push($errors, "Username already exists");
                }
                if ($result->getEmail() === $email) {
                    array_push($errors, "Email already exists");
                }
            }
        } else {
            array_push($errors, "Email is not valid");
        }

        if (count($errors) == 0) {
            $this->welcome_model->saveUser(
                $user_id,
                $firstName,
                $lastName,
                $email,
                $username,
                $password,
                $image_url,
                $genres
            );
        } else {
            echo 'There are errors';
        }
    }

    public function isEmailValid($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        } else {
            return true;
        }
    }
}
