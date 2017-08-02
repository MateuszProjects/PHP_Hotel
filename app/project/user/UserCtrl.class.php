<?php
require_once getConf()->root_path.'/app/project/user/UserForm.class.php';

class UserCtrl{
	
	private $form;
	private $records;
	private $record;
	
		public function __construct(){
			$this->form = new UserForm();
	}
	
	public function getFrom()
	{
		$this->form->room_class = getFromRequest('room_class');
		$this->form->data_start = getFromRequest('data_start');
		$this->form->data_stop = getFromRequest('data_stop');
	}
	
	
	public function user_reservation()
	{
		
			getSmarty()->display(getConf()->root_path.'/app/project/user/user_reservation.html');
		
	}
	
	public function user_reservation_second()
	{
		$this->form->id ["login"]= $_SESSION['user_login'];
		
		$records = getDB()->get("user", 
			
		"*",
		[  
				"login" => $_SESSION['user_login'],
	     ]);
			
		$record = getDB()->get("account", 
			
			"*",
			[  
				"user_iduser" => $records['iduser'],
			]);
			

					
		getDB()->insert("reservation",  [
					
				"account_idaccount" => $record['idaccount'],
			
		  ]);
			   
				getSmarty()->display(getConf()->root_path.'/app/project/user/user_reservation_page2.html');
		
	}
	
	public function user_reservation_three()
	{
		 
	$this->getFrom();
		
	$max = getDB()->max("reservation", "idreservation",[
	 ]);
		

		     getDB()->insert("room",  [
					
					"room_class" => $this->form->room_class ,
				    "data_start" => $this->form->data_start,
				    "data_stop" => $this->form->data_stop,
					"reservation_idreservation" => $max,
	             ]);
		   
		  getSmarty()->display(getConf()->root_path.'/app/project/user/user_reservation_page2.html');
	}
	
	public function user_account()
	{
			
	    $where ["login"] =  $_SESSION['user_login'];
					 
		$this->records = getDB()->select("user", [
								
								"iduser",
								"name",
								"surname",
								"login",
								"pass",
								"phone_number",
								"admin"
						
			 ], $where);
			getSmarty()->assign('user',$this->records); 
		
		getSmarty()->display(getConf()->root_path.'/app/project/user/user_acccount.html');
	}
	
	
	public function user_main(){
		
		getSmarty()->display(getConf()->root_path.'/app/project/user/user_main.html');
	}
}

