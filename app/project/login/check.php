<?php
require_once getConf()->root_path.'/app/project/login/User.class.php';
session_start(); 

//próba pobrania danych obiektu u¿ytkownika
$l = isset($_SESSION['user_login']) ? $_SESSION['user_login'] : null;
$r = isset($_SESSION['user_role']) ? $_SESSION['user_role'] : null;
$user = new User($l,$r);

//jeœli brak parametru (niezalogowanie) to wyœwietl stronê logowania
/*
if (   !   $user->areValues()   ){
	include_once $conf->root_path.'/app/project/login/LoginCtrl.class.php';	
	$ctrl = new LoginCtrl();
	//$ctrl->generateView();
	exit();
}

*/

