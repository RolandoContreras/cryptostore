<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charge_payment extends CI_Controller {
    public function __construct(){
     parent::__construct();
        $this->load->library('stripegateway');
    } 

    public function index(){
        //DECLARO VAR MESSAGE
        $data["message"] = "";
        //GET DATA POST
        $obj_total = $this->input->post("total");
//        $obj_total = $this->input->post("total");
//        $obj_total = $this->input->post("total");
//        $obj_total = $this->input->post("total");
//        $obj_total = $this->input->post("total");
//        $obj_total = $this->input->post("total");
//        $obj_total = $this->input->post("total");
        //QUITAR PUNTO
        $obj_total = str_replace(".", "", $obj_total);
        
        if(isset($_POST['btnsubmit'])){
            $data = array(
                 'number' => $this->input->post("card_number"),
                 'exp_month' => $this->input->post("cc_month"),
                 'exp_year' => $this->input->post("cc_year"),
                 'amount' => $obj_total,
            );
            $message = $this->stripegateway->checkout($data);
        }
        
        if($message == "succeeded"){
            //insert new customer
//            $data = array(
//                    'date' => date("Y-m-d H:i:s"),
//                    'amount' => $obj_total,
//                    'tax' => $obj_iva,
//                    'amount_btc' => $obj_btc,
//                    'sub_total' => 0,
//                    'type_pay' => $obj_radio,
//                    'wallet' => $obj_wallet,
//                    'email' => $obj_email,
//                    'phone' => $obj_phone,
//                    'active' => 1,
//                    'status_value' => 1,
//                    );
//            $this->obj_sell->insert($data);
            
            //insert data on sell table
//            $data = array(
//                    'date' => date("Y-m-d H:i:s"),
//                    'amount' => $obj_total,
//                    'tax' => $obj_iva,
//                    'amount_btc' => $obj_btc,
//                    'sub_total' => 0,
//                    'type_pay' => $obj_radio,
//                    'wallet' => $obj_wallet,
//                    'email' => $obj_email,
//                    'phone' => $obj_phone,
//                    'active' => 1,
//                    'status_value' => 1,
//                    );
//            $this->obj_sell->insert($data);
            
            $this->load->view('confirm_credit_card');
        }else{
            $data["message"] = $this->stripegateway->checkout($data);
            $this->load->view('view_credit_card',$data);
        }
    }
    
}
