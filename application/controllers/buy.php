<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buy extends CI_Controller {
    public function __construct(){
     parent::__construct();
     
    } 

    public function index()
	{
        //GET BTC PRICE + 10%
        $obj_number = 100;
        $obj_btc = $this->btc_price();
        $data['btc_price'] = $obj_btc;
        //CALCULATE % BTC
        $price_btc = $obj_number/$obj_btc;
        $data['btc_price_10'] = $price_btc;
        $data['number_price'] = $obj_number;
        //RENDER
        $this->load->view('buy',$data);
	}
    
        
    public function btc_price(){
             $url =  "https://api.coinmarketcap.com/v1/ticker/bitcoin";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }
    
    public function validate_usd() {
            if ($this->input->is_ajax_request()) {
                //SELECT ID FROM CUSTOMER
            $value = trim($this->input->post('value'));
            $price = trim($this->input->post('price'));
            
            //MULTIPLE BY THE VALUE
            $new_data =  $value / $price;
            echo $new_data;
            }
    }
        
    public function validate_btc() {
            if ($this->input->is_ajax_request()) {
                //SELECT ID FROM CUSTOMER
            $value = trim($this->input->post('value'));
            $price = trim($this->input->post('price'));
            //MULTIPLE BY THE VALUE
            $new_data =  $value * $price;
            echo json_encode($new_data);
            }
    }
}
