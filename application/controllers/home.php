<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
     parent::__construct();
     $this->load->model('currency_model','obj_currency');
     $this->load->model('comments_model','obj_comments');
    } 

    public function index()
	{
        //GET DATA CURRENCY EUR
        $btc = $this->btc_price();
        $data['btc'] = $btc;
        
        $bch = $this->bch_price();
        $data['bch'] = $bch;
        
        $eth = $this->eth_price();
        $data['eth'] = $eth;
        
        $dash = $this->dash_price();
        $data['dash'] = $dash;
        
        //GET DATA PRICE CRIPTOCURRENCY
        $params = array(
                        "select" =>"currency_id,
                                    name,
                                    slug,
                                    img,
                                    percent,
                                    active",
                        "where" => "status_value = 1",
                        );

        $obj_currency = $this->obj_currency->search($params);
        $data['obj_currency'] = $obj_currency;
        
        foreach ($obj_currency as $key => $value) {
            switch ($value) {
                case $value->slug == "bitcoin":
                    $obj_btc = $this->btc_price_percent($btc, $value->percent);
                    $data['btc_price'] = $obj_btc;
                    break;
                case $value->slug == "dash":
                    $obj_dash = $this->dash_price_percent($dash, $value->percent);
                    $data['dash_price'] = $obj_dash;
                    break;
                case $value->slug == "ethereum":
                    $obj_eth = $this->eth_price_percent($eth, $value->percent);
                    $data['eth_price'] = $obj_eth;
                    break;
                case $value->slug == "litecoin":
                    $obj_litecoin = $this->litecoin_price_percent($value->percent);
                    $data['litecoin_price'] = $obj_litecoin;
                    break;
                case $value->slug == "bitcoincash":
                    $obj_bch = $this->bch_price_percent($bch, $value->percent);
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
        
        $data['currency'] = "bitcoin";
        //GET CURRENCY PRICE + 10%
        $obj_number = 100;
        $data['number_price'] = $obj_number;
  
        //CALCULATE % BTC IF ONLY DIRECT TO BUY
        $price_btc = $obj_number/$obj_btc;
        $data['btc_price_10'] = $price_btc;
        
        
        $this->load->view('home',$data);
	}
    public function send_messages(){
     //GET DATA BY POST
     if($this->input->is_ajax_request()){   
            $name = $this->input->post("name");
            $email = $this->input->post("email");
            $subject = $this->input->post("subject");
            $comments = $this->input->post("comments");

            //status_value 0 means (not read)
                    $data = array(
                        'name' => $name,
                        'email' => $email,
                        'subject' => $subject,
                        'comment' => $comments,
                        'big_investor' => 0,
                        'date_comment' => date("Y-m-d H:i:s"),
                        'active' => 1,
                        'status_value' => 1,
                    );
                    $this->obj_comments->insert($data);
                    echo json_encode($data);            
                    exit();
        }
            }
            
    public function btc_price(){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             return $price;
    }
    
    public function eth_price(){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1027/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             return $price;
    }
    
    public function bch_price(){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1831/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             return $price;
    }     
    
    public function dash_price(){
             $url =  "https://api.coinmarketcap.com/v2/ticker/131/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             return $price;
    }
    
    public function btc_price_percent($price, $percent){
             $price_percent = ($price * $percent)/100;
             $new_price = $price + $price_percent;
             return $new_price;
    }
    
    public function eth_price_percent($price, $percent){
             $price_percent = ($price * $percent)/100;
             $new_price = $price + $price_percent;
             return $new_price;
    }
    
    public function bch_price_percent($price, $percent){
             $price_percent = ($price * $percent)/100;
             $new_price = $price + $price_percent;
             return $new_price;
    }     
    
    public function dash_price_percent($price, $percent){
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
            $img = "<img src='$images' alt='criptomoneda' width='28'/>";
            
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