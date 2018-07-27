<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice extends CI_Controller {
    public function __construct(){
     parent::__construct();
     
    } 

    public function index()
    {
        //GET URL
        $url = explode("/",uri_string());
        $notice_url = $url[1];
        switch ($notice_url) {
            case 'legal':
                $this->load->view('legal');
                break;
            case 'general':
                $this->load->view('general');
                break;
            case 'legal':
                $this->load->view('privacy');            

                break;
            case 'legal':
                $this->load->view('cookies');
                break;
        }
    }
}
