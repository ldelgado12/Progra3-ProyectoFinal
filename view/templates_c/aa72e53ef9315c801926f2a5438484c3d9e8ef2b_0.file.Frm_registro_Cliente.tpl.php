<?php
/* Smarty version 4.1.0, created on 2022-04-03 21:07:33
  from 'C:\xampp\htdocs\proyectoFinalP3\view\templates\Frm_registro_Cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6249f075a99210_87500760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa72e53ef9315c801926f2a5438484c3d9e8ef2b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoFinalP3\\view\\templates\\Frm_registro_Cliente.tpl',
      1 => 1649012852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6249f075a99210_87500760 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registro Cliente</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/registrar_padre.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>

<body>

    <header class="main_header">
        <nav>
            <a href="index.html">
            <img class="img_logo" src="./images/Logo.png" width="61" height="80" alt="Logo Costa Rica Educa">
            </a>
            <div class="float-right middle2">
                <div class="float-right mr-2">
                    <a href="registro_centroEdu.html" class="registrar_cuenta ml-1">Registro de Clientes</a>
                    <a href="index.html" class="registrar_cuenta ml-1">Inicio</a>
                    <a href="iniciar_sesion.html" class="registrar_cuenta ml-1">Iniciar sesion</a>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <section id="section">

            <h1 class="d1 color_text title_center mb-1">Registro de Clientes</h1>

      
            <form id="frm_registro_pf" style="margin-top:20px;">
                <div class="wrapper">
                    <section class="grid">
                        <div>
                            <label class="color_text" for="txt_nombre">Nombre</label>
                            <input name="nombre" type="text" id="txt_nombre" placeholder="Escriba el nombre de usuario">
                        </div>
                        
                        <div>
                            <label class="color_text" for="txt_papellido">Primer apellido</label>
                            <input name="apellido1" type="text" id="txt_papellido" placeholder="Escriba el primer apellido del usuario">
                        </div>
                        <div>
                            <label class="color_text" for="txt_sapellido">Segundo apellido</label>
                            <input name="apellido2" type="text" id="txt_sapellido" placeholder="Escriba el segundo apellido del usuario">
                        </div>

                        
                        <div>
                            <label class="color_text" for="txt_id">Usuario</label>
                            <input name="usuario" type="number" min="0" id="txt_id" placeholder="Escriba el usuario">
                        </div>

                        <div>
                            <label class="color_text" for="txt_correo">Role</label>
                            <select class="form-select" id="slt_provincias">
                                <option value="1">--Admin--</option>
                                <option value="2">--Empleado--</option>

                            </select>
                        </div>
                        <div>
                            <label class="color_text" for="txt_telefono">Password</label>
                            <input name="password" type="number" min="0" id="txt_telefono" placeholder="Escriba el password">
                        </div>



                    </section>

                </div>

                <div class="btn_enviar center">
                    <button type="button" id="btn_registrar">Guardar</button>
                </div>
            </form>
        </section>

    </main>

    <footer class="main_footer">
        <p class="white ml-1">&copy; Proyecto 2 Progra 3.</p>
        <nav class="footer_nav mt-2 ml-1">
            <a href="./index.html">Inicio</a>
            
        </nav>
    </footer>
 
</body>

</html><?php }
}
