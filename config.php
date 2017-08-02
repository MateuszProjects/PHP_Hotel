<?php

$conf->server_name = 'localhost';
$conf->protocol = 'http';
$conf->app_root = '/ProjektOne';
$conf->action_param = 'action';
$conf->action_script = '/app/ctrl.php';


$conf->root_path = dirname(__FILE__);
$conf->server_url = $conf->protocol.'://'.$conf->server_name;
$conf->app_url = $conf->server_url.$conf->app_root;
$conf->action_root = $conf->app_root.$conf->action_script.'?'.$conf->action_param.'=';
$conf->action_url = $conf->server_url.$conf->action_root;

$conf->db_type = 'mysql';
$conf->db_server = 'localhost';
// $conf->db_name = 'kalkulator';
$conf->db_name = 'mydb';
$conf->db_user = 'root';
$conf->db_pass = '';
$conf->db_charset = 'utf8';



$conf->db_port = '3306';
$conf->db_option = [PDO::ATTR_CASE => PDO::CASE_NATURAL];
?>
