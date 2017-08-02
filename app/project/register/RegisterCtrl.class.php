<?php
require_once getConf()->root_path.'/app/project/register/RegisterForm.class.php';

class RegisterCtrl{
	
	private $form;
	private $record;
		public function __construct(){
		$this->form = new RegisterForm();
	}
	
	public function  PobierzFromRequest(){
		
		$this->form->name  = getFromRequest('name');
		$this->form->username = getFromRequest('sur');
		$this->form->login  = getFromRequest('login');
		$this->form->pass = getFromRequest('pass');
		$this->form->phone  = getFromRequest('phone');
	}
	
	public function validate(){
		
		if( ! (isset($this->form->name)&&isset($this->form->username)&&isset($this->form->login)&&isset($this->form->pass)&&isset($this->form->phone))){
					getMessages()->addError('B³êdne wywo³anie aplikacji');
					return false;
			}
			
			if (strlen($this->form->name) == 0) {
			getMessages()->addError('WprowadŸ imiê');
			}
			if(strlen($this->form->username)==0){
			getMessages()->addError('WprowadŸ  nazwisko');
			}
			if(strlen($this->form->login)==0){
			getMessages()->addError('WprowadŸ  login');
			}
			if(strlen($this->form->pass) == 0){
				getMessages()->addError('WprowadŸ has³o');
			}
			if(strlen($this->form->phone) == 0){
				getMessages()->addError('WprowadŸ telefon');
			}
				
				return ! getMessages()->isError();
	}
	
	public function getBynameUser(){
		
		

		
	}
	
	
	public function addAccountUser(){
		
		$this->getBynameUser();
		
				
		$record = getDB()->get("user",[
							"iduser",
		], [
		"login" => $this->form->login]);
		
		$dane = $record['iduser'];
		
		getDB()->insert("account", [
					"credit" => 0,
					"user_iduser" => $dane
		]);
	}
	
	public function addUser(){
		$this->PobierzFromRequest();
		
		if($this->validate()){
		     getDB()->insert("user", [
							"name" => $this->form->name,
							"surname" => $this->form->username,
							"login" => $this->form->login,
							"pass" => $this->form->pass,
							"phone_number" => $this->form->phone,
							"admin" => "user"
					]);

					$this->addAccountUser();
					
		}
		else{
				getMessages()->addError('Nie dodano u¿ytkownika wyst¹pi³ b³¹d:   "');
		}
		
		$this->generateView();
	}
	
	
	public function generateView(){
	getSmarty()->display(getConf()->root_path.'/app/project/register/register.html');
	exit();
	}
	
}