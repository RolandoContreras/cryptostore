<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_invest extends CI_Controller {
    public function __construct(){
     parent::__construct();
     $this->load->model("comments_model","obj_comments");
    } 

    public function index()
	{
        //RENDER
        $this->load->view('contact_invest');
	}
    public function send_messages(){
         //GET DATA BY POST
     if($this->input->is_ajax_request()){   
            $name = $this->input->post("name");
            $email = $this->input->post("email");
            $phone = $this->input->post("phone");
            $company = $this->input->post("company");
            $comments = $this->input->post("comments");

            //status_value 0 means (not read)
                    $data = array(
                        'name' => $name,
                        'email' => $email,
                        'phone' => $phone,
                        'subject' => "Grandes Inversionistas",
                        'company' => $company,
                        'comment' => $comments,
                        'big_investor' => 1,
                        'date_comment' => date("Y-m-d H:i:s"),
                        'active' => 1,
                        'status_value' => 1,
                    );
                    $this->obj_comments->insert($data);
                    echo json_encode($data);            
                    exit();
        }
    }    
}
