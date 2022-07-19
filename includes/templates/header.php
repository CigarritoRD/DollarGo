<?php

if(!isset($_SESSION)){
    session_start();
}

$auth = $_SESSION['login'] ?? false;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <title>Dollar, GO!</title>
</head>

<body class="body">
<!-- PRINCIPIO DEL HEADER -->
    <header class="header">
        <nav class="nav">
            <div class="logo">
                <a href="\"><h4> Dollar <span>GO!</span> </h4></a>
                
            </div>

            <ul class="navs-links">
                <li><a href="\">> INICIO</a></li>
                <li><a href="/faq.php">> FAQ</a></li>
                <li><a href="/contacto.php">> CONTACTO</a></li>
                <?php if($auth): ?>
                <li><a href="/admin/index.php">> ADMINISTRACION</a></li>
                <?php endif ?>

                <?php if(!$auth): ?>
                <li><a href="/registrarse.php">> REGISTRATE</a></li>
                <?php endif ?>

                <?php if($auth): ?>
                <li id="login" ></i><a href="/cerrar_sesion.php">> CERRAR SESION</a></li>
                <?php endif ?>
                <?php if(!$auth): ?>
                <li id="login" ></i><a href="/login.php">> INICIAR SESION</a></li>
                <?php endif ?>
                
            </ul>

            <!-- menu de hamburgesa -->
            
            <div class="bg-hamburgesa">
                <div class="hamburgesa">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </div>

            <!-- menu de hamburgesa -->


        </nav>
        
    </header>
<!-- FINAL DEL HEADER -->