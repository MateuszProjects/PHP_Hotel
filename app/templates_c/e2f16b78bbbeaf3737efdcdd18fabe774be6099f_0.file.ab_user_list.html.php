<?php /* Smarty version 3.1.27, created on 2016-06-12 11:56:56
         compiled from "C:\xampp2\htdocs\ProjektOne\app\project\admin\ab_user_list.html" */ ?>
<?php
/*%%SmartyHeaderCode:17881575d31e8a65ea7_85709458%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2f16b78bbbeaf3737efdcdd18fabe774be6099f' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ProjektOne\\app\\project\\admin\\ab_user_list.html',
      1 => 1465719335,
      2 => 'file',
    ),
    'e95650d077103afe5a7757317a3d6a03f0cfb60b' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ProjektOne\\templates\\index.html',
      1 => 1465038859,
      2 => 'file',
    ),
    '2207dad49ccd869a44934cb7a317642022293ef8' => 
    array (
      0 => '2207dad49ccd869a44934cb7a317642022293ef8',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '17881575d31e8a65ea7_85709458',
  'variables' => 
  array (
    'conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_575d31e8b09c22_39296521',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575d31e8b09c22_39296521')) {
function content_575d31e8b09c22_39296521 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17881575d31e8a65ea7_85709458';
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
$_smarty_tpl->properties['nocache_hash'] = '17881575d31e8a65ea7_85709458';
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
                    <h1 class="email-content-title">Panel Administratora<br/> Lista urzytkowników:</h1>
                </div>

            </div>

            <div class="email-content-body">
               <p>Informacja o urzytkownikach systemu informatycznego hotelu mccenzie - hotel   lista wszytkich urzytkowników wraz z możliwością edycji oraz usuwania urzytkowników </p>
                

 
<!-- our form -->  
<form id='userForm'>
    <div><input type='text' name='sf_name' placeholder='Surname' /></div>
    <div><input type='submit' value='Submit' /></div>
</form>
 <br/>
<!-- where the response will be displayed -->
<div id='response'></div>
 
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 language="javascript" type="text/javascript">
$(document).ready(function(){
    $('#userForm').submit(function(){
     
        $.ajax({
            type: 'GET',
            url: '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
user_list', 
            data: $(this).serialize(),
			success: function(data){
				$('#foo').html(data);
			}
			
        })
        

        return false;
 
    });
});
<?php echo '</script'; ?>
>




				
				
<table  id="foo" border="1"  class="pure-table">
<thead>
	<tr>
		<th> name </th>
		<th> surname </th>
		<th> login </th>
		<th> pass </th>
		<th> phone_number </th>
		<th> admin </th>
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
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["admin"];?>
</td><td><a  class="pure-button pure-button-primary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
editUser&id=<?php echo $_smarty_tpl->tpl_vars['p']->value['iduser'];?>
">Edytuj</a></td><td><a  class="pure-button pure-button-primary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
delete&id=<?php echo $_smarty_tpl->tpl_vars['p']->value['iduser'];?>
">Usuń</a></td></tr>
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