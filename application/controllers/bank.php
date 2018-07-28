<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {
    public function __construct(){
     parent::__construct();
    } 

    public function index()
	{
        //GET BTC PRICE + 10%
//        $obj_number = 100;
//        $obj_btc = $this->btc_price();
//        $data['btc_price'] = $obj_btc;
        //CALCULATE % BTC
//        $price_btc = $obj_number/$obj_btc;
//        $data['btc_price_10'] = $price_btc;
//        $data['number_price'] = $obj_number;
        //RENDER
        $this->load->view('bank');
	}
}
