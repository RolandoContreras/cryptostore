<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class b_sell extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("sell_model","obj_sell");
        $this->load->model("customer_model","obj_customer");
        $this->load->model("messages_model","obj_messages");
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        //GET CUSTOMER_ID $_SESSION  
        $this->get_session();
        //GET CUSTOMER_ID    
        $customer_id = $_SESSION['customer']['customer_id'];
        //GET PRICE BTC
        $price_btc = $this->btc_price();
         
        $url = explode("/", uri_string());
        $params = array(
                "select" =>"customer.first_name,
                            customer.last_name,
                            currency.name as currency,
                            currency.img,
                            sell.amount,
                            sell.date,
                            sell.amount_btc,
                            sell.date,
                            sell.active",
                    "join" => array('sell, customer.customer_id = sell.customer_id',
                                    'currency, sell.currency_id = currency.currency_id'),
                     "where" => "customer.customer_id = $customer_id",
                     "order" => "sell.date DESC");
        //GET DATA FROM CUSTOMER
        $obj_sell  = $this->obj_customer->search($params);
        
        //SEND DATA
        $this->tmp_backoffice->set("price_btc",$price_btc);
        $this->tmp_backoffice->set("obj_sell",$obj_sell);
        $this->tmp_backoffice->render("backoffice/b_sell");
        
    }
    
    public function btc_price(){
         $url =  "https://api.coinmarketcap.com/v2/ticker/1/?convert=EUR";
         $fgc = file_get_contents($url);
         $json = json_decode($fgc, true);
         $price = $json['data']['quotes']['EUR']['price'];
         return $price;
    }    
    
    public function get_messages_informative(){
            $params = array(
                            "select" =>"",
                             "where" => "status_value = 1 and page = 6 and active = 1",
                            "order" => "position ASC");
                
           $messages_informative = $this->obj_otros->search($params); 
            return $messages_informative;
    }
        

        public function consultar(){
        if($this->input->is_ajax_request()){   
            $bonus_id = trim($this->input->post('concepto'));
            $customer_id = $_SESSION['customer']['customer_id'];
            
                if(count($bonus_id) > 0){
                    
                     //SELECT ID FROM CUSTOMER
                            $params = array(
                        "select" =>"customer.username,
                                    customer.first_name,
                                    customer.last_name,
                                    commissions.amount,
                                    commissions.date,
                                    commissions.status_value,
                                    bonus.name as bonus",
                            "join" => array('customer, commissions.customer_id = customer.customer_id',
                                             'bonus, commissions.bonus_id = bonus.bonus_id'),
                             "where" => "customer.customer_id = $customer_id and bonus.bonus_id = $bonus_id",
                             "order" => "commissions.date DESC",
                             "limit" => "50");
    
                            //GET DATA FROM CUSTOMER
                            $commissions['commissions'] = $this->obj_commissions->search($params);  
                            
                            if(count($commissions['commissions']) > 0){
                                //SEND DATA
                                $data['message'] = "true";
                                $data['print'] =  $commissions['commissions'];
                            }else{
                                $data['message'] = "false";
                            }
                            
                }
                echo json_encode($data);            
        exit();
            }
    }
        
        public function get_session(){          
        if (isset($_SESSION['customer'])){
            if($_SESSION['customer']['logged_customer']=="TRUE" && $_SESSION['customer']['status']=='1'){               
                return true;
            }else{
                redirect(site_url().'home');
            }
        }else{
            redirect(site_url().'home');
        }
    }
    
        public function get_total_messages($customer_id){
        $params = array(
                        "select" =>"count(messages_id) as total",
                        "where" => "customer_id = $customer_id and active = 1 and status_value = 1 and support <> 1",
                        
                                        );
            $obj_message = $this->obj_messages->get_search_row($params);
            //GET TOTAL MESSAGE ACTIVE   
            $all_message = $obj_message->total;
            return $all_message;
        }
    
        public function get_messages($customer_id){
            $params = array(
                        "select" =>"messages_id,
                                    date,
                                    subject,
                                    label,
                                    type,
                                    messages",
                        "where" => "customer_id = $customer_id and status_value = 1 and support <> 1",
                        "order" => "messages_id DESC",
                        "limit" => "3",
                                        );
            $obj_message = $this->obj_messages->search($params); 
            //GET ALL MESSAGE   
            return $obj_message;
        }
}
