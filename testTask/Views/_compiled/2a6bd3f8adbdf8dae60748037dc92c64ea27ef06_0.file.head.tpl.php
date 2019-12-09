<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-09 20:47:14
  from 'C:\OSPanel\domains\testTask\Views\global\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dee88a2a99129_99289277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a6bd3f8adbdf8dae60748037dc92c64ea27ef06' => 
    array (
      0 => 'C:\\OSPanel\\domains\\testTask\\Views\\global\\head.tpl',
      1 => 1575913631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dee88a2a99129_99289277 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="/Views/admin/script.js"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="/Views/admin/style.css" />
</head>
<body>

<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
<?php echo '<script'; ?>

        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="/Views/admin/style.css" />

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">ItPlace</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="/news">Main</a></li>
        <li><a href="/admin/dashboard">Dashboard</a></li>
      </ul>
    </div>
  </div>
</nav><?php }
}
