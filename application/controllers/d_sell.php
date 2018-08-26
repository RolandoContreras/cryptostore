<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_sell extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("sell_model","obj_sell");
        $this->load->model("currency_model","obj_currency");
    }   
                
    public function index(){  
        
           $this->get_session();
           $params = array(
                        "select" =>"sell.sell_id,
                                    sell.code,
                                    currency.name as currency,
                                    sell.date,
                                    sell.amount,
                                    sell.amount_btc,
                                    sell.wallet,
                                    sell.email,
                                    sell.phone,
                                    sell.active",
                        "join" => array('currency, sell.currency_id = currency.currency_id'),
                        "where" => "sell.status_value = 1 and type_pay = 2",
                        "order" => "sell.sell_id DESC"
               );
           //GET DATA FROM CUSTOMER
           $obj_sell = $this->obj_sell->search($params);
           
           /// PAGINADO
            $modulos ='ventas_bank'; 
            $seccion = 'Lista';        
            $link_modulo =  site_url().'dashboard/ventas_bank'; 
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_sell",$obj_sell);
            $this->tmp_mastercms->render("dashboard/ventas/sell_bank");
    }
    
    public function card(){  
        
           $this->get_session();
           $params = array(
                        "select" =>"sell.sell_id,
                                    sell.customer_id,
                                    sell.date,
                                    customer.first_name,
                                    customer.last_name,
                                    currency.name as currency,                              
                                    sell.amount,
                                    sell.price,
                                    sell.tax,
                                    sell.amount_btc,
                                    sell.wallet,
                                    sell.email,
                                    sell.phone,
                                    sell.active",
                        "join" => array('customer, sell.customer_id = customer.customer_id',
                                        'currency, sell.currency_id = currency.currency_id'),
                        "where" => "sell.status_value = 1 and type_pay = 1",
                        "order" => "sell.sell_id DESC"
               );
           //GET DATA FROM CUSTOMER
           $obj_sell = $this->obj_sell->search($params);
           
           /// PAGINADO
            $modulos ='ventas_card'; 
            $seccion = 'Lista';        
            $link_modulo =  site_url().'dashboard/ventas_card'; 
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_sell",$obj_sell);
            $this->tmp_mastercms->render("dashboard/ventas/sell_card");
    }
    
    public function procesar_bank(){
        
        if($this->input->is_ajax_request()){  
            ///GET PAY_ID
            $pay_id = $this->input->post("sell_id");
            //GET DATA FROM EMAIL
            $email = $this->input->post("email");
            $code = $this->input->post("code");
            //UPDATE FILES PAY
            $data_pay = array(
                        'active' => 3,
                        'updated_by' =>  $_SESSION['usercms']['user_id'],
                        'updated_at' => date("Y-m-d H:i:s")
                    ); 
            $this->obj_sell->update($pay_id,$data_pay);
                    
            $this->send_email_confirm_bank($email, $code);
            $data['message'] = "true";
            echo json_encode($data); 
            exit();
        }
    }
    
    public function procesar_card(){
        
        if($this->input->is_ajax_request()){  
            ///GET PAY_ID
            $pay_id = $this->input->post("sell_id");
            //GET DATA FROM EMAIL
            $first_name = $this->input->post("first_name");
            $last_name = $this->input->post("last_name");
            $email = $this->input->post("email");
            //UPDATE FILES PAY
            $data_pay = array(
                        'active' => 3,
                        'updated_by' =>  $_SESSION['usercms']['user_id'],
                        'updated_at' => date("Y-m-d H:i:s")
                    ); 
            $this->obj_sell->update($pay_id,$data_pay);
                    
            $this->send_email_confirm_card($first_name,$last_name,$email);
            $data['message'] = "true";
            echo json_encode($data); 
            exit();
        }
    }
    
    public function cancelar(){
           //UPDATE DATA SELL
        if($this->input->is_ajax_request()){   
              $sell_id = $this->input->post("sell_id");
              
                if(count($sell_id) > 0){
                    $data = array(
                        'active' => 2,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_sell->update($sell_id,$data);
                }
                echo json_encode($data);            
        exit();
        }
    }
    
    public function load_bank($sell_id=NULL){
            /// PARAMETROS PARA EL SELECT 
            $params = array(
                        "select" =>"*",
                         "where" => "sell_id = $sell_id"
            ); 
            $obj_sell  = $this->obj_sell->get_search_row($params); 
            
            //SELECT CURRENCY
            $params = array("select" => "*");
            $obj_currency  = $this->obj_currency->search($params);   
            //RENDER TO VIEW
            $this->tmp_mastercms->set("obj_currency",$obj_currency);
            
            
            $modulos ='ventas_bank'; 
            $seccion = 'Formulario';        
            $link_modulo =  site_url().'dashboard/'.$modulos; 

            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_sell",$obj_sell);
            $this->tmp_mastercms->render("dashboard/ventas/sell_form_bank");    
    }
    
    public function load_card($sell_id=NULL){
            /// PARAMETROS PARA EL SELECT 
            $params = array(
                        "select" =>"sell.sell_id,
                                    sell.customer_id,
                                    sell.date,
                                    sell.currency_id,
                                    customer.first_name,
                                    customer.last_name,
                                    sell.price,
                                    sell.tax,
                                    sell.amount,
                                    sell.amount,
                                    sell.obs,
                                    sell.amount_btc,
                                    sell.wallet,
                                    sell.email,
                                    sell.phone,
                                    sell.active",
                        "join" => array('customer, sell.customer_id = customer.customer_id'),
                        "where" => "sell.sell_id = $sell_id"
               );
            $obj_sell  = $this->obj_sell->get_search_row($params); 
            //SELECT CURRENCY
            $params = array("select" => "*");
            $obj_currency  = $this->obj_currency->search($params);   
            //RENDER TO VIEW
            $this->tmp_mastercms->set("obj_currency",$obj_currency);
            
            $modulos ='ventas_card'; 
            $seccion = 'Formulario';        
            $link_modulo =  site_url().'dashboard/'.$modulos; 

            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_sell",$obj_sell);
            $this->tmp_mastercms->render("dashboard/ventas/sell_form_card");    
    }
    
    public function validate(){
        //GET DATA GLOBAL
        $sell_id =  $this->input->post('sell_id');
        $type_sell =  $this->input->post('type_sell');
        $currency =  $this->input->post('currency');
        $amount =  $this->input->post('amount');
        $wallet =  $this->input->post('wallet');
        $amount_btc =  $this->input->post('amount_btc');
        $obs =  $this->input->post('obs');
        $date = formato_fecha_db_mes_dia_ano($this->input->post('date'));
        $active =  $this->input->post('active');
        
        if($type_sell == 2){
            //GET DATA BANK
            $code =  $this->input->post('code');
            $email =  $this->input->post('email');
            $phone =  $this->input->post('phone');
            
            //UPDATE DATA
            $data = array(
                'code' => $code,
                'currency_id' => $currency,
                'email' => $email,
                'phone' => $phone,
                'wallet' => $wallet,
                'amount' => $amount,
                'amount_btc' => $amount_btc,
                'active' => $active,
                'obs' => $obs,
                'date' => $date,
                'status_value' => 1,  
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $_SESSION['usercms']['user_id']
            );     
            $url = "ventas_bank";
        }else{
            //GET DATA CARD
            $price =  $this->input->post('price');
            $tax =  $this->input->post('tax');
            //UPDATE DATA
            $data = array(
                'currency_id' => $currency,
                'price' => $price,
                'tax' => $tax,
                'wallet' => $wallet,
                'amount' => $amount,
                'amount_btc' => $amount_btc,
                'active' => $active,
                'obs' => $obs,
                'date' => $date,
                'status_value' => 1,  
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $_SESSION['usercms']['user_id']
            );     
            $url = "ventas_card";
        }
        //SAVE DATA IN TABLE    
        $this->obj_sell->update($sell_id, $data);
        redirect(site_url()."dashboard/$url");
    }
    
    public function send_email_confirm_bank($email,$code){          
        $mensaje = wordwrap("<html>
            <div style='margin-top:25px'>
            <table width='100%' cellspacing='0' cellpadding='0' border='0'>
            <tbody>
            <tr>
            <td style='padding:15px 0;border-top:1px dotted #c5c5c5' width='100%'>
                <table style='table-layout:fixed' width='100%' cellspacing='0' cellpadding='0' border='0'>
                    <tbody>
                    <tr>
                        <td style='padding:0;margin:0' width='100%' valign='top'>
                            <p style='font-family:Lucida Grande','Lucida Sans Unicode','Lucida Sans',Verdana,Tahoma,sans-serif;font-size:15px;line-height:18px;margin-bottom:0;margin-top:0;padding:0;color:#1b1d1e'>
                            <p dir='auto' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'><b>Estimado cliente</strong></b> (EasyCripto)</p>
                            <div class='m_-8753525431338155893zd-comment' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'>
                              <p dir='auto' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'>
                              En relación a su pedido #$code informamos que ya fue procesado. Revise la billetera de su criptomoneda</p>
                              <p dir='auto' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'>
                              <p dir='auto' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'>
                              <em><a href='http://www.easycripto.com' rel='noreferrer' target='_blank' data-saferedirecturl='https://www.google.com/url?hl=es&amp;q=http://www.easycripto.com&amp;source=gmail&amp;ust=1533191115659000&amp;usg=AFQjCNH81sc5NC2jENYoO2QtgKdakGyHbA'>www.easycripto.com</a></em></p>
                              <p></p>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
        </div>
                    <div style='padding:10px;line-height:18px;font-family:Verdana,Arial,sans-serif;font-size:12px;color:#aaaaaa;margin:10px 0 14px 0;padding-top:10px;border-top:1px solid #eeeeee'></div>
                    Este correo electrónico es un servicio de Easycripto. 
                    <div style='clear:left;float:left;margin-top:10px;width:100%;font-family:Arial,Helvetica,sans-serif;font-size:12px!important'>
                    <span style='font-size:10px;display:block;margin-top:8px!important'>
                    La información contenida en este mensaje y/o archivo(s) adjunto(s), enviada desde SERFORTEC S.L, es confidencial/privilegiada y está destinada a ser leída sólo por la(s) persona(s) a la(s) que va dirigida. Le recordamos que sus datos han sido incorporados en el sistema de tratamiento de SERFORTEC S.L y que siempre y cuando se cumplan los requisitos exigidos por la normativa, usted podrá ejercer sus derechos de acceso, rectificación, limitación de tratamiento, supresión, portabilidad y oposición/revocación, en los términos que establece la normativa vigente en materia de protección de datos, dirigiendo su petición a la dirección postal Calle Orense (ed lexington) 85, bajo, 28020 MADRID o bien a través de correo electrónico <a href='mailto:dpo@easycripto.com' target='_blank'>dpo@easycript.com</a>. 
                    Si usted lee este mensaje y no es el destinatario señalado, el empleado o el agente responsable de entregar el mensaje al destinatario, o ha recibido esta comunicación por error, le informamos que está totalmente prohibida, y puede ser ilegal, cualquier divulgación, distribución o reproducción de esta comunicación, y le rogamos que nos lo notifique inmediatamente y nos devuelva el mensaje original a la dirección arriba mencionada. Gracias 
                    </span>
                </div>'
                .</html>", 70, "\n", true);
                    $titulo = "[Easycripto] : Pedido Procesado";
                    $headers = "MIME-Version: 1.0\r\n"; 
                    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
                    $headers .= "From: Easycripto <soporte@easycripto.com>\r\n";
                    $bool = mail("$email",$titulo,$mensaje,$headers);
    }
    
    public function send_email_confirm_card($first_name,$last_name,$email){          
        $mensaje = wordwrap("<html>
            <div style='margin-top:25px'>
            <table width='100%' cellspacing='0' cellpadding='0' border='0'>
            <tbody>
            <tr>
            <td style='padding:15px 0;border-top:1px dotted #c5c5c5' width='100%'>
                <table style='table-layout:fixed' width='100%' cellspacing='0' cellpadding='0' border='0'>
                    <tbody>
                    <tr>
                        <td style='padding:0;margin:0' width='100%' valign='top'>
                            <p style='font-family:Lucida Grande','Lucida Sans Unicode','Lucida Sans',Verdana,Tahoma,sans-serif;font-size:15px;line-height:18px;margin-bottom:0;margin-top:0;padding:0;color:#1b1d1e'>
                            <p dir='auto' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'><b>Estimado cliente</strong></b> $first_name $last_name</p>
                            <div class='m_-8753525431338155893zd-comment' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'>
                              <p dir='auto' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'>
                              En relación a su pedido le informamos que ya fue procesado. Revise la billetera de su criptomoneda</p>
                              <p dir='auto' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'>
                              <p dir='auto' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'>
                              <em><a href='http://www.easycripto.com' rel='noreferrer' target='_blank' data-saferedirecturl='https://www.google.com/url?hl=es&amp;q=http://www.easycripto.com&amp;source=gmail&amp;ust=1533191115659000&amp;usg=AFQjCNH81sc5NC2jENYoO2QtgKdakGyHbA'>www.easycripto.com</a></em></p>
                              <p></p>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
        </div>
                    <div style='padding:10px;line-height:18px;font-family:Verdana,Arial,sans-serif;font-size:12px;color:#aaaaaa;margin:10px 0 14px 0;padding-top:10px;border-top:1px solid #eeeeee'></div>
                    Este correo electrónico es un servicio de Easycripto. 
                    <div style='clear:left;float:left;margin-top:10px;width:100%;font-family:Arial,Helvetica,sans-serif;font-size:12px!important'>
                    <span style='font-size:10px;display:block;margin-top:8px!important'>
                    La información contenida en este mensaje y/o archivo(s) adjunto(s), enviada desde SERFORTEC S.L, es confidencial/privilegiada y está destinada a ser leída sólo por la(s) persona(s) a la(s) que va dirigida. Le recordamos que sus datos han sido incorporados en el sistema de tratamiento de SERFORTEC S.L y que siempre y cuando se cumplan los requisitos exigidos por la normativa, usted podrá ejercer sus derechos de acceso, rectificación, limitación de tratamiento, supresión, portabilidad y oposición/revocación, en los términos que establece la normativa vigente en materia de protección de datos, dirigiendo su petición a la dirección postal Calle Orense (ed lexington) 85, bajo, 28020 MADRID o bien a través de correo electrónico <a href='mailto:dpo@easycripto.com' target='_blank'>dpo@easycript.com</a>. 
                    Si usted lee este mensaje y no es el destinatario señalado, el empleado o el agente responsable de entregar el mensaje al destinatario, o ha recibido esta comunicación por error, le informamos que está totalmente prohibida, y puede ser ilegal, cualquier divulgación, distribución o reproducción de esta comunicación, y le rogamos que nos lo notifique inmediatamente y nos devuelva el mensaje original a la dirección arriba mencionada. Gracias 
                    </span>
                </div>'
                .</html>", 70, "\n", true);
                    $titulo = "[Easycripto] : Pedido Procesado";
                    $headers = "MIME-Version: 1.0\r\n"; 
                    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
                    $headers .= "From: Easycripto <soporte@easycripto.com>\r\n";
                    $bool = mail("$email",$titulo,$mensaje,$headers);
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