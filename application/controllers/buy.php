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
                                    slug,
                                    percent,
                                    active",
                        "where" => "active = 1 and status_value = 1",
                        );

        $obj_currency = $this->obj_currency->search($params);
        $data['obj_currency'] = $obj_currency;
        $data['currency'] = "bitcoin";
        
        //GET CURRENCY PRICE + 10%
        $obj_number = 100;
        
        foreach ($obj_currency as $key => $value) {
            switch ($value) {
                case $value->slug == "bitcoin":
                    $obj_btc = $this->btc_price_percent($value->percent);
                    $data['btc_price'] = $obj_btc;
                    break;
                case $value->slug == "dash":
                    $obj_eth = $this->dash_price_percent($value->percent);
                    $data['dash_price'] = $obj_eth;
                    break;
                case $value->slug == "ethereum":
                    $obj_eth = $this->eth_price_percent($value->percent);
                    $data['eth_price'] = $obj_eth;
                    break;
                case $value->slug == "litecoin":
                    $obj_litecoin = $this->litecoin_price_percent($value->percent);
                    $data['litecoin_price'] = $obj_litecoin;
                    break;
                case $value->slug == "bitcoincash":
                    $obj_bch = $this->bch_price_percent($value->percent);
                    $data['bch_price'] = $obj_bch;
                    break;
                case $value->slug == "cardano":
                    $obj_cardano = $this->cardano_price_percent($value->percent);
                    $data['cardano_price'] = $obj_cardano;
                    break;
                case $value->slug == "monero":
                    $obj_monero = $this->monero_price_percent($value->percent);
                    $data['monero_price'] = $obj_monero;
                    break;
                case $value->slug == "ripple":
                    $obj_ripple = $this->ripple_price_percent($value->percent);
                    $data['ripple_price'] = $obj_ripple;
                    break;
                case $value->slug == "verge":
                    $obj_verge = $this->verge_price_percent($value->percent);
                    $data['verge_price'] = $obj_verge;
                    break;
                case $value->slug == "zcash":
                    $obj_zcash = $this->zcash_price_percent($value->percent);
                    $data['zcash_price'] = $obj_zcash;
                    break;
                case $value->slug == "tron":
                    $obj_tron = $this->tron_price_percent($value->percent);
                    $data['tron_price'] = $obj_tron;
                    break;
                case $value->slug == "omisego":
                    $obj_omisego = $this->omisego_price_percent($value->percent);
                    $data['omisego_price'] = $obj_omisego;
                    break;
                case $value->slug == "siacoin":
                    $obj_siacoin = $this->siacoin_price_percent($value->percent);
                    $data['siacoin_price'] = $obj_siacoin;
                    break;
                case $value->slug == "nxt":
                    $obj_nxt = $this->nxt_price_percent($value->percent);
                    $data['nxt_price'] = $obj_nxt;
                    break;
            }
        }
        
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
                                    slug,
                                    percent,
                                    active",
                        "where" => "status_value = 1",
                        );
        $obj_currency = $this->obj_currency->search($params);
        
        //SEN DATA
        $data['obj_currency'] = $obj_currency;
        
        foreach ($obj_currency as $key => $value) {
            switch ($value) {
                case $value->slug == "bitcoin":
                    $obj_btc = $this->btc_price_percent($value->percent);
                    $data['btc_price'] = $obj_btc;
                    break;
                case $value->slug == "dash":
                    $obj_dash = $this->dash_price_percent($value->percent);
                    $data['dash_price'] = $obj_dash;
                    break;
                case $value->slug == "ethereum":
                    $obj_eth = $this->eth_price_percent($value->percent);
                    $data['eth_price'] = $obj_eth;
                    break;
                case $value->slug == "litecoin":
                    $obj_litecoin = $this->litecoin_price_percent($value->percent);
                    $data['litecoin_price'] = $obj_litecoin;
                    break;
                case $value->slug == "bitcoincash":
                    $obj_bch = $this->bch_price_percent($value->percent);
                    $data['bch_price'] = $obj_bch;
                    break;
                case $value->slug == "cardano":
                    $obj_cardano = $this->cardano_price_percent($value->percent);
                    $data['cardano_price'] = $obj_cardano;
                    break;
                case $value->slug == "monero":
                    $obj_monero = $this->monero_price_percent($value->percent);
                    $data['monero_price'] = $obj_monero;
                    break;
                case $value->slug == "ripple":
                    $obj_ripple = $this->ripple_price_percent($value->percent);
                    $data['ripple_price'] = $obj_ripple;
                    break;
                case $value->slug == "verge":
                    $obj_verge = $this->verge_price_percent($value->percent);
                    $data['verge_price'] = $obj_verge;
                    break;
                case $value->slug == "zcash":
                    $obj_zcash = $this->zcash_price_percent($value->percent);
                    $data['zcash_price'] = $obj_zcash;
                    break;
                case $value->slug == "tron":
                    $obj_tron = $this->tron_price_percent($value->percent);
                    $data['tron_price'] = $obj_tron;
                    break;
                case $value->slug == "omisego":
                    $obj_omisego = $this->omisego_price_percent($value->percent);
                    $data['omisego_price'] = $obj_omisego;
                    break;
                case $value->slug == "siacoin":
                    $obj_siacoin = $this->siacoin_price_percent($value->percent);
                    $data['siacoin_price'] = $obj_siacoin;
                    break;
                case $value->slug == "nxt":
                    $obj_nxt = $this->nxt_price_percent($value->percent);
                    $data['nxt_price'] = $obj_nxt;
                    break;
            }
        }
        
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
        $data['number_price'] = $obj_number;
        switch ($currency) {
            case "bitcoin":
                //CALCULATE % BTC IF ONLY DIRECT TO BUY
                $price_btc = $obj_number/$obj_btc;
                $data['btc_price_10'] = $price_btc;
                break;
            case "dash":
                //CALCULATE % BTC IF ONLY DIRECT TO BUY
                $price_btc = $obj_number/$obj_dash;
                $data['btc_price_10'] = $price_btc;
                break;
            case "ethereum":
                $price_btc = $obj_number/$obj_eth;
                $data['btc_price_10'] = $price_btc;
                break;
            case "litecoin":
                //CALCULATE % BTC IF ONLY DIRECT TO BUY
                $price = $obj_number/$obj_litecoin;
                $data['btc_price_10'] = $price;
                break;
            case "bitcoincash":
                //GET PRICE BTC
                $price = $obj_number/$obj_bch;
                $data['btc_price_10'] = $price;
                break;
            case "cardano":
                //GET PRICE BTC
                $price = $obj_number/$obj_cardano;
                $data['btc_price_10'] = $price;
                break;
            case "monero":
                //GET PRICE BTC
                $price = $obj_number/$obj_monero;
                $data['btc_price_10'] = $price;
                break;
            case "ripple":
                //GET PRICE BTC
                $price = $obj_number/$obj_ripple;
                $data['btc_price_10'] = $price;
                break;
            case "verge":
                //GET PRICE BTC
                $price_btc = $obj_number/$obj_verge;
                $data['btc_price_10'] = $price_btc;
                break;
            case "zcash":
                //GET PRICE BTC
                $price = $obj_number/$obj_zcash;
                $data['btc_price_10'] = $price;
                break;
            case "tron":
                //GET PRICE BTC
                $price = $obj_number/$obj_tron;
                $data['btc_price_10'] = $price;
                break;
            case "omisego":
                //GET PRICE BTC
                $price = $obj_number/$obj_omisego;
                $data['btc_price_10'] = $price;
                break;
            case "siacoin":
                //GET PRICE BTC
                $price = $obj_number/$obj_siacoin;
                $data['btc_price_10'] = $price;
                break;
            case "nxt":
                //GET PRICE BTC
                $price = $obj_number/$obj_nxt;
                $data['btc_price_10'] = $price;
                break;
        }
        //RENDER
        $this->load->view('buy',$data);
	}   
    
    public function btc_price_percent($percent){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $price_percent = ($price * $percent)/100;
             $price = $price + $price_percent;
             return $price;
    }
    
    public function eth_price_percent($percent){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1027/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $price_percent = ($price * $percent)/100;
             $new_price = $price + $price_percent;
             return $new_price;
    }
    
    public function bch_price_percent($percent){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1831/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $price_percent = ($price * $percent)/100;
             $new_price = $price + $price_percent;
             return $new_price;
    }     
    
    public function dash_price_percent($percent){
             $url =  "https://api.coinmarketcap.com/v2/ticker/131/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $price_percent = ($price * $percent)/100;
             $new_price = $price + $price_percent;
             return $new_price;
    }
    
    public function ripple_price_percent($percent){
             $url =  "https://api.coinmarketcap.com/v2/ticker/52/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $price_percent = ($price * $percent)/100;
             $price = $price + $price_percent;
             return $price;
    }
    
    public function litecoin_price_percent($percent){
             $url =  "https://api.coinmarketcap.com/v2/ticker/2/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $price_percent = ($price * $percent)/100;
             $price = $price + $price_percent;
             return $price;
    }
    
    public function cardano_price_percent($percent){
             $url =  "https://api.coinmarketcap.com/v2/ticker/2010/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $price_percent = ($price * $percent)/100;
             $price = $price + $price_percent;
             return $price;
    }
    
    public function tron_price_percent($percent){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1958/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $price_percent = ($price * $percent)/100;
             $price = $price + $price_percent;
             return $price;
    }
    
    public function monero_price_percent($percent){
             $url =  "https://api.coinmarketcap.com/v2/ticker/328/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $price_percent = ($price * $percent)/100;
             $price = $price + $price_percent;
             return $price;
    }
    
    public function omisego_price_percent($percent){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1808/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $price_percent = ($price * $percent)/100;
             $price = $price + $price_percent;
             return $price;
    }
    
    public function zcash_price_percent($percent){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1437/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $price_percent = ($price * $percent)/100;
             $price = $price + $price_percent;
             return $price;
    }
    
    public function siacoin_price_percent($percent){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1042/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $price_percent = ($price * $percent)/100;
             $price = $price + $price_percent;
             return $price;
    }
    
    public function verge_price_percent($percent){
             $url =  "https://api.coinmarketcap.com/v2/ticker/693/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $price_percent = ($price * $percent)/100;
             $price = $price + $price_percent;
             return $price;
    }
    
    public function nxt_price_percent($percent){
             $url =  "https://api.coinmarketcap.com/v2/ticker/66/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $price_percent = ($price * $percent)/100;
             $price = $price + $price_percent;
             return $price;
    }
        
    public function validate_usd() {
            if ($this->input->is_ajax_request()) {
                //SELECT ID FROM CUSTOMER
            $value = trim($this->input->post('value'));
            $price = trim($this->input->post('price'));
            $img = trim($this->input->post('img'));
            
            //MULTIPLE BY THE VALUE
            $data['amount_btc'] =  $value / $price;
            
            $images = site_url()."static/page_front/images/monedas/$img";
            $img = "<img src='$images' alt='criptomoneda' width='30'/>";
            
            //SEND DATA
            $data['img'] =  $img;            
            echo json_encode($data);
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
