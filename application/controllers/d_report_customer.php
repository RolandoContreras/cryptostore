<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_report_customer extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("comments_model","obj_comments");
        $this->load->model("customer_model","obj_customer");
    }   
                
    public function index(){  
            //GER SESSION
            $this->get_session();
            //GET YEAR
            $year = date("Y");
            $date_start = "$year-01-01";
            $date_end = "$year-12-31";
            //GET MONTH
            $month = date("m");
            $first_month_day =  first_month_day($month, $year);
            //get last day of this month
            $last_month_day = last_month_day($month, $year);
            //get month name
            $month = mostrar_mes($month);
            //GET AND COUNT ALL THE CUSTOMER
            $params = array("select" =>"count(customer_id) as customer_id,
                                    (select count(customer_id) from customer where created_at BETWEEN '$date_start' AND '$date_end') as total_year,
                                    (select count(customer_id) from customer where created_at BETWEEN '$first_month_day' AND '$last_month_day') as total_month,
                                    (select count(customer_id) from customer where active = 1) as activos,
                                    (select count(customer_id) from customer where active = 0) as inactivos");
        $obj_customer = $this->obj_customer->get_search_row($params);
        //TOTAL ACTIVOS
        $obj_total_activos = $obj_customer->activos;
        //TOTAL ACTIVOS
        $obj_total_inactivos = $obj_customer->inactivos;
        //TOTAL CUSTOMER
        $obj_total_customer = $obj_customer->customer_id;
        //TOTAL CUSTOMER THIS YEAR
        $obj_total_customer_month = $obj_customer->total_month;
        //TOTAL CUSTOMER THIS YEAR
        $obj_total_customer_year = $obj_customer->total_year;

        //GET TOTAL FOM MONTH
        $last_month_ene = last_month_day(1, $year);
        $last_month_feb = last_month_day(2, $year);
        $last_month_mar = last_month_day(3, $year);
        $last_month_abr = last_month_day(4, $year);
        $last_month_may = last_month_day(5, $year);
        $last_month_jun = last_month_day(6, $year);
        $last_month_jul = last_month_day(7, $year);
        $last_month_ago = last_month_day(8, $year);
        $last_month_set = last_month_day(9, $year);
        $last_month_oct = last_month_day(10, $year);
        $last_month_nov = last_month_day(11, $year);
        $last_month_dic = last_month_day(12, $year);
        
        
        //GET AND COUNT ALL THE CUSTOMER
            $params = array("select" =>"(select count(customer_id) from customer where created_at BETWEEN '$year-01-01' AND '$last_month_ene') as total_ene,
                                        (select count(customer_id) from customer where created_at BETWEEN '$year-02-01' AND '$last_month_feb') as total_feb,
                                        (select count(customer_id) from customer where created_at BETWEEN '$year-03-01' AND '$last_month_mar') as total_mar,
                                        (select count(customer_id) from customer where created_at BETWEEN '$year-04-01' AND '$last_month_abr') as total_abr,
                                        (select count(customer_id) from customer where created_at BETWEEN '$year-05-01' AND '$last_month_may') as total_may,
                                        (select count(customer_id) from customer where created_at BETWEEN '$year-06-01' AND '$last_month_jun') as total_jun,
                                        (select count(customer_id) from customer where created_at BETWEEN '$year-07-01' AND '$last_month_jul') as total_jul,
                                        (select count(customer_id) from customer where created_at BETWEEN '$year-08-01' AND '$last_month_ago') as total_ago,
                                        (select count(customer_id) from customer where created_at BETWEEN '$year-09-01' AND '$last_month_set') as total_set,
                                        (select count(customer_id) from customer where created_at BETWEEN '$year-10-01' AND '$last_month_oct') as total_oct,
                                        (select count(customer_id) from customer where created_at BETWEEN '$year-11-01' AND '$last_month_nov') as total_nov,
                                        (select count(customer_id) from customer where created_at BETWEEN '$year-12-01' AND '$last_month_dic') as total_dic");
            $obj_customer_by_month = $this->obj_customer->get_search_row($params);
            
            // PAGINADO
            $modulos ='reportes/report_customer'; 
            $seccion = 'Lista';        
            $link_modulo =  site_url().'dashboard/'.$modulos; 
            /// DATA
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            
            
            $this->tmp_mastercms->set("month",$month);
            $this->tmp_mastercms->set("year",$year);
            $this->tmp_mastercms->set("obj_total_customer_year",$obj_total_customer_year);
            $this->tmp_mastercms->set("obj_total_customer_month",$obj_total_customer_month);
            $this->tmp_mastercms->set("obj_total_activos",$obj_total_activos);
            $this->tmp_mastercms->set("obj_total_inactivos",$obj_total_inactivos);
            $this->tmp_mastercms->set("obj_total_customer",$obj_total_customer);
            $this->tmp_mastercms->set("obj_customer_by_month",$obj_customer_by_month);
            $this->tmp_mastercms->render("dashboard/reporte_asociado/asociate");
    }
    
    public function change_status(){
            //UPDATE DATA ORDERS
        if($this->input->is_ajax_request()){   
              $comment_id = $this->input->post("comment_id");
              
                if(count($comment_id) > 0){
                    $data = array(
                        'status_value' => 1,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_comments->update($comment_id,$data);
                }
                echo json_encode($data);            
        exit();
            }
    }
    
    public function change_status_no(){
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