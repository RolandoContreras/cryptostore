<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_informative extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("messages_model","obj_messages");
    }   
                
    public function index(){  
            //GER SESSION
            $this->get_session();
            $params = array(
                        "select" =>"messages_id,
                                    title,
                                    text,
                                    active,
                                    status_value",
                        "where" => "status_value = 1 and support = 0"
                        
            );
            //GET DATA COMMENTS
            $obj_messages_informative= $this->obj_messages->search($params);
            
            /// PAGINADO
            $modulos ='informativos'; 
            $seccion = 'Lista';        
            $link_modulo =  site_url().'dashboard/'.$modulos; 
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_messages_informative",$obj_messages_informative);
            $this->tmp_mastercms->render("dashboard/informative/informative_list");
    }
    
    public function soporte(){
        
        //GET SESSION
        $this->get_session();
        $params = array(
                        "select" =>"messages.messages_id,
                                    customer.customer_id,
                                    customer.email,
                                    customer.first_name,
                                    customer.last_name,
                                    messages.date,
                                    messages.title,
                                    messages.answer,
                                    messages.text,
                                    messages.active,
                                    ",
                        "where" => "messages.support = 1 and messages.status_value = 1",
                        "order" => "messages_id DESC",
                        "join" => array('customer, customer.customer_id = messages.customer_id')
                                        );
            $obj_message = $this->obj_messages->search($params);
            
            /// PAGINADO
            $modulos ='soporte'; 
            $seccion = 'Lista';        
            $link_modulo =  site_url().'dashboard/'.$modulos; 
            /// DATA
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_message",$obj_message);
            $this->tmp_mastercms->render("dashboard/messages/support_list");
    }
    
    public function update(){
            //UPDATE DATA ORDERS
        if($this->input->is_ajax_request()){   
                $message_id = $this->input->post("message_id");
                $message = $this->input->post("message");
                
                if(count($message_id) > 0){
                    $data = array(
                        'active' => 0,
                        'answer' => $message,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_messages->update($message_id,$data);
                }
                echo json_encode($data);            
            exit();
            }
    }
    
    public function load($messages_id=NULL){
        //VERIFY IF ISSET CUSTOMER_ID
        if ($messages_id != ""){
            /// PARAMETROS PARA EL SELECT 
            $where = "messages_id = $messages_id";
            $params = array(
                        "select" =>"*",
                         "where" => $where,
            ); 
            $obj_informative  = $this->obj_messages->get_search_row($params); 
            
            //RENDER
            $this->tmp_mastercms->set("obj_informative",$obj_informative);
          }
      
            $modulos ='informativos'; 
            $seccion = 'Formulario';        
            $link_modulo =  site_url().'dashboard/'.$modulos; 

            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->render("dashboard/informative/informative_form");    
    }
    
    public function validate(){
        //GET CUSTOMER_ID
        $informative_id = $this->input->post("messages_id");
        if($informative_id != ""){
            //PARAM DATA
            $data = array(
               'title' => $this->input->post('title'),
               'text' => $this->input->post('text'),
               'active' => $this->input->post('active'),
               'status_value' => 1,
               'updated_at' => date("Y-m-d H:i:s"),
               'updated_by' => $_SESSION['usercms']['user_id']
                );          
            //SAVE DATA IN TABLE    
            $this->obj_messages->update($informative_id, $data);
        }else{
            //PARAM DATA SAVE
            $data = array(
               'title' => $this->input->post('title'),
               'text' => $this->input->post('text'),
               'active' => $this->input->post('active'),
               'status_value' => 1,
               'created_at' => date("Y-m-d H:i:s"),
               'created_by' => $_SESSION['usercms']['user_id'],
                );          
            //SAVE DATA IN TABLE    
            $this->obj_messages->insert($data);
        }
        redirect(site_url()."dashboard/informativos");
    }
    
    public function delete_informative(){
            //UPDATE DATA OTROS
        if($this->input->is_ajax_request()){  
              $message_id = $this->input->post("message_id");
                if(count($message_id) > 0){
                    $data = array(
                        'status_value' => 0,
                        'active' => 0,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_messages->update($message_id,$data);
                }
                echo json_encode($data);            
        exit();
            }
    }
    
    public function edit_informative(){
            //UPDATE DATA ORDERS
        if($this->input->is_ajax_request()){   
                $comment_id = $this->input->post("comment_id");
                if(count($comment_id) > 0){
                    $data = array(
                        'status_value' => 0,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_comments->update($comment_id,$data);
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