<?php /* Smarty version 3.1.27, created on 2015-07-28 16:06:01
         compiled from "E:\www\easyCms\smarty\templates\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1529955b7a869552451_48605946%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1158735fed5e7a32ff53e7ce55994431d66dd2f' => 
    array (
      0 => 'E:\\www\\easyCms\\smarty\\templates\\login.tpl',
      1 => 1438099556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1529955b7a869552451_48605946',
  'variables' => 
  array (
    'BasePath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55b7a8695fe281_56964563',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55b7a8695fe281_56964563')) {
function content_55b7a8695fe281_56964563 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1529955b7a869552451_48605946';
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>登陆系统</title>
    <!-- Bootstrap -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BasePath']->value;?>
css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['BasePath']->value;?>
css/bootflat.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['BasePath']->value;?>
css/login.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>
  <body>
    
    <div class="warp">
      <div class="login">
        <form class="form-horizontal">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <h4>欢迎使用网站后台管理系统</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <input type="email" class="form-control" id="inputEmail3" placeholder="账号">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <input type="email" class="form-control" id="inputEmail3" placeholder="密码">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <button type="button" class="btn btn-info btn-block">登录</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BasePath']->value;?>
js/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BasePath']->value;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
        
       <!-- Bootflat's JS files.-->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BasePath']->value;?>
js/icheck.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BasePath']->value;?>
js/jquery.fs.selecter.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BasePath']->value;?>
js/jquery.fs.stepper.min.js"><?php echo '</script'; ?>
>

  </body>
</html><?php }
}
?>