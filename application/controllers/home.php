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
        //GET DATA COMMENTS
        //GET DATA PRICE CRIPTOCURRENCY
        $params = array(
                        "select" =>"currency_id,
                                    name,
                                    img,
                                    active",
                        "where" => "status_value = 1",
                        );

        $data['obj_currency'] = $this->obj_currency->search($params);
        $data['currency'] = "bitcoin";
        //GET CURRENCY PRICE + 10%
        $obj_number = 100;
        $data['number_price'] = $obj_number;
        $obj_btc = $this->btc_price_10();
        $data['btc_price'] = $obj_btc;
        
        $obj_eth = $this->eth_price_10();
        $data['eth_price'] = $obj_eth;
        
        $obj_bch = $this->bch_price_10();
        $data['bch_price'] = $obj_bch;
        
        $obj_dash = $this->dash_price_10();
        $data['dash_price'] = $obj_dash;
        
        $obj_ripple = $this->ripple_price_10();
        $data['ripple_price'] = $obj_ripple;
        
        $obj_litecoin = $this->litecoin_price_10();
        $data['litecoin_price'] = $obj_litecoin;
        
        $obj_cardano = $this->cardano_price_10();
        $data['cardano_price'] = $obj_cardano;
        
        $obj_tron = $this->tron_price_10();
        $data['tron_price'] = $obj_tron;
        
        $obj_monero = $this->monero_price_10();
        $data['monero_price'] = $obj_monero;
        
        $obj_omisego = $this->omisego_price_10();
        $data['omisego_price'] = $obj_omisego;
        
        $obj_zcash = $this->zcash_price_10();
        $data['zcash_price'] = $obj_zcash;
        
        $obj_siacoin = $this->siacoin_price_10();
        $data['siacoin_price'] = $obj_siacoin;
        
        $obj_verge = $this->verge_price_10();
        $data['verge_price'] = $obj_verge;
        
        $obj_nxt = $this->nxt_price_10();
        $data['nxt_price'] = $obj_nxt;
        
        //CALCULATE % BTC IF ONLY DIRECT TO BUY
        $price_btc = $obj_number/$obj_btc;
        $data['btc_price_10'] = $price_btc;
        
        //GET DATA NORMAL PRICE 
        $data['btc'] = $this->btc_price();
        $data['bch'] = $this->bch_price();
        $data['eth'] = $this->eth_price();
        $data['dash'] = $this->dash_price();
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
             $url =  "https://api.coinmarketcap.com/v1/ticker/bitcoin";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             return $price;
    }
    public function eth_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/ethereum";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             return $price;
    }
    public function bch_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/bitcoin-cash";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             return $price;
    }     
    public function dash_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/dash/";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             return $price;
    }
    
    public function btc_price_10(){
             $url =  "https://api.coinmarketcap.com/v1/ticker/bitcoin";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }
    public function eth_price_10(){
             $url = "https://api.coinmarketcap.com/v1/ticker/ethereum";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }
    
    public function bch_price_10(){
             $url = "https://api.coinmarketcap.com/v1/ticker/bitcoin-cash";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }     
    
    public function dash_price_10(){
             $url = "https://api.coinmarketcap.com/v1/ticker/dash/";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }
    
    public function ripple_price_10(){
             $url = "https://api.coinmarketcap.com/v1/ticker/ripple";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }
    
    public function litecoin_price_10(){
             $url = "https://api.coinmarketcap.com/v1/ticker/litecoin";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }
    
    public function cardano_price_10(){
             $url = "https://api.coinmarketcap.com/v1/ticker/cardano";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }
    
    public function tron_price_10(){
             $url = "https://api.coinmarketcap.com/v1/ticker/tron";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }
    
    public function monero_price_10(){
             $url = "https://api.coinmarketcap.com/v1/ticker/monero";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }
    
    public function omisego_price_10(){
             $url = "https://api.coinmarketcap.com/v1/ticker/omisego";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }
    
    public function zcash_price_10(){
             $url = "https://api.coinmarketcap.com/v1/ticker/zcash";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }
    
    public function siacoin_price_10(){
             $url = "https://api.coinmarketcap.com/v1/ticker/siacoin";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }
    
    public function verge_price_10(){
             $url = "https://api.coinmarketcap.com/v1/ticker/verge";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $price = $price * 1.10;
             return $price;
    }
    
    public function nxt_price_10(){
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
