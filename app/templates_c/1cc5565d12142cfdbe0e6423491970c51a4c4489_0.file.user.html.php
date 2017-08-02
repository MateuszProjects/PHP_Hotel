<?php /* Smarty version 3.1.27, created on 2016-06-05 23:22:23
         compiled from "C:\xampp2\htdocs\ProjektOne\app\project\admin\user.html" */ ?>
<?php
/*%%SmartyHeaderCode:210505754980ff07ee7_03127362%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cc5565d12142cfdbe0e6423491970c51a4c4489' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ProjektOne\\app\\project\\admin\\user.html',
      1 => 1465067898,
      2 => 'file',
    ),
    'e95650d077103afe5a7757317a3d6a03f0cfb60b' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ProjektOne\\templates\\index.html',
      1 => 1465038859,
      2 => 'file',
    ),
    '98212202e328fe17d43fd7ed4a14caf4cc78ffab' => 
    array (
      0 => '98212202e328fe17d43fd7ed4a14caf4cc78ffab',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '210505754980ff07ee7_03127362',
  'variables' => 
  array (
    'conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5754981013a9e0_00583326',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5754981013a9e0_00583326')) {
function content_5754981013a9e0_00583326 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '210505754980ff07ee7_03127362';
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
$_smarty_tpl->properties['nocache_hash'] = '210505754980ff07ee7_03127362';
?>



       <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/templates/layouts/email.css">

<div id="layout" class="content pure-g">
    <div id="nav" class="pure-u">
        <a href="#" class="nav-menu-button">Strona logowania user:</a>

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
                    <h1 class="email-content-title">Strona Usera:</h1>

                </div>


            </div>

            <div class="email-content-body">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
				</p>
             </p>
            </div>
        </div>
    </div>
</div>








</body>
</html>
<?php }
}
?>