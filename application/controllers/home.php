<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
     parent::__construct();
     $this->load->model('comments_model','obj_comments');
    } 

    public function index()
	{
        //GET DATA COMMENTS
        $this->load->view('home');
	}
    public function send_messages(){

        //GET DATA BY POST
        $data = $_POST['dataString']; 
        //EXPLODE BY DEMILITER
        $string =  explode('&', $data);
        //GET NAME
        $name = $string[0];
        //GET EMAIL
        $email = $string[1];
        //GET SUBJECT
        $subject = $string[2];
        //GET MESSAGE
        $message = $string[3];
        //GET phone
        $phone = $string[4];
                //status_value 0 means (not read)
                $data = array(
                    'name' => $name,
                    'email' => $email,
                    'subject' => $subject,
                    'comment' => $message,
                    'phone' => $phone,
                    'date_comment' => date("Y-m-d H:i:s"),
                    'active' => 1,
                    'status_value' => 1,
                );
                $this->obj_comments->insert($data);
                echo '<div class="alert alert-success" style="text-align: center">Enviado Correctamente.</div>';
            }
}
