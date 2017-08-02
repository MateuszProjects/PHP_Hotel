<?php /* Smarty version 3.1.27, created on 2016-06-12 10:24:55
         compiled from "C:\xampp2\htdocs\ProjektOne\app\project\user\user_reservation.html" */ ?>
<?php
/*%%SmartyHeaderCode:10054575d1c57329c86_42633528%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fd0885b03b82941d6041fa8db0209300684f509' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ProjektOne\\app\\project\\user\\user_reservation.html',
      1 => 1465719893,
      2 => 'file',
    ),
    'e95650d077103afe5a7757317a3d6a03f0cfb60b' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ProjektOne\\templates\\index.html',
      1 => 1465038859,
      2 => 'file',
    ),
    '0ee19a00b4b4b9328841f96a2abaad01c0f4b3a3' => 
    array (
      0 => '0ee19a00b4b4b9328841f96a2abaad01c0f4b3a3',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '10054575d1c57329c86_42633528',
  'variables' => 
  array (
    'conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_575d1c573b98d5_97110958',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575d1c573b98d5_97110958')) {
function content_575d1c573b98d5_97110958 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10054575d1c57329c86_42633528';
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
$_smarty_tpl->properties['nocache_hash'] = '10054575d1c57329c86_42633528';
?>



       <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/templates/layouts/email.css">

<div id="layout" class="content pure-g">
    <div id="nav" class="pure-u">
        <a href="#" class="nav-menu-button">User Reservation </a>

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
                
				
			
				
				<div>
				<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
user_reserwation_second" method="post">
				<legend>Rezerwacja: </legend>
				<input type="hidden"  name="up_name"></input>
				<input type="submit"  value="wysli" class="pure-button pure-button-primary"></input>
			     </form>
				</div>
				
         </div>
</div>








</body>
</html>
<?php }
}
?>