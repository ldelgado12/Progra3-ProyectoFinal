<?php
/* Smarty version 4.1.0, created on 2022-04-17 10:30:28
  from 'C:\xampp\htdocs\proyectoPrograFinal\view\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625bd024e03b26_67178128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85b0f195d70f74ab14f43b23921971cca7fe5f6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoPrograFinal\\view\\templates\\header.tpl',
      1 => 1650184224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625bd024e03b26_67178128 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM UH - HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/table-report.css">
    <?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
            var actions = $("table td:last-child").html();
            // Append table with add row form on add new button click
            $(".add-new").click(function(){
                $(this).attr("disabled", "disabled");
                var index = $("table tbody tr:last-child").index();
                var row = '<tr>' +
                    '<td><input type="text" class="form-control" name="name" id="name"></td>' +
                    '<td><input type="text" class="form-control" name="department" id="department"></td>' +
                    '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                    '<td>' + actions + '</td>' +
                '</tr>';
                $("table").append(row);		
                $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
                $('[data-toggle="tooltip"]').tooltip();
            });
            // Add row on add button click
            $(document).on("click", ".add", function(){
                var empty = false;
                var input = $(this).parents("tr").find('input[type="text"]');
                input.each(function(){
                    if(!$(this).val()){
                        $(this).addClass("error");
                        empty = true;
                    } else{
                        $(this).removeClass("error");
                    }
                });
                $(this).parents("tr").find(".error").first().focus();
                if(!empty){
                    input.each(function(){
                        $(this).parent("td").html($(this).val());
                    });			
                    $(this).parents("tr").find(".add, .edit").toggle();
                    $(".add-new").removeAttr("disabled");
                }		
            });
            // Edit row on edit button click
            // $(document).on("click", ".edit", function(){		
            //     $(this).parents("tr").find("td:not(:last-child)").each(function(){
            // 		$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
            // 	});		
            // 	$(this).parents("tr").find(".add, .edit").toggle();
            // 	$(".add-new").attr("disabled", "disabled");
            // });
            // Delete row on delete button click
            $(document).on("click", ".delete", function(){
                $(this).parents("tr").remove();
                $(".add-new").removeAttr("disabled");
            });
        });
    <?php echo '</script'; ?>
>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://i0.wp.com/elpoderdelasideas.com/wp-content/uploads/universidad-hispanoamericana-isotipo.png?w=246&h=246&crop=1&ssl=1"
                    alt="" width="30" height="24" class="d-inline-block align-text-top">
                CRM
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href='index.php?accion='>Home</a>
                    </li>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['role']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "Customer Service") {?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php?accion=addCustomerForm">New Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick='getCustomers();'>All Customers</a>
                    </li>
                    <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['role']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == "HR Partner") {?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?accion=addEmployeeForm">Create a new employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick='getUsers();' >Employees Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick='getSalaries();'>Salary Management</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick='getPayrollReport();'>Payrol Report</a>
                    </li>
                    <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['role']->value;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == "WareHouse Management User") {?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inventory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">merchandise income</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">merchandise outcome</a>
                    </li>
                    <?php }}}?>
                    <li class="nav-item">
                        <a class="nav-link" href="control/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="">
        <div class="container px-4 text-center">
            <h1 class="fw-bolder">Welcome to the UH - CRM </h1>
            <p class="lead">Have fun doing your job!</p>
        </div>
    </header><?php }
}
