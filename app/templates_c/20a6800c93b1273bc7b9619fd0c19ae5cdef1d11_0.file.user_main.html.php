<?php /* Smarty version 3.1.27, created on 2016-06-04 15:56:50
         compiled from "C:\xampp2\htdocs\ProjektOne\app\project\user\user_main.html" */ ?>
<?php
/*%%SmartyHeaderCode:317125752de221dc300_50277303%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20a6800c93b1273bc7b9619fd0c19ae5cdef1d11' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ProjektOne\\app\\project\\user\\user_main.html',
      1 => 1465048442,
      2 => 'file',
    ),
    'e95650d077103afe5a7757317a3d6a03f0cfb60b' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ProjektOne\\templates\\index.html',
      1 => 1465038859,
      2 => 'file',
    ),
    'c28d848af2049de1af53787612f6cfc28febb349' => 
    array (
      0 => 'c28d848af2049de1af53787612f6cfc28febb349',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '317125752de221dc300_50277303',
  'variables' => 
  array (
    'conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5752de2226ff71_23418619',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5752de2226ff71_23418619')) {
function content_5752de2226ff71_23418619 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '317125752de221dc300_50277303';
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
$_smarty_tpl->properties['nocache_hash'] = '317125752de221dc300_50277303';
?>



       <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/templates/layouts/email.css">

<div id="layout" class="content pure-g">
    <div id="nav" class="pure-u">
        <a href="#" class="nav-menu-button">User Main</a>

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
                    <h1 class="email-content-title">STRONA MAIN</h1>
                </div>
            </div>

            <div class="email-content-body">
               <p>Informacja o urzytkownikach systemu informatycznego hotelu mccenzie - hotel   lista wszytkich urzytkowników wraz z możliwością edycji oraz usuwania urzytkowników </p>
                
				
			
								<br/>

			
				
				<br/>
    </div>
</div>








</body>
</html>
<?php }
}
?>