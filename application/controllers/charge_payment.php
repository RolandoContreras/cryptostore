<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charge_payment extends CI_Controller {
    public function __construct(){
     parent::__construct();
        $this->load->library('stripegateway');
        $this->load->model('customer_model','obj_customer');
        $this->load->model('sell_model','obj_sell');
        $this->load->model('currency_model','obj_currency');
        $this->load->model('paises_model','obj_paises');
    } 

    public function index(){
        //GET SESSION
        $this->get_session();
        //DECLARO VAR MESSAGE
        $token =  $this->input->post("stripeToken");
        $type = 'card';
        $email =  $this->input->post("stripeEmail");        
        $amount =  $this->input->post("total_card");        
        $tax =  $this->input->post("tax");   
        $total_db =  $this->input->post("total_db");   
        
        //procees cards
        $message = $this->stripegateway->checkout($token,$type,$email,$amount);
        $data["message"] = "";
        
        if($message == "succeeded"){
            //GET DATA $_SESSION FOR CUSTOMER
            $day = $_SESSION['buy']['day'];
            $month = $_SESSION['buy']['month'];
            $year = $_SESSION['buy']['year'];
            $wallet = $_SESSION['buy']['wallet'];
            //create birth day
            $birth_date = "$year-$month-$day";
            $first_name = $_SESSION['buy']['name'];
            $last_name = $_SESSION['buy']['last_name'];
            $email = $_SESSION['buy']['email'];
            $phone = $_SESSION['buy']['phone'];
            $address = $_SESSION['buy']['address'];
            $postal = $_SESSION['buy']['postal'];
            $city = $_SESSION['buy']['poblacion'];
            $provincia = $_SESSION['buy']['provincia'];
            $country = $_SESSION['buy']['country'];
            
           //CREATE PASSWORD NEW CUSTOMER
            $password = rand(1,999999);
            //insert new customer
            $data = array(
                    'email' => $email,
                    'password' => $password,
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'phone' => $phone,
                    'birth_date' => $birth_date,
                    'address' => $address,
                    'btc_address' => $wallet,
                    'postal' => $postal,
                    'country' => $phone,
                    'city' => $city,
                    'provincia' => $provincia,
                    'country' => $country,
                    'active' => 1,
                    'status_value' => 1,
                    'created_at' => date("Y-m-d H:i:s"),
                    'created_by' => 1,
                    );
            $customer_id  =  $this->obj_customer->insert($data);
            
            //GET DATA $_SESSION FOR SELL
            $btc = $_SESSION['buy']['btc'];
            $currency = $_SESSION['buy']['currency'];
            $price = $_SESSION['buy']['price_dolar'];
            
            //GET DATA CURRENCY ID
            $params = array(
                            "select" =>"currency_id,name",
                            "where" => "slug = '$currency' and status_value = 1",
                            );
            $obj_currency = $this->obj_currency->get_search_row($params);
            $currency_id = $obj_currency->currency_id;
            $currency_name = $obj_currency->name;
            //insert data on sell table
            $data = array(
                    'currency_id' => $currency_id,
                    'customer_id' => $customer_id,
                    'type_pay' => 1,
                    'date' => date("Y-m-d H:i:s"),
                    'wallet' => $wallet,
                    'email' => $email,
                    'phone' => $phone,
                    'price' => $price,
                    'amount' => $total_db,
                    'tax' => format_number_2decimal($tax),
                    'amount_btc' => $btc,
                    'active' => 1,
                    'status_value' => 1,
                    'created_at' => date("Y-m-d H:i:s"),
                    'created_by' => 1,
                    );
            $this->obj_sell->insert($data);
            
            //CREATE EMAIL
            $this->message($total_db,$btc,$currency_name,$email,$password);
            //UNSET $_SESSION
            $this->logout();
            $this->load->view('confirm_credit_card');
        }else{
            $obj_dolar = $_SESSION['buy']['price_dolar'];
            $data['price_dolar'] = $_SESSION['buy']['price_dolar'];
            $data['btc'] = $_SESSION['buy']['btc'];
            $data['img'] = $_SESSION['buy']['img'];
            $data['currency'] = $_SESSION['buy']['currency'];
            $data['phone'] = $_SESSION['buy']['phone'];
            $data['wallet'] = $_SESSION['buy']['wallet'];
            $data['email'] = $_SESSION['buy']['email'];
            $data['radio'] = $_SESSION['buy']['radio'];
            
            $data['name'] = $_SESSION['buy']['name'];
            $data['last_name'] = $_SESSION['buy']['last_name'];
            $data['day'] = $_SESSION['buy']['day'];
            $data['month'] = $_SESSION['buy']['month'];
            $data['year'] = $_SESSION['buy']['year'];
            $data['address'] = $_SESSION['buy']['address'];
            $data['postal'] = $_SESSION['buy']['postal'];
            $data['poblacion'] = $_SESSION['buy']['poblacion'];
            $data['provincia'] = $_SESSION['buy']['provincia'];
            $obj_country = $_SESSION['buy']['country'];
            
            $subtotal = $obj_dolar * 0.02;
            $data['subtotal'] = $subtotal;
            $total = $obj_dolar + $subtotal;
            $data['total'] = $total;
            
            //GET DATA OF COUNTRY
            $params = array(
                            "select" =>"nombre",
                            "where" => "id = $obj_country and id_idioma = 7"              
                          );            
            //GET DATA COMMISSIONS
            $country = $this->obj_paises->get_search_row($params);
            $country = $country->nombre;
            $data['country'] = $country;
            
            
            $data["tax"] = $tax;
            $data["total_card"] = $amount;
            $data["total_db"] = $total_db;
            $data["message"] = $message;
            $this->load->view('credit_card_details',$data);
        }
    }
    public function message($total_db,$btc,$currency_name,$email,$password){
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
                            <p dir='auto' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'><b>Estimado cliente</strong></b>(EasyCripto)</p>
                            <div class='m_-8753525431338155893zd-comment' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'>
                              <p dir='auto' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'>
                              En relación a su compra nos estamos comunicando para facilitarle los detalles de la misma y sus datos para entrar a nuestra plataforma.</p>
                              <p dir='auto' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'><em>Le recordamos los detalles de su compra:</em></p>
                              <ul dir='auto' style='list-style-type:disc;margin:10px 0 15px 30px;padding-left:15px' type='disc'>
                              <li style='Verdana,sans-serif;font-size:14px;line-height:22px;margin:10px 0' type='disc'>Moneda: <em>$currency_name </em></li>
                                <li style='Verdana,sans-serif;font-size:14px;line-height:22px;margin:10px 0' type='disc'>Cantidad: <em>$btc</em></li>
                                <li style='Verdana,sans-serif;font-size:14px;line-height:22px;margin:10px 0' type='disc'>Total: <em>$$total_db</em></li>
                                <li style='Verdana,sans-serif;font-size:14px;line-height:22px;margin:10px 0' type='disc'>Método de Pago: <em>Tarjeta de Crédito / Debido</em></li>
                              </ul>
                              <p dir='auto' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'><em>Datos de entrada a plataforma:</em></p>
                              <ul dir='auto' style='list-style-type:disc;margin:10px 0 15px 30px;padding-left:15px' type='disc'>
                                <li style='Verdana,sans-serif;font-size:14px;line-height:22px;margin:10px 0' type='disc'>Usuario: <em>$email</em></li>
                                <li style='Verdana,sans-serif;font-size:14px;line-height:22px;margin:10px 0' type='disc'>Contraseñ: <em>$password</em></li>
                              </ul>
                              <p dir='auto' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'>
                              <em>En breves minutos estaremos procesando su compra.</em></p>
                              <p></p>
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
                    $titulo = "Pago con Tarjeta - [Easycripto] : Detalle de Compra";
                    $headers = "MIME-Version: 1.0\r\n"; 
                    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
                    $headers .= "From: Easycripto <ventas@easycripto.com>\r\n";
                    $bool = mail("$email",$titulo,$mensaje,$headers);
                    
                    
                    //MENSAJE DE CONFIRMACION ADMIN
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
                                        <p dir='auto' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'><b>Administrador </strong></b>(EasyCripto)</p>
                                        <div class='m_-8753525431338155893zd-comment' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'>
                                          <p dir='auto' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'>
                                          Se acaba de hacer una compra a través de tarjeta de crédito / debito</p>
                                          <p dir='auto' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'><em>Detalles del pedido:</em></p>
                                          <ul dir='auto' style='list-style-type:disc;margin:10px 0 15px 30px;padding-left:15px' type='disc'>
                                            <li style='Verdana,sans-serif;font-size:14px;line-height:22px;margin:10px 0' type='disc'>N° Pedido: <em>$code_random</em></li>
                                            <li style='Verdana,sans-serif;font-size:14px;line-height:22px;margin:10px 0' type='disc'>Moneda: <em>$currency_name</em></li>
                                            <li style='Verdana,sans-serif;font-size:14px;line-height:22px;margin:10px 0' type='disc'>Cantidad: <em>$obj_btc</em></li>
                                            <li style='Verdana,sans-serif;font-size:14px;line-height:22px;margin:10px 0' type='disc'>Importe Total: <em>$obj_price_dolar€ </em></li>
                                            <li style='Verdana,sans-serif;font-size:14px;line-height:22px;margin:10px 0' type='disc'>Email: <em>$obj_email</em></li>
                                            <li style='Verdana,sans-serif;font-size:14px;line-height:22px;margin:10px 0' type='disc'>Telefono: <em>$obj_phone</em></li>
                                            <li style='Verdana,sans-serif;font-size:14px;line-height:22px;margin:10px 0' type='disc'>Método de Pago: <em>Transferencia Bancaria</em></li>
                                          </ul>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                    </div>'
                  .</html>", 70, "\n", true);
                    $titulo = "Nuevo Pedido - Transferencia Bancaria";
                    $headers = "MIME-Version: 1.0\r\n"; 
                    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
                    $headers .= "From: $obj_email\r\n";
                    $bool = mail("ventas@easycripto.com",$titulo,$mensaje,$headers);
                    
                    
    }
    
    public function get_session(){          
        if (isset($_SESSION['buy'])){
            if($_SESSION['buy']['logged_customer']=="TRUE" && $_SESSION['buy']['status']=='1'){               
                return true;
            }else{
                redirect(site_url().'buy');
            }
        }else{
            redirect(site_url().'buy');
        }
    }
    public function logout(){        
        $this->session->unset_userdata('buy');
	$this->session->destroy();
    }
    
}
