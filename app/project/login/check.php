<?php
require_once getConf()->root_path.'/app/project/login/User.class.php';
session_start(); 

//pr�ba pobrania danych obiektu u�ytkownika
$l = isset($_SESSION['user_login']) ? $_SESSION['user_login'] : null;
$r = isset($_SESSION['user_role']) ? $_SESSION['user_role'] : null;
$user = new User($l,$r);

//je�li brak parametru (niezalogowanie) to wy�wietl stron� logowania
/*
if (   !   $user->areValues()   ){
	include_once $conf->root_path.'/app/project/login/LoginCtrl.class.php';	
	$ctrl = new LoginCtrl();
	//$ctrl->generateView();
	exit();
}

*/

