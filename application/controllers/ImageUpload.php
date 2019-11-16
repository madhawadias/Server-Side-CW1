<?php
class ImageUpload extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function do_upload()
    {
        $config = array(
            'upload_path' => "./images/profile/",
            'allowed_types' => "gif|jpg|png|jpeg|pdf",
            'overwrite' => TRUE,
            'max_size' => "10240000",
            'max_height' => "0",
            'max_width' => "0"
        );
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('profile_image')) {
            $data = array('upload_data' => $this->upload->data());
            echo 'Upload is successfull';
          //  $this->load->view('upload_success', $data);
        } else {
            $error = array('error' => $this->upload->display_errors());
            echo 'Error in update';
           // $this->load->view('custom_view', $error);
        }
    }
}
