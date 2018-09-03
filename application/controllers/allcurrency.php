<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Allcurrency extends CI_Controller {
    public function __construct(){
     parent::__construct();
    } 

    public function index()
	{
        //GET DATA PRICE CRIPTOCURRENCY
        $obj_btc = $this->btc_price();
        $obj_btc = explode('&', $obj_btc);
        $data['btc_price'] = $obj_btc[0];
        $data['btc_color'] = $obj_btc[1];
        
        $obj_bch = $this->bch_price();
        $obj_bch = explode('&', $obj_bch);
        $data['bch_price'] = $obj_bch[0];
        $data['bch_color'] = $obj_bch[1];
        
        $obj_eth = $this->eth_price();
        $obj_eth = explode('&', $obj_eth);
        $data['eth_price'] = $obj_eth[0];
        $data['eth_color'] = $obj_eth[1];
        
        $obj_dash = $this->dash_price();
        $obj_dash = explode('&', $obj_dash);
        $data['dash_price'] = $obj_dash[0];
        $data['dash_color'] = $obj_dash[1];
        
        $obj_rrp = $this->ripple_price();
        $obj_rrp = explode('&', $obj_rrp);
        $data['rrp_price'] = $obj_rrp[0];
        $data['rrp_color'] = $obj_rrp[1];
        
        $obj_ltc = $this->litecoin_price();
        $obj_ltc = explode('&', $obj_ltc);
        $data['ltc_price'] = $obj_ltc[0];
        $data['ltc_color'] = $obj_ltc[1];
        
        $obj_car = $this->cardano_price();
        $obj_car = explode('&', $obj_car);
        $data['car_price'] = $obj_car[0];
        $data['car_color'] = $obj_car[1];
        
        $obj_tron = $this->tron_price();
        $obj_tron = explode('&', $obj_tron);
        $data['tron_price'] = $obj_tron[0];
        $data['tron_color'] = $obj_tron[1];
        
        $obj_mnr = $this->monero_price();
        $obj_mnr = explode('&', $obj_mnr);
        $data['mnr_price'] = $obj_mnr[0];
        $data['mnr_color'] = $obj_mnr[1];
        
        $obj_omg = $this->omisego_price();
        $obj_omg = explode('&', $obj_omg);
        $data['omg_price'] = $obj_omg[0];
        $data['omg_color'] = $obj_omg[1];
        
        
        $obj_zch = $this->zcash_price();
        $obj_zch = explode('&', $obj_zch);
        $data['zch_price'] = $obj_zch[0];
        $data['zch_color'] = $obj_zch[1];
        
        
        $obj_sia = $this->siacoin_price();
        $obj_sia = explode('&', $obj_sia);
        $data['sia_price'] = $obj_sia[0];
        $data['sia_color'] = $obj_sia[1];
        
        $obj_verge = $this->verge_price();
        $obj_verge = explode('&', $obj_verge);
        $data['verge_price'] = $obj_verge[0];
        $data['verge_color'] = $obj_verge[1];
        
        $obj_nxt = $this->nxt_price();
        $obj_nxt = explode('&', $obj_nxt);
        $data['nxt_price'] = $obj_nxt[0];
        $data['nxt_color'] = $obj_nxt[1];
        
        $this->load->view('allcurrency',$data);
	}
    
    public function btc_price(){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $change = $json['data']['quotes']['EUR']['percent_change_24h'];
             $change = (doubleval($change));
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
                 $change = "+".format_number_2decimal($change);
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&<span class='$color'>$change</span>";
    }
    
    public function eth_price(){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1027/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $change = $json['data']['quotes']['EUR']['percent_change_24h'];
             $change = (doubleval($change));
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
                 $change = "+".format_number_2decimal($change);
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&<span class='$color'>$change</span>";
    }
    
    public function bch_price(){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1831/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $change = $json['data']['quotes']['EUR']['percent_change_24h'];
             $change = (doubleval($change));
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
                 $change = "+".format_number_2decimal($change);
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&<span class='$color'>$change</span>";
    }     
    
    public function dash_price(){
             $url =  "https://api.coinmarketcap.com/v2/ticker/131/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $change = $json['data']['quotes']['EUR']['percent_change_24h'];
             $change = (doubleval($change));
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
                 $change = "+".format_number_2decimal($change);
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&<span class='$color'>$change</span>";
    }
    
    public function ripple_price(){
             $url =  "https://api.coinmarketcap.com/v2/ticker/52/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $change = $json['data']['quotes']['EUR']['percent_change_24h'];
             $change = (doubleval($change));
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
                 $change = "+".format_number_2decimal($change);
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&<span class='$color'>$change</span>";
    }
    
    public function litecoin_price(){
             $url =  "https://api.coinmarketcap.com/v2/ticker/2/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $change = $json['data']['quotes']['EUR']['percent_change_24h'];
             $change = (doubleval($change));
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
                 $change = "+".format_number_2decimal($change);
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&<span class='$color'>$change</span>";
    }
    
    public function cardano_price(){
             $url =  "https://api.coinmarketcap.com/v2/ticker/2010/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $change = $json['data']['quotes']['EUR']['percent_change_24h'];
             $change = (doubleval($change));
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
                 $change = "+".format_number_2decimal($change);
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&<span class='$color'>$change</span>";
    }
    
    public function tron_price(){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1958/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $change = $json['data']['quotes']['EUR']['percent_change_24h'];
             $change = (doubleval($change));
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
                 $change = "+".format_number_2decimal($change);
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&<span class='$color'>$change</span>";
    }
    
    public function monero_price(){
             $url =  "https://api.coinmarketcap.com/v2/ticker/328/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $change = $json['data']['quotes']['EUR']['percent_change_24h'];
             $change = (doubleval($change));
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
                 $change = "+".format_number_2decimal($change);
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&<span class='$color'>$change</span>";
    }
    
    public function omisego_price(){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1808/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $change = $json['data']['quotes']['EUR']['percent_change_24h'];
             $change = (doubleval($change));
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
                 $change = "+".format_number_2decimal($change);
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&<span class='$color'>$change</span>";
    }
    
    public function zcash_price(){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1437/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $change = $json['data']['quotes']['EUR']['percent_change_24h'];
             $change = (doubleval($change));
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
                 $change = "+".format_number_2decimal($change);
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&<span class='$color'>$change</span>";
    }
    
    public function siacoin_price(){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1042/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $change = $json['data']['quotes']['EUR']['percent_change_24h'];
             $change = (doubleval($change));
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
                 $change = "+".format_number_2decimal($change);
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&<span class='$color'>$change</span>";
    }
    
    public function verge_price(){
             $url =  "https://api.coinmarketcap.com/v2/ticker/693/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $change = $json['data']['quotes']['EUR']['percent_change_24h'];
             $change = (doubleval($change));
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
                 $change = "+".format_number_2decimal($change);
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&<span class='$color'>$change</span>";
    }
    
    public function nxt_price(){
             $url =  "https://api.coinmarketcap.com/v2/ticker/66/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $change = $json['data']['quotes']['EUR']['percent_change_24h'];
             $change = (doubleval($change));
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
                 $change = "+".format_number_2decimal($change);
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&<span class='$color'>$change</span>";
    }   
}
