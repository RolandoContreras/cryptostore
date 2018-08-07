<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {
    public function __construct(){
     parent::__construct();
     $this->load->model("sell_model","obj_sell");
    } 

    public function index()
	{
        $data['price_dolar'] = $this->input->post("price_dolar");
        $data['btc'] = $this->input->post("btc");

        //RENDER
        $this->load->view('bank',$data);
    }
    public function view_bank(){
        if($this->input->is_ajax_request()){
            $data['price_dolar'] = $this->input->post("price_dolar");
            $data['btc'] = $this->input->post("btc");
            $data['phone'] = $this->input->post("phone");
            $data['wallet'] = $this->input->post("wallet");
            $data['email'] = $this->input->post("email");
            $data['radio'] = $this->input->post("radio");
            $_SESSION['buy'] = $data;
            echo json_encode($data);            
            exit();
	}
    }
    public function details_bank(){
        //GER DATA $_SESSION
        $data['price_dolar'] = $_SESSION['buy']['price_dolar'];
        $data['btc'] = $_SESSION['buy']['btc'];
        $data['phone'] = $_SESSION['buy']['phone'];
        $data['wallet'] = $_SESSION['buy']['wallet'];
        $data['email'] = $_SESSION['buy']['email'];
        $obj_radio = $_SESSION['buy']['radio'];
        $data['radio'] = $obj_radio;
        //RENDER
        if($obj_radio == 2){
            $this->load->view('bank_details',$data);
        }else{}
    }
    public function confirm_bank(){
        //GER DATA $_SESSION
        
        $obj_price_dolar = $this->input->post("price_dolar");
        $obj_btc = $this->input->post("btc");
        $obj_iva = $this->input->post("iva");
        $obj_radio = $this->input->post("radio");
        $obj_wallet = $this->input->post("wallet");
        $obj_email = $this->input->post("email");
        $obj_phone = $this->input->post("phone");
        //create id random 6 digit
        $code_random = rand(1,999999);
        
        //SEND MESSAGES
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
                                        <p dir='auto' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'><b>Querido Usuario</strong></b>(EasyCripto)</p>
                                        <div class='m_-8753525431338155893zd-comment' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'>
                                          <p dir='auto' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'>Estimado cliente,</p>
                                          <p dir='auto' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'>
                                          En relación a su pedido N°$code_random nos estamos comunicando con ud. para darle los datos bancarios y realice el deposito correspondiente.</p>
                                          <p dir='auto' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'><strong>Por favor responda a este email indicando el número de pedido y los comprobantes del envio.</strong></p>
                                          <p dir='auto' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'><em>Le recordamos los detalles de su pedido:</em></p>
                                          <ul dir='auto' style='list-style-type:disc;margin:10px 0 15px 30px;padding-left:15px' type='disc'>
                                            <li style='Verdana,sans-serif;font-size:14px;line-height:22px;margin:10px 0' type='disc'>N° Pedido: <em>$code_random</em></li>
                                            <li style='Verdana,sans-serif;font-size:14px;line-height:22px;margin:10px 0' type='disc'>Importe Total: <em>$$obj_price_dolar </em></li>
                                            <li style='Verdana,sans-serif;font-size:14px;line-height:22px;margin:10px 0' type='disc'>Email: <em>$obj_email</em></li>
                                            <li style='Verdana,sans-serif;font-size:14px;line-height:22px;margin:10px 0' type='disc'>Telefono: <em>$obj_phone</em></li>
                                            <li style='Verdana,sans-serif;font-size:14px;line-height:22px;margin:10px 0' type='disc'>Método de Pago: <em>Transferencia Bancaria</em></li>
                                          </ul>
                                          <p dir='auto' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'><em>Datos Bancarios Easycripto:</em></p>
                                          <ul dir='auto' style='list-style-type:disc;margin:10px 0 15px 30px;padding-left:15px' type='disc'>
                                            <li style='Verdana,sans-serif;font-size:14px;line-height:22px;margin:10px 0' type='disc'>Nombre del Banco: <em>Banco Internacional</em></li>
                                            <li style='Verdana,sans-serif;font-size:14px;line-height:22px;margin:10px 0' type='disc'>Número de Cuenta: <em>22495-3265423218712</em></li>
                                            <li style='Verdana,sans-serif;font-size:14px;line-height:22px;margin:10px 0' type='disc'>Número de Cuenta Interbancario: <em>1965-22495-3265423218712-6513651</em></li>
                                            <li style='Verdana,sans-serif;font-size:14px;line-height:22px;margin:10px 0' type='disc'>Títular: <em>SERFORTEC S.L</em></li>                                            
                                            <li style='Verdana,sans-serif;font-size:14px;line-height:22px;margin:10px 0' type='disc'>Código SWIFT: <em>BINPPL</em></li>
                                          </ul>
                                          <p dir='auto' style='color:#2b2e2f;font-family:Verdana,sans-serif;font-size:14px;line-height:22px;margin:15px 0'>
                                          <em>Responder al correo compras@easycripto.com con el N° Pedido y los comprobantes del envio y en 30 minutos estaremos procesando su compra.</em></p>
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
                    $titulo = "N° Pedido [Easycripto] : Información Bancaria";
                    $headers = "MIME-Version: 1.0\r\n"; 
                    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
                    $headers .= "Easycripto <soporte@easycripto.com>\r\n";
                    $bool = mail("$obj_email",$titulo,$mensaje,$headers);
        $data = array(
                    'date' => date("Y-m-d H:i:s"),
                    'code' => $code_random,
                    'amount' => $obj_price_dolar,
                    'tax' => $obj_iva,
                    'amount_btc' => $obj_btc,
                    'sub_total' => 0,
                    'type_pay' => $obj_radio,
                    'wallet' => $obj_wallet,
                    'email' => $obj_email,
                    'phone' => $obj_phone,
                    'active' => 1,
                    'status_value' => 1,
                    );
        $this->obj_sell->insert($data);
        //$this->send_email_bank();
        //RENDER
        $this->load->view('confirm_email');
    }
}
