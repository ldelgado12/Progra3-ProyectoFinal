<?php
/* Smarty version 4.1.0, created on 2022-04-16 22:45:24
  from 'C:\xampp\htdocs\proyectoPrograFinal\view\templates\registerUserForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625b2ae4a23db7_02039135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a7784d4e15271a41998ab61855f5e1e675e6a7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoPrograFinal\\view\\templates\\registerUserForm.tpl',
      1 => 1650098695,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625b2ae4a23db7_02039135 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UH CRM - Register a new user/employee</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
</head>

<body>
    <section class="h-100 h-custom" style="background-color: #ffffff;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">
                        <img src="https://media.istockphoto.com/photos/button-on-computer-keyboard-picture-id1146311489?b=1&k=20&m=1146311489&s=170667a&w=0&h=Pi3Qht78k6keoQLFHxCRZMp4eINefsdQOTnlDkNgFaA="
                            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                            alt="Sample photo">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

                            <form class="px-md-2" action="index.php" method="post">
                                <input type="hidden" name="accion" value="registerUser">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1q">User</label>
                                    <input type="text" id="form3Example1q" class="form-control" name="user" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1q">Password</label>
                                    <input type="text" id="form3Example1q" class="form-control" name="password"/>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1q">Name</label>
                                    <input type="text" id="form3Example1q" class="form-control" name="username"/>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1q">Lastname</label>
                                    <input type="text" id="form3Example1q" class="form-control" name="lastname"/>
                                </div>
                                <div class="mb-4">
                                    <select class="select" name="id_role">
                                        <option value="1" >Customer Service Rol</option>
                                        <option value="2">HR Role</option>
                                        <option value="3">WareHouse Management Rol</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg mb-1" value="registerUser">Submit</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html><?php }
}
