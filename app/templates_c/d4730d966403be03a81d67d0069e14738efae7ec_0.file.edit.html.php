<?php /* Smarty version 3.1.27, created on 2016-06-12 10:47:22
         compiled from "C:\xampp2\htdocs\ProjektOne\app\project\admin\edit.html" */ ?>
<?php
/*%%SmartyHeaderCode:6947575d219a52f3b1_27299082%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4730d966403be03a81d67d0069e14738efae7ec' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ProjektOne\\app\\project\\admin\\edit.html',
      1 => 1465721240,
      2 => 'file',
    ),
    'e95650d077103afe5a7757317a3d6a03f0cfb60b' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ProjektOne\\templates\\index.html',
      1 => 1465038859,
      2 => 'file',
    ),
    'b080f9969996c13657d2c88237c526e5b94a45b4' => 
    array (
      0 => 'b080f9969996c13657d2c88237c526e5b94a45b4',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '6947575d219a52f3b1_27299082',
  'variables' => 
  array (
    'conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_575d219a5bc010_79285373',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575d219a5bc010_79285373')) {
function content_575d219a5bc010_79285373 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6947575d219a52f3b1_27299082';
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
$_smarty_tpl->properties['nocache_hash'] = '6947575d219a52f3b1_27299082';
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
                    <h1 class="email-content-title">Panel Administratora</h1>

                </div>


            </div>

            <div class="email-content-body">
<div >

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
update" method="post"  class="pure-form pure-form-aligned">
    <fieldset>
        <div class="pure-control-group">
            <label>Name</label>
            <input id="name" type="text" placeholder="imię" name="up_name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
">
        </div>

        <div class="pure-control-group">
            <label>Surname</label>
            <input id="surname" type="text" placeholder="nazwisko" name="up_surname" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
">
        </div>

        <div class="pure-control-group">
            <label>Login</label>
            <input id="birthdate" type="text" placeholder="login" name="up_login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
">
        </div>

        <div class="pure-controls">
   
            <button type="submit" class="pure-button pure-button-primary" >Save</button>
        </div>
    </fieldset>
	    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
</form>


</div>
            </div>
        </div>
    </div>
</div>








</body>
</html>
<?php }
}
?>