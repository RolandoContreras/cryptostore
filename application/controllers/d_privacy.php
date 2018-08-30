<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_privacy extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("dinamic_model","obj_dinamic");
    }   
                
    public function index(){  
            //GER SESSION
            $this->get_session();
            $params = array(
                        "select" =>"dinamic_id,
                                    date,
                                    title,
                                    content,
                                    active,",
                         "where" => "dinamic_id = 2 and status_value = 1",
            );
            //GET DATA COMMENTS
            $obj_dinamic= $this->obj_dinamic->get_search_row($params);
            
            /// PAGINADO
            $modulos ='privacy'; 
            $seccion = 'Lista';        
            $link_modulo =  site_url().'dashboard/'.$modulos; 
            /// DATA
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_dinamic",$obj_dinamic);
            $this->tmp_mastercms->render("dashboard/dinamic/privacy");
    }
    
    public function save_content(){
            //UPDATE DATA ORDERS
        if($this->input->is_ajax_request()){   
              $dinamic_id = $this->input->post("dinamic_id");
              $title = $this->input->post("title");
              $content = $this->input->post("editorText");
              
                if(count($dinamic_id) > 0){
                    $data = array(
                        'content' => $content,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_dinamic->update($dinamic_id,$data);
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