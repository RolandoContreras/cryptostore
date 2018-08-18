<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buy extends CI_Controller {
    public function __construct(){
     parent::__construct();
     $this->load->model('currency_model','obj_currency');
    } 

    public function index()
	{
        //GET DATA PRICE CRIPTOCURRENCY
        $params = array(
                        "select" =>"currency_id,
                                    name,
                                    img,
                                    active",
                        "where" => "status_value = 1",
                        );

        $data['obj_currency'] = $this->obj_currency->search($params);
        
        //GET CURRENCY PRICE + 10%
        $obj_number = 100;
        $obj_btc = $this->btc_price();
        $data['btc_price'] = $obj_btc;
        
        
        $obj_btc = $this->eth_price();
        $data['btc_price'] = $obj_btc;
        
        $obj_bch = $this->bch_price();
        $data['bch_price'] = $obj_bch;
        
        $obj_dash = $this->dash_price();
        $data['dash_price'] = $obj_dash;
        
        $obj_ripple = $this->ripple_price();
        $data['ripple_price'] = $obj_ripple;
        
        $obj_litecoin = $this->litecoin_price();
        $data['litecoin_price'] = $obj_litecoin;
        
        $obj_cardano = $this->cardano_price();
        $data['cardano_price'] = $obj_cardano;
        
        $obj_tron = $this->tron_price();
        $data['tron_price'] = $obj_tron;
        
        $obj_monero = $this->monero_price();
        $data['monero_price'] = $obj_monero;
        
        $obj_omisego = $this->omisego_price();
        $data['omisego_price'] = $obj_omisego;
        
        $obj_zcash = $this->zcash_price();
        $data['zcash_price'] = $obj_zcash;
        
        $obj_siacoin = $this->siacoin_price();
        $data['siacoin_price'] = $obj_siacoin;
        
        $obj_verge = $this->verge_price();
        $data['verge_price'] = $obj_verge;
        
        $obj_nxt = $this->nxt_price();
        $data['nxt_price'] = $obj_nxt;
        
        //CALCULATE % BTC IF ONLY DIRECT TO BUY
        $price_btc = $obj_number/$obj_btc;
        $data['btc_price_10'] = $price_btc;
        $data['number_price'] = $obj_number;
        //RENDER
        $this->load->view('buy',$data);
	}
        
     public function currency()
	{
        //GET URI
        $url = uri_string();
        $url = explode("/", $url);
        $currency = $url[1];
        //SEND DATA CURRENCY
        $data['currency'] = $currency; 
        
        //GET DATA PRICE ALL CRIPTOCURRENCY
        $params = array(
                        "select" =>"currency_id,
                                    name,
                                    img,
                                    active",
                        "where" => "status_value = 1",
                        );
        $obj_currency = $this->obj_currency->search($params);
        
        //SEN DATA
        $data['obj_currency'] = $obj_currency;
        
        //GET IMAGES ARRAY
        foreach ($obj_currency as $value) {
            
            $name = strtolower($value->name);
            $name = str_replace(" ", "", $name);          
            
            if($name == "$currency"){
                $img = $value->img;
                //send data
                $data['img'] = $img;
            }
        }
        
        //GET CURRENCY PRICE + 10%
        $obj_number = 100;
        switch ($currency) {
            case "bitcoin":
                //GET PRICE BTC
                $obj_btc = $this->btc_price();
                $data['btc_price'] = $obj_btc;
                //CALCULATE % BTC IF ONLY DIRECT TO BUY
                $price_btc = $obj_number/$obj_btc;
                $data['btc_price_10'] = $price_btc;
                $data['number_price'] = $obj_number;
                break;
            case "dash":
                //GET PRICE BTC
                $obj_btc = $this->dash_price();
                $data['btc_price'] = $obj_btc;
                //CALCULATE % BTC IF ONLY DIRECT TO BUY
                $price_btc = $obj_number/$obj_btc;
                $data['btc_price_10'] = $price_btc;
                $data['number_price'] = $obj_number;
                break;
            case "ethereum":
                //GET PRICE BTC
                $obj_btc = $this->eth_price();
                $data['btc_price'] = $obj_btc;
                //CALCULATE % BTC IF ONLY DIRECT TO BUY
                $price_btc = $obj_number/$obj_btc;
                $data['btc_price_10'] = $price_btc;
                $data['number_price'] = $obj_number;
                break;
            case "litecoin":
                //GET PRICE BTC
                $obj_btc = $this->litecoin_price();
                $data['btc_price'] = $obj_btc;
                //CALCULATE % BTC IF ONLY DIRECT TO BUY
                $price_btc = $obj_number/$obj_btc;
                $data['btc_price_10'] = $price_btc;
                $data['number_price'] = $obj_number;
                break;
            case "bitcoincash":
                //GET PRICE BTC
                $obj_btc = $this->bch_price();
                $data['btc_price'] = $obj_btc;
                //CALCULATE % BTC IF ONLY DIRECT TO BUY
                $price_btc = $obj_number/$obj_btc;
                $data['btc_price_10'] = $price_btc;
                $data['number_price'] = $obj_number;
                break;
            case "cardano":
                //GET PRICE BTC
                $obj_btc = $this->cardano_price();
                $data['btc_price'] = $obj_btc;
                //CALCULATE % BTC IF ONLY DIRECT TO BUY
                $price_btc = $obj_number/$obj_btc;
                $data['btc_price_10'] = $price_btc;
                $data['number_price'] = $obj_number;
                break;
            case "monero":
                //GET PRICE BTC
                $obj_btc = $this->monero_price();
                $data['btc_price'] = $obj_btc;
                //CALCULATE % BTC IF ONLY DIRECT TO BUY
                $price_btc = $obj_number/$obj_btc;
                $data['btc_price_10'] = $price_btc;
                $data['number_price'] = $obj_number;
                break;
            case "ripple":
                //GET PRICE BTC
                $obj_btc = $this->ripple_price();
                $data['btc_price'] = $obj_btc;
                //CALCULATE % BTC IF ONLY DIRECT TO BUY
                $price_btc = $obj_number/$obj_btc;
                $data['btc_price_10'] = $price_btc;
                $data['number_price'] = $obj_number;
                break;
            case "verge":
                //GET PRICE BTC
                $obj_btc = $this->verge_price();
                $data['btc_price'] = $obj_btc;
                //CALCULATE % BTC IF ONLY DIRECT TO BUY
                $price_btc = $obj_number/$obj_btc;
                $data['btc_price_10'] = $price_btc;
                $data['number_price'] = $obj_number;
                break;
            case "zcash":
                //GET PRICE BTC
                $obj_btc = $this->zcash_price();
                $data['btc_price'] = $obj_btc;
                //CALCULATE % BTC IF ONLY DIRECT TO BUY
                $price_btc = $obj_number/$obj_btc;
                $data['btc_price_10'] = $price_btc;
                $data['number_price'] = $obj_number;
                break;
            case "tron":
                //GET PRICE BTC
                $obj_btc = $this->tron_price();
                $data['btc_price'] = $obj_btc;
                //CALCULATE % BTC IF ONLY DIRECT TO BUY
                $price_btc = $obj_number/$obj_btc;
                $data['btc_price_10'] = $price_btc;
                $data['number_price'] = $obj_number;
                break;
            case "omisego":
                //GET PRICE BTC
                $obj_btc = $this->omisego_price();
                $data['btc_price'] = $obj_btc;
                //CALCULATE % BTC IF ONLY DIRECT TO BUY
                $price_btc = $obj_number/$obj_btc;
                $data['btc_price_10'] = $price_btc;
                $data['number_price'] = $obj_number;
                break;
            case "siacoin":
                //GET PRICE BTC
                $obj_btc = $this->siacoin_price();
                $data['btc_price'] = $obj_btc;
                //CALCULATE % BTC IF ONLY DIRECT TO BUY
                $price_btc = $obj_number/$obj_btc;
                $data['btc_price_10'] = $price_btc;
                $data['number_price'] = $obj_number;
                break;
            case "nxt":
                //GET PRICE BTC
                $obj_btc = $this->nxt_price();
                $data['btc_price'] = $obj_btc;
                //CALCULATE % BTC IF ONLY DIRECT TO BUY
                $price_btc = $obj_number/$obj_btc;
                $data['btc_price_10'] = $price_btc;
                $data['number_price'] = $obj_number;
                break;
        }
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
    public function eth_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/ethereum";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }
    public function bch_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/bitcoin-cash";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }     
    public function dash_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/dash/";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }
    public function ripple_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/ripple";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }
    public function litecoin_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/litecoin";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }
    public function cardano_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/cardano";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }
    public function tron_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/tron";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }
    public function monero_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/monero";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }
    public function omisego_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/omisego";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }
    public function zcash_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/zcash";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }
    public function siacoin_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/siacoin";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }
    public function verge_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/verge";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }
    public function nxt_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/nxt";
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
