<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Stripegateway
 *
 * @author Mytical
 */
include ("vendor/autoload.php");

class Stripegateway {
    public function __construct(){
        $stripe = array(
                 "secret_key" => "sk_test_YB46cDz3JxxW1wIbOChJm3zT",
                 "public_key" => "pk_test_SCNGJ2qonbYs5a5sX5Nj0ksm"
                );
                \Stripe\Stripe::setApiKey($stripe["secret_key"]);
    }
    
    public function checkout($data){
        $message = ""; 
        try{
            $mycard = array(
                "number" => $data['number'],
                "exp_month" => $data['exp_month'],
                "exp_year" => $data['exp_year']
                );
        
            $charge = \Stripe\Charge::create(array(
                'card' =>$mycard, 
                'amount' =>$data['amount'],
                'currency' =>'usd' 
            )); 
            $message = $charge->status;
            
        } catch (Exception $ex) {
            $message = $ex->getMessage();
        }
        return $message;
    }
}

