<?php
require_once getConf()->root_path.'/app/project/logic/LogicForm.class.php';


class AdminCtrl {
	
	private $form;
	private $records;
	

	
	public function __construct(){
			$this->form = new LogicForm();
	}
		
		public function getParamsEdit(){
	
		$this->form->id = getFromRequest('id');
	}
		public function getParams(){
		
		$this->form->surname = getFromRequest('sf_name');
	}
	
			public function getParamsAcc(){
		
		$this->form->idaccount = getFromRequest('id');
	}
	public function Log_out(){
	
		session_destroy();
		
			getMessages()->addInfo('Poprawnie wylogowano z systemu');

		$this->generateViewLog();		 
	}
	
	public function getwittForm()
	{
				$this->form->name = getFromRequest('up_name');
				$this->form->surname = getFromRequest('up_surname');
				$this->form->login = getFromRequest('up_login');
	}

	

	

	public function admin_page(){
		
		 if($_SESSION['user_role']  == 'admin' ){
			getSmarty()->display(getConf()->root_path.'/app/project/admin/admin.html');
		 }
		 if($_SESSION['user_role'] == 'user'){
			 getSmarty()->display(getConf()->root_path.'/app/project/admin/user.html');
		 }
	
	}
	
	public function admin_user_list(){
		
		
		
		 if($_SESSION['user_role']  == 'admin' ){
			 
		$this->getParams();
		$search_params = [];
		if ( isset($this->form->surname) && strlen($this->form->surname) > 0) {
			$search_params['surname[~]'] = $this->form->surname.'%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
		}
		
		$num_params = sizeof($search_params);
		if ($num_params > 1) {
			$where = [ "AND" => &$search_params ];
		} else {
			$where = &$search_params;
		}
		
	    $where ["ORDER"] = "surname";
					 
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
			getSmarty()->debugging = false;

			getSmarty()->display(  getConf()->root_path.'/app/project/admin/a_user_list.html'  );
				
		 }
		 if($_SESSION['user_role'] == 'user'){
			 getSmarty()->display(getConf()->root_path.'/app/project/admin/user.html');
		 }
	}	

	
	public function admin_account(){
		
		 if($_SESSION['user_role']  == 'admin' ){
		
			$this->getParamsAcc();
			
			$search_params = [];
		if ( isset($this->form->idaccount) && strlen($this->form->idaccount) > 0) {
			$search_params['idaccount[~]'] = $this->form->idaccount.'%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
		}
		
		$num_params = sizeof($search_params);
		if ($num_params > 1) {
			$where = [ "AND" => &$search_params ];
		} else {
			$where = &$search_params;
		}
		
	    $where ["ORDER"] = "idaccount";
					 
		$this->records = getDB()->select("account", [
								
								"idaccount",
								"credit",
								"user_iduser",
						
			 ], $where);
			 
			getSmarty()->assign('account',$this->records); 
			getSmarty()->display(getConf()->root_path.'/app/project/admin/account.html');
			
			
		 }
		 if($_SESSION['user_role'] == 'user'){
			 getSmarty()->display(getConf()->root_path.'/app/project/admin/user.html');
		 }
	}	
	
	public function updateUser(){
		
		
			$this->getwittForm();
			$this->getParamsEdit();

			
			getDB()->update("user", [
					"name" => $this->form->name,
					"surname" => $this->form->surname,
					"login" => $this->form->login
				], [ 
					"iduser" => $this->form->id
				]);
				getSmarty()->assign('form',$this->form);    
				getSmarty()->display(getConf()->root_path.'/app/project/admin/edit.html');
				
}
	
	
	public function edit(){
		$this->getParamsEdit();
		
			$record = getDB()->get("user", 
			
			"*"
			
			,[  
				"iduser" => $this->form->id
			]);
			
	
			
		  // 3.1 jeśli osoba istnieje to wpisz dane do obiektu formularza
			if ($record){
				$this->form->name = $record['name'];
				$this->form->surname = $record['surname'];
				$this->form->login = $record['login'];
			} else {
				getMessages()->addError('Wystąpił nieoczekiwany błąd podczas odczytu rekordu');
			}
		getSmarty()->assign('form',$this->form);    // dane formularza do widoku
			 getSmarty()->display(getConf()->root_path.'/app/project/admin/edit.html');
		} 
		
	
	public function deleateUser()
	{
		
		       $this->getParamsEdit();
				getDB()->delete("user",[
				"iduser" => $this->form->id
			]);
			
$this->getParams();
			$this->admin_user_list();
	}
	
	
	
	
	
	public function admin_list_res(){
		
		 if($_SESSION['user_role']  == 'admin' ){
			
			
			
			$this->getParamsAcc();
			
			$search_params = [];
		if ( isset($this->form->idaccount) && strlen($this->form->idaccount) > 0) {
			$search_params['room_class[~]'] = $this->form->idaccount.'%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
		}
		
		$num_params = sizeof($search_params);
		if ($num_params > 1) {
			$where = [ "AND" => &$search_params ];
		} else {
			$where = &$search_params;
		}
		
	    $where ["ORDER"] = "room_class";
					 
		$this->records = getDB()->select("room", [
								
								"idroom",
								"room_class",
								"data_start",
								"data_stop",
								"reservation_idreservation"
						
			 ], $where);
			 
			getSmarty()->assign('room',$this->records); 
			getSmarty()->display(getConf()->root_path.'/app/project/admin/list_reservation.html');
		 }
		 if($_SESSION['user_role'] == 'user'){
			 getSmarty()->display(getConf()->root_path.'/app/project/admin/user.html');
		 }
	}

	
	
	
	
	
	public function generateViewLog(){
		getSmarty()->display(getConf()->root_path.'/app/project/login/login.html');
		exit();
	}
}