<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_soporte extends CI_Controller {
    function __construct() {
        parent::__construct();
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
        //VERIFIRY GET SESSION    
         $this->get_session();
        //GET CUSTOMER_ID $_SESSION   
        $customer_id = $_SESSION['customer']['customer_id'];
        //GET PRICE CURRENCY
        $btc = $this->btc_price();
        //GET MESSAGES SUPPORT
        $params = array(
                        "select" =>"messages_id,
                                    date,
                                    title,
                                    answer,
                                    active",
                        "where" => "customer_id = $customer_id and support = 1 and status_value = 1",
                        "order" => "messages_id DESC"
                                        );
        //GET DATA FROM CUSTOMER
        $obj_message_support= $this->obj_messages->search($params);
        
        
        //SEND DATA OF BITCOIN PRICE
        $this->tmp_backoffice->set("price_btc",$btc);  
        $this->tmp_backoffice->set("obj_message_support",$obj_message_support);
        $this->tmp_backoffice->render("backoffice/b_soporte");
	}
        
        public function btc_price(){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             return $price;
        }
        
        public function validate(){
        
        //GET SESION ACTUALY
        $this->get_session();
        $customer_id = $_SESSION['customer']['customer_id'];
        $title = $_POST['title'];
        $message = $_POST['message'];
        
        $param = array("select" =>"messages_id",
                         "where" => "customer_id = $customer_id and active = 1 and status_value = 1 and support = 1");
         $obj_message = $this->obj_messages->get_search_row($param);
         $messaje_support_count = count($obj_message);
         
         //VERIFI ONLY 1 ROW 
        if($messaje_support_count == 0){
                    // INSERT ON TABLE activation_message
                        $data_insert = array(
                                'customer_id' => $customer_id,
                                'date' => date("Y-m-d H:i:s"),
                                'text' => $message,
                                'title' => $title,
                                'support' => 1,
                                'active' => 1,
                                'status_value' => 1,    
                                'created_by' => $customer_id,
                                'created_at' => date("Y-m-d H:i:s")
                            ); 
                           $this->obj_messages->insert($data_insert);
                        echo '<div class="alert alert-success" style="text-align: center">Creado Exitosamente</div>';
                
           
        }else{
            echo '<div class="alert alert-danger" style="text-align: center">Ya tiene un mensaje en espera.</div>';
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
