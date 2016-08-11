<?php /*%%SmartyHeaderCode:270157acc95ad7d471-02648135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03c0b73095834aaa082a95c2d9d1c6e7114da3d9' => 
    array (
      0 => 'C:\\wamp\\www\\Tiendas\\themes\\default-bootstrap\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270157acc95ad7d471-02648135',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57acc95aee0c98_10625315',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57acc95aee0c98_10625315')) {function content_57acc95aee0c98_10625315($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://localhost/tiendas/index.php?controller=my-account" title="Administrar mi cuenta de cliente" rel="nofollow">Mi cuenta</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://localhost/tiendas/index.php?controller=history" title="Mis compras" rel="nofollow">Mis compras</a></li>
						<li><a href="http://localhost/tiendas/index.php?controller=order-slip" title="Mis vales descuento" rel="nofollow">Mis vales descuento</a></li>
			<li><a href="http://localhost/tiendas/index.php?controller=addresses" title="Mis direcciones" rel="nofollow">Mis direcciones</a></li>
			<li><a href="http://localhost/tiendas/index.php?controller=identity" title="Administrar mi información personal" rel="nofollow">Mis datos personales</a></li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
