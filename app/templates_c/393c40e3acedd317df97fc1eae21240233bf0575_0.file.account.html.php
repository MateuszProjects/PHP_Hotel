<?php /* Smarty version 3.1.27, created on 2016-06-12 00:11:56
         compiled from "C:\xampp2\htdocs\ProjektOne\app\project\admin\account.html" */ ?>
<?php
/*%%SmartyHeaderCode:29139575c8cacf19f05_12925759%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '393c40e3acedd317df97fc1eae21240233bf0575' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ProjektOne\\app\\project\\admin\\account.html',
      1 => 1465683114,
      2 => 'file',
    ),
    'e95650d077103afe5a7757317a3d6a03f0cfb60b' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ProjektOne\\templates\\index.html',
      1 => 1465038859,
      2 => 'file',
    ),
    'a7d8f963248a724296be849305df0c98d76871c9' => 
    array (
      0 => 'a7d8f963248a724296be849305df0c98d76871c9',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '29139575c8cacf19f05_12925759',
  'variables' => 
  array (
    'conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_575c8cad073618_58390322',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575c8cad073618_58390322')) {
function content_575c8cad073618_58390322 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29139575c8cacf19f05_12925759';
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
$_smarty_tpl->properties['nocache_hash'] = '29139575c8cacf19f05_12925759';
?>



       <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/templates/layouts/email.css">


<div id="layout" class="content pure-g">
    <div id="nav" class="pure-u">
        <a href="#" class="nav-menu-button">Menu</a>

        <div class="nav-inner">
            <div class="pure-menu">
                <ul class="pure-menu-list">
                    <li class="pure-menu-item"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
log_out" class="pure-menu-link"><span class="email-label-personal"></span>LogOut</a></li>
                    <li class="pure-menu-item"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
user_list" class="pure-menu-link"><span class="email-label-personal"></span>User List</a></li>
                    <li class="pure-menu-item"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
account" class="pure-menu-link"><span class="email-label-work"></span>Account</a></li>
                    <li class="pure-menu-item"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
list_reservation" class="pure-menu-link"><span class="email-label-travel"></span>List Reservat</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div id="main" class="pure-u-1">
        <div class="email-content">
            <div class="email-content-header pure-g">
                <div class="pure-u-1-2">
                    <h1 class="email-content-title">Panel Administratora <br/>  Konta urzytkowników:</h1>

                </div>

            </div>

            <div class="email-content-body">
                <p>
                    Konta urzytkowników systemu informatycznego hotelu macenzi-hotel. Informacje o wszystkich kontacha urzytkownikowników systemu informatycznego.
                </p>
        
		
		
		

				<div>
				<form id="baz" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
account" method="post">
				<legend>Opcje wyszukiwania</legend>
				<input type="text" placeholder="idaccount" name="id" />
				<input type="submit"  value="wysli"   ></input>
			     </form>
				</div>
				
				
				<br/>
<table  id="foo" border="1"  class="pure-table" >
<thead>
	<tr>
		<th> idaccount</th>
		<th> credit </th>
		<th> user_iduser </th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->tpl_vars['account']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["idaccount"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["credit"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["user_iduser"];?>
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