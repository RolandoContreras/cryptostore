<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {
    public function __construct(){
     parent::__construct();
    } 

    public function index()
	{
        $data['price_dolar'] = $this->input->post("price_dolar");
        $data['btc'] = $this->input->post("btc");

        //RENDER
        $this->load->view('bank',$data);
    }
    public function view_bank(){
        if($this->input->is_ajax_request()){
            $data['price_dolar'] = $this->input->post("price_dolar");
            $data['btc'] = $this->input->post("btc");
            $data['phone'] = $this->input->post("phone");
            $data['wallet'] = $this->input->post("wallet");
            $data['email'] = $this->input->post("email");
            $data['radio'] = $this->input->post("radio");
            $_SESSION['buy'] = $data;
            echo json_encode($data);            
            exit();
	}
    }
    public function details_bank(){
        //GER DATA $_SESSION
        $data['price_dolar'] = $_SESSION['buy']['price_dolar'];
        $data['btc'] = $_SESSION['buy']['btc'];
        $data['phone'] = $_SESSION['buy']['phone'];
        $data['wallet'] = $_SESSION['buy']['wallet'];
        $data['email'] = $_SESSION['buy']['email'];
        $obj_radio = $_SESSION['buy']['radio'];
        $data['radio'] = $obj_radio;
        //DELETE SESSION
//        $this->session->unset_userdata('buy');
//	$this->session->destroy();
                
        //RENDER
        if($obj_radio == 2){
            $this->load->view('bank_details',$data);
        }else{}
    }
}
