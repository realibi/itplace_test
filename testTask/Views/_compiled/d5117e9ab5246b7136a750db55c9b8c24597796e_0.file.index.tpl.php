<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-25 21:13:43
  from 'C:\OSPanel\domains\ishop.kz\Views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5db33b576a2963_24434875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5117e9ab5246b7136a750db55c9b8c24597796e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\ishop.kz\\Views\\index.tpl',
      1 => 1572027221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:global/head.tpl' => 1,
  ),
),false)) {
function content_5db33b576a2963_24434875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:global/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
<?php echo '<script'; ?>

        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"><?php echo '</script'; ?>
>

<style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .mb-50{
        margin-bottom: 50px;
    }
</style>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Deals</a></li>
        <li><a href="#">Stores</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron mb-50">
  <div class="container text-center">
    <h1>ALMA SHOP</h1>      
    <p>Интернет-магазин аксессуаров<br>для электронных гаджетов</p>
  </div>
</div>

<div class="container akcii">    
  <div class="row">
    <div class="col-md-4 col-sm-6">
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6"> 
      <div class="panel panel-danger">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6"> 
      <div class="panel panel-success">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
  </div>
</div><br><hr><br>

<div class="container">    
  <div class="row items">
      </div>
</div><br><br>

<?php echo '<script'; ?>
>
    $(document).ready(getElements());

    function getElements(){
        $.ajax({
            url: "/items/allItems",
            method: "GET",
            success: function(data) {
                var array = JSON.parse(data);
                $(".items").html(" "); 
                array.forEach(function(item, i, data) {
                    $(".items").append("<div class='col-md-4 col-sm-6 col-xs-6 mb-50'><div class='panel panel-primary'><div class='panel-heading'>" + item["name"] + "</div><div class='panel-body'><img src='https://placehold.it/150x80?text=IMAGE' class='img-responsive' style='width:100%'' alt='Image'></div><div class='panel-footer'>" + item["price"] + "</div></div></div>");
                })
            }
        });
    }

    function addToCart(id){
        $.ajax({
            url: "/items/add/" + id,
            method: "GET",
            success: function(data){
                var arr = JSON.parse(data);
            }
        });
    }
<?php echo '</script'; ?>
><?php }
}
