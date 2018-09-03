<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_criptocurrency extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("currency_model","obj_currency");
    }   
                
    public function index(){  
           $this->get_session();
           $params = array(
                        "select" =>"currency_id,
                                    name,
                                    slug,
                                    percent,
                                    img,
                                    active
                                    ",
                        "where" => "status_value = 1"
               );
           //GET DATA FROM CUSTOMER
           $obj_currency= $this->obj_currency->search($params);
           
           /// PAGINADO
            $modulos ='Criptomonedas'; 
            $seccion = 'Lista';        
            $link_modulo =  site_url().'dashboard/monedas'; 
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_currency",$obj_currency);
            $this->tmp_mastercms->render("dashboard/monedas/currency_list");
    }
    
    public function validate(){
        //GET CUSTOMER_ID
        $currency_id = $this->input->post("currency_id");
        $data = array(
                'name' => $this->input->post('name'),
                'slug' => $this->input->post('slug'),
                'percent' => $this->input->post('percent'),
                'active' => $this->input->post('active'),
                'status_value' => 1,
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $_SESSION['usercms']['user_id']
                );          
            //SAVE DATA IN TABLE    
            $this->obj_currency->update($currency_id, $data);
        redirect(site_url()."dashboard/monedas");
    }
 
    public function load($currency_id=NULL){
        //VERIFY IF ISSET CUSTOMER_ID
        if ($currency_id != ""){
            /// PARAMETROS PARA EL SELECT 
            $where = "currency_id = $currency_id";
            $params = array(
                        "select" =>"*",
                         "where" => $where,
            ); 
            $obj_currency  = $this->obj_currency->get_search_row($params); 
            
            //RENDER
            $this->tmp_mastercms->set("obj_currency",$obj_currency);
          }
            
            $modulos ='monedas'; 
            $seccion = 'Formulario';        
            $link_modulo =  site_url().'dashboard/'.$modulos; 

            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->render("dashboard/monedas/currency_form");    
    }
    
    public function delete(){
        //DELETE CUSTOMER
        if($this->input->is_ajax_request()){  
                $currency_id = $this->input->post("currency_id");
                if(count($currency_id) > 0){
                    $data = array(
                        'status_value' => 0,
                        'active' => 0,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_currency->update($currency_id,$data);
                }
                echo json_encode($data);            
        exit();
            }
    }
    
    public function get_session(){          
        if (isset($_SESSION['usercms'])){
            if($_SESSION['usercms']['logged_usercms']=="TRUE" && $_SESSION['usercms']['status']==1){               
                return true;
            }else{
                redirect(site_url().'dashboard');
            }
        }else{
            redirect(site_url().'dashboard');
        }
    }
}
?>