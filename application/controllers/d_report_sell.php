<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_report_sell extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("sell_model","obj_sell");
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
            $params = array("select" =>"count(sell_id) as sell_id,
                                        (select sum(amount) from sell where active = 3) as total_amount,
                                        (select sum(amount) from sell where active = 3 and date BETWEEN '$date_start' AND '$date_end') as total_amount_year,
                                        (select sum(amount) from sell where active = 3 and date BETWEEN '$first_month_day' AND '$last_month_day') as total_amout_month,
                                        (select count(sell_id) from sell where date BETWEEN '$date_start' AND '$date_end') as total_year,
                                        (select count(sell_id) from sell where date BETWEEN '$first_month_day' AND '$last_month_day') as total_month,
                                        (select count(sell_id) from sell where active = 3) as procesadas,
                                        (select count(sell_id) from sell where active = 2) as canceladas");
        $obj_sell = $this->obj_sell->get_search_row($params);
        
        //TOTAL ACTIVOS
        $obj_total_procesadas = $obj_sell->procesadas;
        //TOTAL VENTAS
        $total_amount = $obj_sell->total_amount;
        //TOTAL VENTAS
        $total_amount_year = $obj_sell->total_amount_year;
        //TOTAL ACTIVOS
        $obj_total_canceladas = $obj_sell->canceladas;
        //TOTAL SELL
        $obj_total_sell = $obj_sell->sell_id;
        //TOTAL SELL THIS YEAR
        $obj_total_sell_month = $obj_sell->total_month;
        //TOTAL SELL AMOUNT THIS MONTH
        $obj_total_sell_amount_month = $obj_sell->total_amout_month;
        //TOTAL CUSTOMER THIS YEAR
        $obj_total_sell_year = $obj_sell->total_year;

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
            $params = array("select" =>"(select sum(amount) from sell where active = 3 and date BETWEEN '$year-01-01' AND '$last_month_ene') as total_ene,
                                        (select sum(amount) from sell where active = 3 and date BETWEEN '$year-02-01' AND '$last_month_feb') as total_feb,
                                        (select sum(amount) from sell where active = 3 and date BETWEEN '$year-03-01' AND '$last_month_mar') as total_mar,
                                        (select sum(amount) from sell where active = 3 and date BETWEEN '$year-04-01' AND '$last_month_abr') as total_abr,
                                        (select sum(amount) from sell where active = 3 and date BETWEEN '$year-05-01' AND '$last_month_may') as total_may,
                                        (select sum(amount) from sell where active = 3 and date BETWEEN '$year-06-01' AND '$last_month_jun') as total_jun,
                                        (select sum(amount) from sell where active = 3 and date BETWEEN '$year-07-01' AND '$last_month_jul') as total_jul,
                                        (select sum(amount) from sell where active = 3 and date BETWEEN '$year-08-01' AND '$last_month_ago') as total_ago,
                                        (select sum(amount) from sell where active = 3 and date BETWEEN '$year-09-01' AND '$last_month_set') as total_set,
                                        (select sum(amount) from sell where active = 3 and date BETWEEN '$year-10-01' AND '$last_month_oct') as total_oct,
                                        (select sum(amount) from sell where active = 3 and date BETWEEN '$year-11-01' AND '$last_month_nov') as total_nov,
                                        (select sum(amount) from sell where active = 3 and date BETWEEN '$year-12-01' AND '$last_month_dic') as total_dic");
            $obj_sell_by_month = $this->obj_sell->get_search_row($params);
            
            //GET SELL THIS MONTH
            $params = array(
                        "select" =>"sell.sell_id,
                                    currency.name as currency,
                                    sell.date,
                                    sell.type_pay,
                                    sell.amount,
                                    sell.amount_btc,
                                    sell.wallet,
                                    sell.email,
                                    sell.phone,
                                    sell.active",
                        "join" => array('currency, sell.currency_id = currency.currency_id'),
                        "where" => "sell.status_value = 1",
                        "order" => "sell.sell_id DESC"
               );
           //GET DATA FROM CUSTOMER
           $obj_sell = $this->obj_sell->search($params);
            
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
            
            
            $this->tmp_mastercms->set("total_amount",$total_amount);
            $this->tmp_mastercms->set("obj_total_sell_amount_month",$obj_total_sell_amount_month);
            $this->tmp_mastercms->set("total_amount_year",$total_amount_year);
            $this->tmp_mastercms->set("obj_total_sell_year",$obj_total_sell_year);
            $this->tmp_mastercms->set("obj_total_sell_month",$obj_total_sell_month);
            $this->tmp_mastercms->set("obj_total_procesadas",$obj_total_procesadas);
            $this->tmp_mastercms->set("obj_total_canceladas",$obj_total_canceladas);
            $this->tmp_mastercms->set("obj_total_sell",$obj_total_sell);
            $this->tmp_mastercms->set("obj_sell_by_month",$obj_sell_by_month);
            $this->tmp_mastercms->set("obj_sell",$obj_sell);
            $this->tmp_mastercms->render("dashboard/reporte_ventas/ventas");
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
