<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-07-26 19:40:52
         compiled from "C:\xampp\htdocs\uniSocial\application\views\detalleUsuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:302875b5a07a40bec97-29395933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a1c8edda6edfb45e6e2fb5ebefab16c64ad5ac6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\uniSocial\\application\\views\\detalleUsuario.tpl',
      1 => 1532625013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302875b5a07a40bec97-29395933',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'unUsuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b5a07a4168674_13793451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5a07a4168674_13793451')) {function content_5b5a07a4168674_13793451($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Nombre</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="<?php echo $_smarty_tpl->tpl_vars['unUsuario']->value->getNombre();?>
" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Apellido</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="<?php echo $_smarty_tpl->tpl_vars['unUsuario']->value->getApellido();?>
" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Fecha de nacimiento</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" value="<?php echo $_smarty_tpl->tpl_vars['unUsuario']->value->getFechaNacimiento()->format('d/m/Y');?>
" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Legajo</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="City" value="<?php echo $_smarty_tpl->tpl_vars['unUsuario']->value->getLegajo();?>
" required> 
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Mail</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="State" value="<?php echo $_smarty_tpl->tpl_vars['unUsuario']->value->getMail();?>
" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Numero de telefono</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" value="<?php echo $_smarty_tpl->tpl_vars['unUsuario']->value->getNroTelefonoMovil();?>
" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

</body>
</html><?php }} ?>
