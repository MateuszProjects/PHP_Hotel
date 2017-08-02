<?php
require_once dirname (__FILE__).'/../init.php';
// Po za³adowaniu skryptu 'init.php' w ca³ej aplikacji dostêpne s¹ obiekty:
// konfiguracji, smarty, messages oraz bazy danych Medoo (Smarty i Medoo ³adowane i tworzone w momencie pierwszego u¿ycia)
// za pomoc¹ funkcji: getConf(), getSmarty(), getMessages() oraz getDB()
// Jest równie¿ dostêpna zmienna $action inicjowana z parametru ¿¹dania

switch ($action) {

	case 'services' :
		include_once getConf()->root_path.'/app/project/logic/LogicCtrl.class.php';
		$ctrl = new LogicCtrl(); //  zmienna dla kontrolera.
		$ctrl->services();
	break;
	case 'our_clients' :
		include_once getConf()->root_path.'/app/project/logic/LogicCtrl.class.php';
		$ctrl = new LogicCtrl(); //  zmienna dla kontrolera.
		$ctrl->our_clients();
	break;
	case 'about_us' :
		include_once getConf()->root_path.'/app/project/logic/LogicCtrl.class.php';
		$ctrl = new LogicCtrl(); //  zmienna dla kontrolera.
		$ctrl->about();
	break;
	case 'home_page' :
		include_once getConf()->root_path.'/app/project/logic/LogicCtrl.class.php';
		$ctrl = new LogicCtrl(); 
		$ctrl->home_page();
	break;
		case 'log' :
		include_once getConf()->root_path.'/app/project/login/LoginCtrl.class.php';
		$ctrl = new LoginCtrl(); 
		$ctrl->generateView();
	break;
	case 'login' :
		include_once getConf()->root_path.'/app/project/login/LoginCtrl.class.php';
		$ctrl = new LoginCtrl(); 
		$ctrl->doLogin();
	break;
	case 'register' :
		include_once getConf()->root_path.'/app/project/register/RegisterCtrl.class.php';
		$ctrl = new RegisterCtrl(); 
		$ctrl->generateView();
	break;
		case 'register_addUser' :
		include_once getConf()->root_path.'/app/project/register/RegisterCtrl.class.php';
		$ctrl = new RegisterCtrl(); 
		$ctrl->addUser();
	break;
			case 'ajax' :
		include_once getConf()->root_path.'/app/project/login/LoginCtrl.class.php';
		$ctrl = new LoginCtrl(); 
		$ctrl->ajax();
	break;

}


include getConf()->root_path.'/app/project/login//check.php';

switch($action){
	case 'nowy':
		include_once getConf()->root_path.'/app/project/admin/AdminCtrl.class.php';
		$ctrl = new AdminCtrl();
		$ctrl->admin_page();
	break;
		case 'log_out':
		include_once getConf()->root_path.'/app/project/admin/AdminCtrl.class.php';
		$ctrl = new AdminCtrl();
		$ctrl->Log_out();
	break;
	case 'user_list':
		include_once getConf()->root_path.'/app/project/admin/AdminCtrl.class.php';
		$ctrl = new AdminCtrl();
		$ctrl->admin_user_list();
	break;
		case 'ajax_user_list':
		include_once getConf()->root_path.'/app/project/admin/AdminCtrl.class.php';
		$ctrl = new AdminCtrl();
		$ctrl->admin_user_list_ajax();
	break;
	case 'list_reservation':
		include_once getConf()->root_path.'/app/project/admin/AdminCtrl.class.php';
		$ctrl = new AdminCtrl();
		$ctrl->admin_list_res();
	break;
	case 'editUser':
		include_once getConf()->root_path.'/app/project/admin/AdminCtrl.class.php';
		$ctrl = new AdminCtrl();
		$ctrl->edit();
	break;
		case 'update':
		include_once getConf()->root_path.'/app/project/admin/AdminCtrl.class.php';
		$ctrl = new AdminCtrl();
		$ctrl->updateUser();
	break;
		case 'delete':
		include_once getConf()->root_path.'/app/project/admin/AdminCtrl.class.php';
		$ctrl = new AdminCtrl();
		$ctrl->deleateUser();
	break;
		case 'account':
		include_once getConf()->root_path.'/app/project/admin/AdminCtrl.class.php';
		$ctrl = new AdminCtrl();
		$ctrl-> admin_account();
	break;
		case 'user_account':
		include_once getConf()->root_path.'/app/project/user/UserCtrl.class.php';
		$ctrl = new UserCtrl();
	    $ctrl-> user_account();
	break;
		case 'user_main':
		include_once getConf()->root_path.'/app/project/user/UserCtrl.class.php';
		$ctrl = new UserCtrl();
	    $ctrl-> user_main();
	break;
		case 'user_reserwation':
		include_once getConf()->root_path.'/app/project/user/UserCtrl.class.php';
		$ctrl = new UserCtrl();
		$ctrl-> user_reservation();
	break;
		case 'user_reserwation_second':
		include_once getConf()->root_path.'/app/project/user/UserCtrl.class.php';
		$ctrl = new UserCtrl();
		$ctrl-> user_reservation_second();
	break;
		case 'user_reserwation_three':
		include_once getConf()->root_path.'/app/project/user/UserCtrl.class.php';
		$ctrl = new UserCtrl();
		$ctrl-> user_reservation_three();
	break;

}
?>