<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class B_home extends CI_Controller {
     function __construct() {
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("messages_model","obj_messages");
        $this->load->model("sell_model","obj_sell");
    }

    public function index()
    {
        //GET SESION ACTUALY
        $this->get_session();
        /// VISTA
        $customer_id = $_SESSION['customer']['customer_id'];
        //GET DATE
        $month = date("m");
        $year = date("Y");
        //GET LAST DAY ON MONTH
        $last_day = last_month_day($month,$year);
        //GET FIRST DAY ON MONTH
        $first_day = first_month_day($month,$year); 
        
        $params = array(
                        "select" =>"customer.customer_id,
                                    customer.username,
                                    customer.email,
                                    customer.first_name,
                                    customer.last_name,
                                    customer.active,
                                    customer.dni,
                                    customer.birth_date,
                                    customer.created_at,
                                    customer.status_value,
                                    ",
                         "where" => "customer.customer_id = $customer_id",
                                        );
            $obj_customer = $this->obj_customer->get_search_row($params);
            
            //GET FRANCHISE ACTIVE
            if($obj_customer->active == 0){
                $obj_franchise = $this->franchise();
                $this->tmp_backoffice->set("obj_franchise",$obj_franchise);
            }
            //GET TOTAL AMOUNT
            $obj_buy = $this->total_amount($customer_id);
            $obj_total = $obj_buy->total;
             
             //GET PRICE BTC
             $price_btc = $this->btc_price();
             
                
                $this->tmp_backoffice->set("price_btc",$price_btc);
                $this->tmp_backoffice->set("obj_total",$obj_total);
                $this->tmp_backoffice->set("obj_customer",$obj_customer);
                $this->tmp_backoffice->render("backoffice/b_home");
    }
    
    public function btc_price(){
             $url = "https://www.bitstamp.net/api/ticker";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price_btc = $json['last'];
             $open = $json['open'];
             
             if($open > $price_btc){
                 //PRICE WENT UP
                 $color = "red";
                 $changes = $price_btc - $open;
                 $percent = $changes / $open;
                 $percent = $percent * 100;
                 $percent_change = number_format($percent, 2); 
             }else{
                 //PRICE WENT DOWN
                 $color = "green";
                 $changes = $open - $price_btc;
                 $percent = $changes / $open;
                 $percent = $percent * 100;
                 $percent_change = number_format($percent, 2);   
             }
             
             return "<span style='color:#D4AF37'>"."$".$price_btc."</span>&nbsp;&nbsp;<span style='color:".$color.";font-size: 14px;font-weight: bold;'>$percent_change</span>";
    }
    
    public function franchise(){
            $params = array(
                        "select" =>"franchise_id,
                                    name,
                                    price,
                                    point,
                                    img",
                         "where" => "status_value = 1 and franchise_id <> 6",
                        "order" => "price ASC",
                );
            $obj_franchise = $this->obj_franchise->search($params);
            return $obj_franchise;
    }
    
    public function next_range($range_id){
            $params = array(
                        "select" =>"range_id,
                                    name,
                                    img,
                                    point_grupal",
                         "where" => "range_id > $range_id");
            $next_range = $this->obj_ranges->get_search_row($params);
            return $next_range;
    }
    
    public function total_amount($customer_id){
            $params_total = array(
                                "select" =>"sum(amount) as total",
                                 "where" => "customer_id = $customer_id",
                                );
             $obj_sell = $this->obj_sell->get_search_row($params_total); 
             return $obj_sell;
    }
    
    public function make_pedido(){

             if($this->input->is_ajax_request()){   
                //SELECT ID FROM CUSTOMER
               $franchise_id = $this->input->post('franchise_id');
               $customer_id = $_SESSION['customer']['customer_id'];
               //verify
               
               
               
               if(($franchise_id != "") && ($customer_id != "")){
                            //UPDATE DATA EN CUSTOMER TABLE
                         $params_total = array(
                                "select" =>"point",
                                 "where" => "franchise_id = $franchise_id",
                                );
                        $obj_franchise = $this->obj_franchise->get_search_row($params_total);    
                        
                        
                        
                        //UPDATE
                        $data = array(
                            'franchise_id' => $franchise_id,
                            'point_calification_left' => $obj_franchise->point,
                            'point_calification_rigth' => $obj_franchise->point,
                            'updated_by' => $customer_id,
                            'updated_at' => date("Y-m-d H:i:s")
                        ); 
                        $this->obj_customer->update($customer_id,$data);
                        //send data
                             $data['message'] = "true";
                             echo json_encode($data); 
                             exit();
               }
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
    
    public function get_messages_informative(){
            $params = array(
                            "select" =>"",
                             "where" => "status_value = 1 and page = 1 and active = 1",
                            "order" => "position ASC");
                
           $messages_informative = $this->obj_otros->search($params); 
            return $messages_informative;
    }
    
    public function get_news(){
            $params = array(
                            "select" =>"news_id,
                                        img",
                             "where" => "status_value = 1");
                
           $news = $this->obj_news->search($params); 
           return $news;
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


    
