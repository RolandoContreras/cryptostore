<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();     
        $this->load->model('customer_model','obj_customer');
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
		$this->load->view('login');
	}
    
    public function validate(){
        if($this->input->is_ajax_request()){
            //GET DATA STRING
            $email = $this->input->post("email"); 
            $password = $this->input->post("password");
                        //SET PARAMETER
            $params = array("select" =>"customer.customer_id,
                                        customer.first_name,
                                        customer.last_name,
                                        customer.email,
                                        customer.active,
                                        customer.status_value",
                             "where" => "customer.email = '$email' and customer.password = '$password' and customer.active = 1");
            $obj_customer = $this->obj_customer->get_search_row($params);
            if (count($obj_customer)>0){
                    $data_customer_session['customer_id'] = $obj_customer->customer_id;
                    $data_customer_session['name'] = $obj_customer->first_name.' '.$obj_customer->last_name;
                    $data_customer_session['email'] = $obj_customer->email;
                    $data_customer_session['active'] = $obj_customer->active;
                    $data_customer_session['logged_customer'] = "TRUE";
                    $data_customer_session['status'] = $obj_customer->status_value;
                    $_SESSION['customer'] = $data_customer_session; 
                    $data['status'] = "true";
                    
            }else{
                   $data['status'] = "false";
            }
            echo json_encode($data);    
        }
    }
    
    public function logout(){        
        $this->session->unset_userdata('customer');
	$this->session->destroy();
        redirect('home'); 
    }
}
