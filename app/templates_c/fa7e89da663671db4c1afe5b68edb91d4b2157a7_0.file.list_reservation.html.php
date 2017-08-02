<?php /* Smarty version 3.1.27, created on 2016-06-12 00:12:19
         compiled from "C:\xampp2\htdocs\ProjektOne\app\project\admin\list_reservation.html" */ ?>
<?php
/*%%SmartyHeaderCode:25599575c8cc35130d0_20569630%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa7e89da663671db4c1afe5b68edb91d4b2157a7' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ProjektOne\\app\\project\\admin\\list_reservation.html',
      1 => 1465683136,
      2 => 'file',
    ),
    'e95650d077103afe5a7757317a3d6a03f0cfb60b' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ProjektOne\\templates\\index.html',
      1 => 1465038859,
      2 => 'file',
    ),
    '51635f41baf40c2039b6b6efc64e5906e7f31e09' => 
    array (
      0 => '51635f41baf40c2039b6b6efc64e5906e7f31e09',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '25599575c8cc35130d0_20569630',
  'variables' => 
  array (
    'conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_575c8cc35a7434_45682283',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575c8cc35a7434_45682283')) {
function content_575c8cc35a7434_45682283 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25599575c8cc35130d0_20569630';
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
$_smarty_tpl->properties['nocache_hash'] = '25599575c8cc35130d0_20569630';
?>


<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"><?php echo '</script'; ?>
>
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
                		
		
<?php echo '<script'; ?>
>
$(document).ready(function(){
$("#submit").click(function(){
var idroom = $("#room_class").val();
var dataString = 'room_class='+ idroom;
$.ajax({
type: "POST",
url: "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
list_reservation",
data: dataString,
cache: false,
success: dataType
});
}

});
<?php echo '</script'; ?>
>
				<div>
				<form id="baz"  method="post" >
				<legend>Opcje wyszukiwania</legend>
				<input type="text" placeholder="room class" name="id" id="room_class" />
				<input type="submit"  value="wysli"   ></input>
			     </form>
				</div>
				
				
				<br/>
<table  id="foo" border="1"  class="pure-table">
<thead>
	<tr>
		<th> room_class </th>
		<th> data_start </th>
		<th> data_stop </th>
		<th> reservation_idreservation </th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->tpl_vars['room']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["room_class"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["data_start"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["data_stop"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["reservation_idreservation"];?>
</td></tr>
<?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
            </div>
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