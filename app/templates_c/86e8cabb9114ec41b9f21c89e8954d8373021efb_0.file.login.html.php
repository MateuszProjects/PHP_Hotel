<?php /* Smarty version 3.1.27, created on 2016-06-13 12:24:42
         compiled from "C:\xampp2\htdocs\ProjektOne\app\project\login\login.html" */ ?>
<?php
/*%%SmartyHeaderCode:30910575e89eaed1ed7_53724625%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86e8cabb9114ec41b9f21c89e8954d8373021efb' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ProjektOne\\app\\project\\login\\login.html',
      1 => 1465809917,
      2 => 'file',
    ),
    '0e9a37d72261488bc4476a1be797bf748c641620' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ProjektOne\\templates\\main.html',
      1 => 1465809814,
      2 => 'file',
    ),
    '0b4119406a5f4f7788efdf34587b6f6763132636' => 
    array (
      0 => '0b4119406a5f4f7788efdf34587b6f6763132636',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '30910575e89eaed1ed7_53724625',
  'variables' => 
  array (
    'conf' => 0,
    'msgs' => 0,
    'err' => 0,
    'inf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_575e89eb0546f4_38816376',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575e89eb0546f4_38816376')) {
function content_575e89eb0546f4_38816376 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30910575e89eaed1ed7_53724625';
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
<title>Mackenzie-Hotel</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Varela+Round" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/fonts.css" rel="stylesheet" type="text/css" media="all" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/lib/jquery-1.9.1.min.js" ><?php echo '</script'; ?>
>
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
$_smarty_tpl->properties['nocache_hash'] = '30910575e89eaed1ed7_53724625';
?>


<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/scrollreveal.js/3.1.4/scrollreveal.min.js"><?php echo '</script'; ?>
>


	<br/> <br/>
		 	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/login.css" />
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/lib/jquery-easyui-1.4.5/jquery.easyui.min.js"><?php echo '</script'; ?>
>
	<center>
	<form    class="form-container"  action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post" >
<div class="form-title"><h2>Login</h2></div>
<div class="form-title">Name</div>
<input class="form-field" type="text" name="name" /><br />
<div class="form-title">Pass:</div>
<input class="form-field" type="password" name="pas" /><br />
<div class="submit-container">
<input class="submit-button" type="submit" value="Submit"    />
</div>
</form>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<div ><h2></h2></div>
<?php echo '<script'; ?>
>
    window.sr = ScrollReveal();

    sr.reveal('h2, p', {
        reset: true,
        delay: 300
    });
<?php echo '</script'; ?>
>
		</center>
<br/>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4 >Wystąpiły błędy: </h4>
	<ol class="err" >
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
</tbody>
</table>

	



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
	<li ><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
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