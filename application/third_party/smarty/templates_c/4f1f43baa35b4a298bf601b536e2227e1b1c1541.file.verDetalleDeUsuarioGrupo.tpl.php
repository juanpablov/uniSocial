<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-07-27 20:29:37
         compiled from "C:\xampp\htdocs\uniSocial\application\views\verDetalleDeUsuarioGrupo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177035b5b6491393246-51228028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f1f43baa35b4a298bf601b536e2227e1b1c1541' => 
    array (
      0 => 'C:\\xampp\\htdocs\\uniSocial\\application\\views\\verDetalleDeUsuarioGrupo.tpl',
      1 => 1532713704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177035b5b6491393246-51228028',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'unUsuario' => 0,
    'unGrupo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b5b64913e1e94_54459387',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5b64913e1e94_54459387')) {function content_5b5b64913e1e94_54459387($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title>Detalles de usuarios en grupos</title>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Detalles de los usuarios en grupos</h2>

<table>
	<tr>
		<th>
			Nombre de grupo <!--Nombre de columna-->
		</th>
	</tr>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['unGrupo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unGrupo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unUsuario']->value->grupos(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['unGrupo']->key => $_smarty_tpl->tpl_vars['unGrupo']->value) {
$_smarty_tpl->tpl_vars['unGrupo']->_loop = true;
?>
			<tr> 
				<td> <!--Valores de columna-->
					<?php echo $_smarty_tpl->tpl_vars['unGrupo']->value->getNombreGrupo();?>

				</td>
			</tr>
	<?php } ?>
	</tbody>
</table>

</body>
</html><?php }} ?>
