<?php /* Smarty version 3.1.27, created on 2016-05-13 18:10:10
         compiled from "C:\xampp2\htdocs\ProjektOne\app\project\logic\services.html" */ ?>
<?php
/*%%SmartyHeaderCode:129975735fc62359d37_32050025%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abfcc397508d5e6a27f0389a7f7b0c18d3b2a6eb' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ProjektOne\\app\\project\\logic\\services.html',
      1 => 1462223582,
      2 => 'file',
    ),
    '0e9a37d72261488bc4476a1be797bf748c641620' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ProjektOne\\templates\\main.html',
      1 => 1462894867,
      2 => 'file',
    ),
    'cec36e7f81532ab9c4da345cea265daa4a0eae6b' => 
    array (
      0 => 'cec36e7f81532ab9c4da345cea265daa4a0eae6b',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '129975735fc62359d37_32050025',
  'variables' => 
  array (
    'conf' => 0,
    'msgs' => 0,
    'err' => 0,
    'inf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5735fc6287eb90_20214909',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5735fc6287eb90_20214909')) {
function content_5735fc6287eb90_20214909 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '129975735fc62359d37_32050025';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Low-Down 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20131117

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Varela+Round" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/fonts.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>

<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">Mackenzie-Hotel</a></h1>
			</div>

		</div>
		<div id="menu" class="container">
			<ul>
				<li class="current_page_item"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
home_page" accesskey="1" title="">Homepage</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
services" accesskey="1" title="">Services</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
our_clients" accesskey="2" title="">Our Clients</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
about_us" accesskey="3" title="">About Us</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
log" accesskey="4" title="">LogIn</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" accesskey="5" title="">Register</a></li>
			</ul>
		</div>
	</div>
	</div>
	<!--  blok wymienny. content-->
	<?php
$_smarty_tpl->properties['nocache_hash'] = '129975735fc62359d37_32050025';
?>

	
		<div id="page" class="container">
		<div class="column1">
			<div class="title">
				<h2>Maecenas luctus</h2>
				<span class="byline">Pellentesque lectus gravida blandit</span>
			</div>
			<p>This is <strong>Low-Down</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
			<a href="#" class="button">Etiam posuere</a>
		</div>
		<div class="column3">
			<div class="title">
				<h2>Mauris vulputate</h2>
			</div>
			<img src="images/pic01.jpg" width="282" height="150" alt="" />
			<p>Phasellus tempor vehicula justo. Aliquam lacinia metus ut elit.</p>
			<a href="#" class="button">Etiam posuere</a>
		</div>
		<div class="column4">
			<div class="title">
				<h2>Praesent tempor</h2>
			</div>
			<img src="images/pic02.jpg" width="282" height="150" alt="" />
			<p>Quisque eleifend. Phasellus tempor vehicula justo. Aliquam lacinia metus.</p>
			<a href="#" class="button">Etiam posuere</a>
		</div>
	</div>
	



<div class="bottom-margin">
<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
<div class="messages error">
	<ol>
	<?php
$_from = $_smarty_tpl->tpl_vars['msgs']->value->getErrors();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['err'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['err']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->_loop = true;
$foreach_err_Sav = $_smarty_tpl->tpl_vars['err'];
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
$_smarty_tpl->tpl_vars['err'] = $foreach_err_Sav;
}
?>
	</ol>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
<div class="messages info">
	<ol>
	<?php
$_from = $_smarty_tpl->tpl_vars['msgs']->value->getInfos();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['inf'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['inf']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->_loop = true;
$foreach_inf_Sav = $_smarty_tpl->tpl_vars['inf'];
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
$_smarty_tpl->tpl_vars['inf'] = $foreach_inf_Sav;
}
?>
	</ol>
</div>
<?php }?>
</div>


<div id="footer">
	<p>&copy; Untitled. All rights reserved. Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. Photos by <a href="http://fotogrph.com/">Fotogrph</a>.</p>
</div>
</body>
</html><?php }
}
?>