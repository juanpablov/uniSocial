<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-07-27 20:30:17
         compiled from "C:\xampp\htdocs\uniSocial\application\views\detalleGrupo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:270055b5b64b9f1cbd3-15515557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3448b6858b89188736e9acf81e422020ce6b884' => 
    array (
      0 => 'C:\\xampp\\htdocs\\uniSocial\\application\\views\\detalleGrupo.tpl',
      1 => 1532711259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270055b5b64b9f1cbd3-15515557',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'unGrupo' => 0,
    'unUsuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b5b64ba054964_83242782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5b64ba054964_83242782')) {function content_5b5b64ba054964_83242782($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
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

<h2>Detalles de los grupos</h2>

<table>
	<tr>
		<th>
			Nombre <!--Nombre de columna-->
		</th>
		<th>
			Apellido
		</th>
	</tr>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['unUsuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unUsuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unGrupo']->value->usuarios(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['unUsuario']->key => $_smarty_tpl->tpl_vars['unUsuario']->value) {
$_smarty_tpl->tpl_vars['unUsuario']->_loop = true;
?>
			<tr> 
				<td> <!--Valores de columna-->
					<?php echo $_smarty_tpl->tpl_vars['unUsuario']->value->getNombre();?>

				</td>
				<td>
					<?php echo $_smarty_tpl->tpl_vars['unUsuario']->value->getApellido();?>

				</td>
			</tr>
	<?php } ?>
	</tbody>

  <!--<tr>
    <th>Grupo 1</th>
  </tr>
  <tr>
    <td>Juan</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
  </tr>
  <tr>
    <td>Island Trading</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
  </tr> -->
</table>

</body>
</html><?php }} ?>
