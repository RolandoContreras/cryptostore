<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice extends CI_Controller {
    public function __construct(){
     parent::__construct();
     $this->load->model('dinamic_model','obj_dinamic');
    } 

    public function index()
    {
        //GET URL
        $url = explode("/",uri_string());
        $notice_url = $url[2];
        
        switch ($notice_url) {
            case 'legal':
                $url = "legal";
                $dinamic_id = 1;
                break;
            case 'privacy':
                $url = "privacy";
                $dinamic_id = 2;
                break;
            case 'general':
                $url = "general";
                $dinamic_id = 3;
                break;
            case 'cookies':
                $url = "cookies";
                $dinamic_id = 4;
                break;
             }
            //GET DATA
            $params = array(
                        "select" =>"dinamic_id,
                                    title,
                                    content",
                         "where" => "dinamic_id = $dinamic_id and status_value = 1",
            );
            //GET DATA COMMENTS
            $data['obj_dinamic']= $this->obj_dinamic->get_search_row($params);
            $this->load->view($url,$data);
    }
}
