<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Allcurrency extends CI_Controller {
    public function __construct(){
     parent::__construct();
     $this->load->model('comments_model','obj_comments');
    } 

    public function index()
	{
        //GET DATA COMMENTS
        $data['btc'] = $this->btc_price();
        $data['bch'] = $this->bch_price();
        $data['eth'] = $this->eth_price();
        $data['dash'] = $this->dash_price();
        $data['rrp'] = $this->ripple_price();
        $data['ltc'] = $this->litecoin_price();
        $data['car'] = $this->cardano_price();
        $data['tron'] = $this->tron_price();
        $data['mnr'] = $this->monero_price();
        $data['omg'] = $this->omisego_price();
        $data['zch'] = $this->zcash_price();
        $data['sia'] = $this->siacoin_price();
        $data['verge'] = $this->verge_price();
        $data['nxt'] = $this->nxt_price();
        $this->load->view('allcurrency',$data);
	}
    
    public function btc_price(){
             $url =  "https://api.coinmarketcap.com/v1/ticker/bitcoin";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $change = $json[0]['percent_change_24h'];
             $change = (doubleval($change))     ;
             
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             
             return $price."&nbsp;&nbsp;&nbsp;<span class='$color'>$change</span>";
    }
    public function eth_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/ethereum";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $change = $json[0]['percent_change_24h'];
             $change = (doubleval($change))     ;
             
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&nbsp;&nbsp;&nbsp;<span class='$color'>$change</span>";
    }
    public function bch_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/bitcoin-cash";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $change = $json[0]['percent_change_24h'];
             $change = (doubleval($change))     ;
             
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&nbsp;&nbsp;&nbsp;<span class='$color'>$change</span>";
    }     
    public function dash_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/dash/";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $change = $json[0]['percent_change_24h'];
             $change = (doubleval($change))     ;
             
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&nbsp;&nbsp;&nbsp;<span class='$color'>$change</span>";
    }
    public function ripple_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/ripple";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $change = $json[0]['percent_change_24h'];
             $change = (doubleval($change))     ;
             
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&nbsp;&nbsp;&nbsp;<span class='$color'>$change</span>";
    }
    public function litecoin_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/litecoin";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $change = $json[0]['percent_change_24h'];
             $change = (doubleval($change))     ;
             
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&nbsp;&nbsp;&nbsp;<span class='$color'>$change</span>";
    }
    public function cardano_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/cardano";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $change = $json[0]['percent_change_24h'];
             $change = (doubleval($change))     ;
             
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&nbsp;&nbsp;&nbsp;<span class='$color'>$change</span>";
    }
    public function tron_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/tron";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $change = $json[0]['percent_change_24h'];
             $change = (doubleval($change))     ;
             
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&nbsp;&nbsp;&nbsp;<span class='$color'>$change</span>";
    }
    public function monero_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/monero";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $change = $json[0]['percent_change_24h'];
             $change = (doubleval($change))     ;
             
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&nbsp;&nbsp;&nbsp;<span class='$color'>$change</span>";
    }
    public function omisego_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/omisego";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $change = $json[0]['percent_change_24h'];
             $change = (doubleval($change))     ;
             
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&nbsp;&nbsp;&nbsp;<span class='$color'>$change</span>";
    }
    public function zcash_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/zcash";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $change = $json[0]['percent_change_24h'];
             $change = (doubleval($change))     ;
             
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&nbsp;&nbsp;&nbsp;<span class='$color'>$change</span>";
    }
    public function siacoin_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/siacoin";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $change = $json[0]['percent_change_24h'];
             $change = (doubleval($change))     ;
             
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&nbsp;&nbsp;&nbsp;<span class='$color'>$change</span>";
    }
    public function verge_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/verge";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $change = $json[0]['percent_change_24h'];
             $change = (doubleval($change))     ;
             
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&nbsp;&nbsp;&nbsp;<span class='$color'>$change</span>";
    }
    public function nxt_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/nxt";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             $change = $json[0]['percent_change_24h'];
             $change = (doubleval($change))     ;
             
             if($change > 0){
                 //PRICE WENT UP
                 $color = "text-green";
             }else{
                 //PRICE WENT DOWN
                 $color = "text-red";
             }
             return $price."&nbsp;&nbsp;&nbsp;<span class='$color'>$change</span>";
    }
}
