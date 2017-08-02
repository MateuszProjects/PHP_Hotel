<?php
require_once getConf()->root_path.'/app/project/logic/LogicForm.class.php';

class LogicCtrl {
	
	

	
	public function about()
	{
		
		getSmarty()->display(getConf()->root_path.'/app/project/logic/about_us.html');
	}
	
	public function services()
	{
		
		getSmarty()->display(getConf()->root_path.'/app/project/logic/services.html');
	}
	
	public function our_clients()
	{
		
		getSmarty()->display(getConf()->root_path.'/app/project/logic/our_clients.html');
	}
	
	public function home_page()
	{
		
		getSmarty()->display(getConf()->root_path.'/app/project/logic/home_page.html');
	}
	
}