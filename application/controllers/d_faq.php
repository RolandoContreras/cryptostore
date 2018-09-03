<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_faq extends CI_Controller{    
    
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
                         "where" => "faq = 1 and status_value = 1",
            );
            //GET DATA COMMENTS
            $obj_faq= $this->obj_dinamic->search($params);
            
            /// PAGINADO
            $modulos ='faq'; 
            $seccion = 'Lista';        
            $link_modulo =  site_url().'dashboard/'.$modulos; 
            /// DATA
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_faq",$obj_faq);
            $this->tmp_mastercms->render("dashboard/dinamic/faq");
    }
    
    public function load($dinamic_id=NULL){
        //VERIFY IF ISSET CUSTOMER_ID
        if ($dinamic_id != ""){
            /// PARAMETROS PARA EL SELECT 
            $where = "dinamic_id = $dinamic_id";
            $params = array(
                        "select" =>"*",
                         "where" => $where,
            ); 
            $obj_dinamic  = $this->obj_dinamic->get_search_row($params); 
            
            //RENDER
            $this->tmp_mastercms->set("obj_dinamic",$obj_dinamic);
          }
            
            $modulos ='faq'; 
            $seccion = 'Formulario';        
            $link_modulo =  site_url().'dashboard/'.$modulos; 

            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->render("dashboard/dinamic/faq_form");    
    }
    
    public function validate(){
        //get date
        $date = date("Y-m-d");
        $content = $this->input->post('content');
        //GET CUSTOMER_ID
        $dinamic_id = $this->input->post("dinamic_id");
        //SAVE DATA IN TABLE    
        if($dinamic_id > 0){
            $data = array(
                'title' => $this->input->post('title'),
                'content' => $content,
                'active' => $this->input->post('active'),
                'date' => $date,
                'faq' => 1,
                'status_value' => 1,
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $_SESSION['usercms']['user_id']
                );          
            $this->obj_dinamic->update($dinamic_id, $data);
        }else{
            $data = array(
                'title' => $this->input->post('title'),
                'content' => $content,
                'active' => $this->input->post('active'),
                'date' => $date,
                'faq' => 1,
                'status_value' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => $_SESSION['usercms']['user_id']
                );  
            $this->obj_dinamic->insert($data);
        }
            
        redirect(site_url()."dashboard/faq");
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
    
    public function delete(){
        //DELETE CUSTOMER
        if($this->input->is_ajax_request()){  
                $dinamic_id = $this->input->post("dinamic_id");
                if($dinamic_id > 0){
                    $data = array(
                        'status_value' => 0,
                        'active' => 0,
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