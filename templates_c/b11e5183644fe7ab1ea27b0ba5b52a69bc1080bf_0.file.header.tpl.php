<?php
/* Smarty version 4.2.1, created on 2022-10-26 17:31:32
  from 'C:\xampp\htdocs\TPEweb2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_635952d4beeea7_74424143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b11e5183644fe7ab1ea27b0ba5b52a69bc1080bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\header.tpl',
      1 => 1666798285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635952d4beeea7_74424143 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>

    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spoty-False</title>

    <!-- bootstrap -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <nav class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-center">
                <a href="#" class="d-flex align-items-center mb-lg-0 text-white text-decoration-none fs-4">
                    <img src="./images/logo-spoty.png" width="150" height="50" class="mx-4" style="object-fit: cover;">
                </a>
                <ul class="nav col-12 col-lg-auto ml-auto me-lg-auto mb-2 d-flex justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-light">Albums</a></li>
                    <li><a href="songs" class="nav-link px-2 text-light">Canciones</a></li>
                </ul>
                <?php if ((isset($_smarty_tpl->tpl_vars['search']->value))) {?>
                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search" method="get" action="">
                    <input type="search" id="search" name="search" class="form-control form-control-white text-bg-light text-dark"
                    placeholder="Search..." aria-label="Search">
                    </form>
                <?php }?>

                <?php if (!(isset($_SESSION['USER_ID']))) {?>
                    <div >
                    <a href="login"><button type="button" class="btn btn-warning">login</button></a>
                </div>
                  <?php } else { ?> 
                    <div>
                    <a href="logout"><button type="button" class="btn btn-warning">logout (<?php echo $_SESSION['USER_USUARIO'];?>
)</button></a>
                </div>
                  <?php }?>
            </div>
        </div>
    </nav>


<?php }
}
