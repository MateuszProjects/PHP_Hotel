<?php
require_once getConf()->root_path.'/app/project/login/LoginForm.class.php';
require_once getConf()->root_path.'/app/project/login/User.class.php';

class LoginCtrl {
	
	private $form; 
	private $records;

	
	public function __construct(){
		$this->form = new PersonEditForm();
	}
	  
	public function PobierzFromRequest(){
		$this->form->login = getFromRequest('name');
		$this->form->pass = getFromRequest('pas');
	}
	

	

	public function validate()
	{
		
		
		if (! (isset ( $this->form->login ) && isset ( $this->form->pass ))) {
		
		getMessages()->addError('');
		}
		
		$records = getDB()->get("user",
								"*"
		, [   
		"AND" => [	
					 "login" => $this->form->login,
					 "pass" => $this->form->pass
		]]);
		
		
		
		
		if( $records){
				session_start();
				$this->form->rola_u = $records['admin'];
				$user = new User($this->form->login, $this->form->rola_u);
				$_SESSION['user_login'] = $user->name;
				$_SESSION['user_role'] = $user->role;
		}else 
		{
			
			getMessages() ->addError('Błędne wywołanie aplikacji !');
		}
		
		return ! getMessages() ->isError ();
	}


	
	public function doLogin(){
		
		 $this->PobierzFromRequest();
		 
		if($this->validate()){
		
			header("Location: ".getConf()->action_root."nowy");
		}else{
			$this->generateView();
		}
	}


	
	public function generateView(){
		getSmarty()->assign('people',$this->records); // lista rekordów z bazy danych
		getSmarty()->display(getConf()->root_path.'/app/project/login/login.html');
		exit();
	}
}