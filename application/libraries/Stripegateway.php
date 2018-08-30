<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
include ("vendor/autoload.php");
class Stripegateway {
    public function __construct(){
        $stripe = array(
                 "secret_key" => "sk_live_Xn74AuMSxbTpxeToVdYIz166",
                 "public_key" => "pk_live_hkJ3sunnrXSMThENiXfBUlZ5"
                );
                \Stripe\Stripe::setApiKey($stripe["secret_key"]);
    }
    
    public function checkout($token,$type,$email,$amount){
        $message = ""; 
        try{
            $charge = \Stripe\Charge::create(array(
                'amount' =>$amount, 
                'currency' =>'usd', 
                'description' =>'Compra de Criptomoneda', 
                'source' => $token,
                
            )); 
            $message = $charge->status;
            
        } catch (Exception $ex) {
            $message = $ex->getMessage();
        }
        return $message;
    }
}

