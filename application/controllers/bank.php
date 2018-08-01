<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {
    public function __construct(){
     parent::__construct();
     $this->load->model("sell_model","obj_sell");
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
        //RENDER
        if($obj_radio == 2){
            $this->load->view('bank_details',$data);
        }else{}
    }
    public function confirm_bank(){
        //GER DATA $_SESSION
        
        $obj_price_dolar = $this->input->post("price_dolar");
        $obj_btc = $this->input->post("btc");
        $obj_iva = $this->input->post("iva");
        $obj_radio = $this->input->post("radio");
        $obj_wallet = $this->input->post("wallet");
        $obj_email = $this->input->post("email");
        $obj_phone = $this->input->post("phone");
        
        //insert data on table sell
        $data = array(
                    'date' => date("Y-m-d H:i:s"),
                    'amount' => $obj_price_dolar,
                    'tax' => $obj_iva,
                    'amount_btc' => $obj_btc,
                    'sub_total' => 0,
                    'type_pay' => $obj_radio,
                    'wallet' => $obj_wallet,
                    'email' => $obj_email,
                    'phone' => $obj_phone,
                    'active' => 1,
                    'status_value' => 1,
                    );
        $this->obj_sell->insert($data);
        //$this->send_email_bank();
        //RENDER
        $this->load->view('confirm_email');
    }
    public function send_email_bank(){
        
    }
    
    
}
