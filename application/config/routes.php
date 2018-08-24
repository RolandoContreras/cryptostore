<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
$route['404_override'] = 'errors/error_404';

$route['home'] = 'home';
$route['home/send_messages'] = 'home/send_messages';

$route['login'] = 'login';

$route['contact/send_messages'] = 'contact/send_messages';

$route['allcurrency'] = 'allcurrency';

$route['buy'] = 'buy';
$route['buy/bank'] = 'bank';
$route['buy/bank/view_bank'] = 'bank/view_bank';
$route['buy/bank/view_credit_card'] = 'bank/view_credit_card';
$route['buy/bank/details_credit_card'] = 'bank/details_credit_card';
$route['buy/bank/enter_credit_card'] = 'bank/enter_credit_card';

//VERIFY PAY CREDIT / DEBIT CARD
$route['buy/charge_payment'] = 'charge_payment';

$route['buy/bank/confirm_bank'] = 'bank/confirm_bank';

//CURRENCY
$route['buy/bitcoin'] = 'buy/currency';
$route['buy/dash'] = 'buy/currency';
$route['buy/ethereum'] = 'buy/currency';
$route['buy/litecoin'] = 'buy/currency';
$route['buy/bitcoincash'] = 'buy/currency';
$route['buy/cardano'] = 'buy/currency';
$route['buy/monero'] = 'buy/currency';
$route['buy/ripple'] = 'buy/currency';
$route['buy/verge'] = 'buy/currency';
$route['buy/zcash'] = 'buy/currency';
$route['buy/tron'] = 'buy/currency';
$route['buy/omisego'] = 'buy/currency';
$route['buy/siacoin'] = 'buy/currency';
$route['buy/nxt'] = 'buy/currency';


//CONTACT INVERST
$route['contact/invest'] = 'contact_invest';
$route['contact/invest/send_messages'] = 'contact_invest/send_messages';

//LEGAL
$route['notice/legal'] = 'notice';
$route['notice/privacy'] = 'notice';
$route['notice/general'] = 'notice';
$route['notice/cookies'] = 'notice';

//BACKOFFICE
$route['backoffice'] = "b_home";
$route['backoffice/profile'] = "b_data";

$route['backoffice/messages/support'] = "b_messages/message_type";
$route['backoffice/messages/support/([0-9a-z_-]+)'] = "b_messages/message_type/$1";

$route['backoffice/soporte'] = "b_soporte"; 
$route['backoffice/soporte/validate'] = "b_soporte/validate";

$route['backoffice/validate_usd'] = "b_home/validate_usd"; 
$route['backoffice/validate_btc'] = "b_home/validate_btc"; 



$route['backoffice/sell'] = "b_sell";

$route['logout'] = "b_home/logout";
$route['backoffice/misdatos'] = "b_data";

$route['register/afiliate/([0-9a-z_-]+)'] = "register/index/$1";

//MANAGER - DASHBOARD
$route['dashboard'] = "dashboard";
$route['dashboard/panel'] = "panel";
$route['dashboard/panel/guardar_btc'] = "panel/guardar_btc";
$route['dashboard/panel/masive_messages'] = "panel/masive_messages";
$route['dashboard/panel/cambiar_status'] = "panel/cambiar_status";
$route['dashboard/panel/cambiar_status_invest'] = "panel/cambiar_status_invest";

$route['dashboard/monedas'] = "d_criptocurrency"; 
$route['dashboard/monedas/load/([0-9]+)'] = "d_criptocurrency/load/$1";
$route['dashboard/monedas/validate'] = "d_criptocurrency/validate";
$route['dashboard/monedas/delete'] = "d_criptocurrency/delete";

$route['dashboard/informativos'] = "d_informative"; 
$route['dashboard/informativos/load'] = "d_informative/load";
$route['dashboard/informativos/load/([0-9]+)'] = "d_informative/load/$1";
$route['dashboard/informativos/validate'] = "d_informative/validate";
$route['dashboard/informativos/delete_informative'] = "d_informative/delete_informative";

$route['dashboard/clientes'] = "d_customer";
$route['dashboard/clientes/load/([0-9]+)'] = "d_customer/load/$1";
$route['dashboard/clientes/validate'] = "d_customer/validate";
$route['dashboard/clientes/delete'] = "d_customer/delete";

$route['dashboard/noticias'] = "d_news";
$route['dashboard/noticias/load'] = "d_news/load";
$route['dashboard/noticias/load/([0-9]+)'] = "d_news/load/$1";
$route['dashboard/noticias/validate'] = "d_news/validate";
$route['dashboard/noticias/delete_news'] = "d_news/delete_news";

$route['dashboard/comentarios'] = "d_comments";
$route['dashboard/inversores'] = "d_comments/invest";
$route['dashboard/comentarios/cambiar_status'] = "d_comments/change_status";
$route['dashboard/comentarios/cambiar_status_no'] = "d_comments/change_status_no";

$route['dashboard/validate'] = "dashboard/validate";

$route['dashboard/usuarios'] = "d_users";
$route['dashboard/usuarios/load'] = "d_users/load";
$route['dashboard/usuarios/load/([0-9]+)'] = "d_users/load/$1";
$route['dashboard/usuarios/validate'] = "d_users/validate";
$route['dashboard/usuarios/delete'] = "d_users/delete";

$route['dashboard/confirmation_activaciones'] = "d_activate/confirmation";

$route['dashboard/soporte'] = "d_messages/soporte";
$route['dashboard/soporte/update'] = "d_messages/update";

$route['dashboard/ventas_bank'] = "d_sell";
$route['dashboard/ventas_card'] = "d_sell/card";
$route['dashboard/ventas_bank/load/([0-9]+)'] = "d_sell/load_bank/$1";
$route['dashboard/ventas_card/load/([0-9]+)'] = "d_sell/load_card/$1";
$route['dashboard/ventas/procesar_bank'] = "d_sell/procesar_bank";
$route['dashboard/ventas/procesar_card'] = "d_sell/procesar_card";
$route['dashboard/ventas/cancelar'] = "d_sell/cancelar";
$route['dashboard/ventas/validate'] = "d_sell/validate";

$route['dashboard/comentarios'] = "d_comments";
$route['dashboard/comentarios/cambiar_status'] = "d_comments/change_status";
$route['dashboard/comentarios/cambiar_status_no'] = "d_comments/change_status_no";

$route['dashboard/usuarios'] = "d_users";
$route['dashboard/usuarios'] = "d_users";
$route['dashboard/usuarios/load'] = "d_users/load";
$route['dashboard/usuarios/load/([0-9]+)'] = "d_users/load/$1";
$route['dashboard/usuarios/validate'] = "d_users/validate";


/* End of file routes.php */
/* Location: ./application/config/routes.php */