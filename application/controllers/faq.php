<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {
    public function __construct(){
     parent::__construct();
        $this->load->model("dinamic_model","obj_dinamic");
    } 

    public function index()
	{
        //GET DATA FAQ
        $params = array(
                        "select" =>"dinamic_id,
                                    date,
                                    title,
                                    content,
                                    active,",
                         "where" => "faq = 1 and active = 1 and status_value = 1",
            );
            //GET DATA COMMENTS
            $obj_faq= $this->obj_dinamic->search($params);
            $data['obj_faq'] = $obj_faq;
        //RENDER
        $this->load->view('faq',$data);
	}
}
