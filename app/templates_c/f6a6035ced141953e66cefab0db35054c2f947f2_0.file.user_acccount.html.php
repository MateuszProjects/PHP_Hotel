<?php /* Smarty version 3.1.27, created on 2016-06-12 10:25:05
         compiled from "C:\xampp2\htdocs\ProjektOne\app\project\user\user_acccount.html" */ ?>
<?php
/*%%SmartyHeaderCode:20020575d1c6109fec4_15489599%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6a6035ced141953e66cefab0db35054c2f947f2' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ProjektOne\\app\\project\\user\\user_acccount.html',
      1 => 1465719903,
      2 => 'file',
    ),
    'e95650d077103afe5a7757317a3d6a03f0cfb60b' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ProjektOne\\templates\\index.html',
      1 => 1465038859,
      2 => 'file',
    ),
    '5eccebb56ffe7fe0bb3e41afeedcfe08425d9dba' => 
    array (
      0 => '5eccebb56ffe7fe0bb3e41afeedcfe08425d9dba',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '20020575d1c6109fec4_15489599',
  'variables' => 
  array (
    'conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_575d1c61137398_27061337',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575d1c61137398_27061337')) {
function content_575d1c61137398_27061337 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20020575d1c6109fec4_15489599';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example that shows off a responsive email layout.">

    <title>Mackenzie-Hotel</title>

    
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/lib/jquery-1.9.1.min.js" ><?php echo '</script'; ?>
>

<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">







  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="/layouts/email-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="layouts/email.css">
    <!--<![endif]-->
  


    

    

</head>
<body>




	<?php
$_smarty_tpl->properties['nocache_hash'] = '20020575d1c6109fec4_15489599';
?>



       <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/templates/layouts/email.css">

<div id="layout" class="content pure-g">
    <div id="nav" class="pure-u">
        <a href="#" class="nav-menu-button">User Account</a>

        <div class="nav-inner">
            <div class="pure-menu">
                <ul class="pure-menu-list">
                    <li class="pure-menu-item"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
log_out" class="pure-menu-link"><span class="email-label-personal"></span>LogOut</a></li>
                    <li class="pure-menu-item"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
user_account" class="pure-menu-link"><span class="email-label-work"></span>Account</a></li>
                    <li class="pure-menu-item"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
user_reserwation" class="pure-menu-link"><span class="email-label-travel"></span>List Reservat</a></li>
					<li class="pure-menu-item"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
user_main" class="pure-menu-link"><span class="email-label-travel"></span>Main</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div id="main" class="pure-u-1">
        <div class="email-content">
            <div class="email-content-header pure-g">
                <div class="pure-u-1-2">
                    <h1 class="email-content-title">STRONA USERA</h1>
                    <p class="email-content-subtitle">
                        From <a>Tilo Mitra</a> at <span>3:56pm, April 3, 2012</span>
                    </p>
                </div>

                <div class="email-content-controls pure-u-1-2">
                    <button class="secondary-button pure-button">Reply</button>
                    <button class="secondary-button pure-button">Forward</button>
                    <button class="secondary-button pure-button">Move to</button>
                </div>
            </div>

            <div class="email-content-body">
               <p>Informacja o urzytkownikach systemu informatycznego hotelu mccenzie - hotel   lista wszytkich urzytkowników wraz z możliwością edycji oraz usuwania urzytkowników </p>
                
				
				<br/>
<table  id="foo" border="1"  class="pure-table">
<thead>
	<tr>
		<th> name </th>
		<th> surname </th>
		<th> login </th>
		<th> pass </th>
		<th> phone_number </th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->tpl_vars['user']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["surname"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["login"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["pass"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["phone_number"];?>
</td></tr>
<?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
   
            </div>
        </div>
    </div>
</div>








</body>
</html>
<?php }
}
?>