<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_invest extends CI_Controller {
    public function __construct(){
     parent::__construct();
     
    } 

    public function index()
	{
        //RENDER
        $this->load->view('contact_invest');
	}
    public function send_messages(){
        echo "hola";
        die();
    }    
}
