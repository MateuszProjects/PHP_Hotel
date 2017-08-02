<?php /* Smarty version 3.1.27, created on 2016-05-01 18:13:25
         compiled from "C:\xampp2\htdocs\ProjektOne\app\person\edit\dane.html" */ ?>
<?php
/*%%SmartyHeaderCode:967357262b2587e733_62879695%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be96ad89eb354de81d390154860b1b73d04b7e8b' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ProjektOne\\app\\person\\edit\\dane.html',
      1 => 1462118070,
      2 => 'file',
    ),
    '0e9a37d72261488bc4476a1be797bf748c641620' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ProjektOne\\templates\\main.html',
      1 => 1462117501,
      2 => 'file',
    ),
    '0a69305b6deb3cd71e7f920b6f11295a9f8c80eb' => 
    array (
      0 => '0a69305b6deb3cd71e7f920b6f11295a9f8c80eb',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '967357262b2587e733_62879695',
  'variables' => 
  array (
    'conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57262b259663b9_60732084',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57262b259663b9_60732084')) {
function content_57262b259663b9_60732084 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '967357262b2587e733_62879695';
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
				<li class="current_page_item"><a href="#" accesskey="1" title="">Homepage</a></li>
				<li><a href="#" accesskey="1" title="">Services</a></li>
				<li><a href="#" accesskey="2" title="">Our Clients</a></li>
				<li><a href="#" accesskey="3" title="">About Us</a></li>
				<li><a href="#" accesskey="4" title="">LogIn</a></li>
				<li><a href="#" accesskey="5" title="">Register</a></li>
			</ul>
		</div>
	</div>
	</div>
	<!--  blok wymienny. content-->
	<?php
$_smarty_tpl->properties['nocache_hash'] = '967357262b2587e733_62879695';
?>



	 	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
<section id="two" class="wrapper style2 alt">
					<div class="inner">
			<section id="contact" class="wrapper">
				<div class="inner split">
					<section>
						<h2>Formularz:   </h2>
												
					<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dom" method="post" >
		
							<div class="row uniform">
								<div class="6u 12u$(xsmall)">
									<input  name="x" placeholder="x" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
">
								</div>
 							</div>
							
							<div class="row uniform">
								<div class="6u 12u$(xsmall)">
									<input   name="y" placeholder="y" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
">
								</div>
 							</div>
							
							<div class="row uniform">
								<div class="6u 12u$(xsmall)">
									<input    name="name" placeholder="name" type="text"   value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
">
								</div>
 							</div>
							
							<div class="row uniform">
								<div class="6u 12u$(xsmall)">
									<input    name="surname" placeholder="surname" type="text"   value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
">
								</div>
 							</div>
							
 							<ul class="actions">
 								<li><input class="alt" value="wyśli" type="submit"></li>
 							</ul>
 					
						</form>
</section>


	<section>



<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
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
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
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
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
	<h4>Wynik:</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

<br/> <br/>

<table class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>id</th>
		<th>x</th>
		<th>y</th>
		<th>name</th>
		<th>surname</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->tpl_vars['people']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["wx"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["wy"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["wname"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["wsurname"];?>
</td></tr>
<?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
</tbody>
</table>
					</section>
				</div>				
			</section>


<div id="footer">
	<p>&copy; Untitled. All rights reserved. Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. Photos by <a href="http://fotogrph.com/">Fotogrph</a>.</p>
</div>
</body>
</html><?php }
}
?>