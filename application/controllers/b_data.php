<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_data extends CI_Controller {
    function __construct() {
        parent::__construct();
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
        //VERIFIRY GET SESSION    
        $this->get_session();
        
        //GET PRICE CURRENCY
        $btc = $this->btc_price();
        
        /// VISTA
        $customer_id = $_SESSION['customer']['customer_id'];
        $params = array(
                        "select" =>"customer.customer_id,
                                    customer.email,
                                    customer.created_at,
                                    customer.phone,
                                    customer.password,
                                    customer.first_name,
                                    customer.last_name,
                                    customer.dni,
                                    customer.postal,
                                    customer.birth_date,
                                    customer.address,
                                    customer.btc_address,
                                    customer.city,
                                    customer.provincia,                                    
                                    customer.status_value,
                                    paises.nombre as pais",
                        "where" => "customer.customer_id = $customer_id and paises.id_idioma = 7",
                        "join" => array('paises, customer.country = paises.id')
                                        );

         $obj_customer = $this->obj_customer->get_search_row($params);  
         //GET PRICE BTC
         
         //GET PRICE CURRENCY
         $btc = $this->btc_price();
         
         //SEND DATA TO VIEW  
         $this->tmp_backoffice->set("price_btc",$btc);
         $this->tmp_backoffice->set("obj_customer",$obj_customer);
         $this->tmp_backoffice->render("backoffice/b_data");
	}
        
        public function btc_price(){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             return $price;
        }
        
        public function update_password(){

             if($this->input->is_ajax_request()){   
                //SELECT ID FROM CUSTOMER
               $password = $this->input->post('password');
               $password_one = $this->input->post('password_one');
               $password_two = $this->input->post('password_two');
               $customer_id = $this->input->post('customer_id');
               
               $param_customer = array(
                                "select" => "password",
                                "where" => "customer_id = '$customer_id' and password = '$password'");
                $customer = count($this->obj_customer->get_search_row($param_customer));
                if($customer > 0){
                    if($password_one == $password_two){
                            //UPDATE DATA EN CUSTOMER TABLE
                            $data = array(
                                            'password' => $password_one,
                                            'updated_by' => $customer_id,
                                            'updated_at' => date("Y-m-d H:i:s")
                                        ); 
                                        $this->obj_customer->update($customer_id,$data);

                                 $data['message'] = "true";
                    }else{
                          $data['message'] = "false";
                    }
                }else{
                    $data['message'] = "false";
                }
               echo json_encode($data); 
            }
        }
        
        public function update_dni(){

             if($this->input->is_ajax_request()){   
                //SELECT ID FROM CUSTOMER
               $dni = $this->input->post('dni');
               $customer_id = $this->input->post('customer_id');
               if($dni != ""){
                            //UPDATE DATA EN CUSTOMER TABLE
                            $data = array(
                                        'dni' => $dni,
                                        'updated_by' => $customer_id,
                                        'updated_at' => date("Y-m-d H:i:s")
                                        ); 
                            $this->obj_customer->update($customer_id,$data);
                             $data['message'] = "true";
                             $data['print'] = "Documento Guardado";
                             $data['url'] = "misdatos";
                         echo json_encode($data); 
               }else{
                     $data['message'] = "false";
                     $data['print'] = "El DNI no puede estar en blanco";
                     $data['url'] = "misdatos";
                     echo json_encode($data); 
               }
            }
        }
        
        public function validate_password() {
        //SELECT ID FROM CUSTOMER
        $password = str_to_minuscula(trim($this->input->post('password')));
        $customer_id = trim($this->input->post('customer_id'));
        
        $param_customer = array(
            "select" => "password",
            "where" => "customer_id = '$customer_id' and password = '$password'");
        $customer = count($this->obj_customer->get_search_row($param_customer));
        
        if ($customer > 0) {
            $data['message'] = "true";
        } else {
            $data['message'] = "false";
        }
        echo json_encode($data);
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
