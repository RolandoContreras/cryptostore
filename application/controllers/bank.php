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
}
