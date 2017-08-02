<?php
class User{
	public $name;
	public $role;
	

	
	public function __construct($name, $role){
		$this->name = $name;
		$this->role = $role;		
	}

	public function areValues(){
		return  isset($this->name) && isset($this->role);
	}
	
	public function getRole(){
		
		return isset($this->role);
	}
	
}