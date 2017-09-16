<?php require'config.php'; ?>
<html>
<head>
    <title>Agenda Cambuí | Torna tudo melhor !</title>
    <link rel="icon" href="assets/img/favicon-16x16.png" />
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/inputcss.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css"/>
    <!--START LINK GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed:300,400|Roboto+Condensed:300i,400|Exo+2:300,400" rel="stylesheet">
    <!--FINISH LINK GOOGLE FONTS-->
    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</head>
<body>
<div class="menu-toggle-mobile">
<div class="logo-menu-toggle"><img src="assets/img/logo-menu.png"/></div>  
<div class="button-toggle-mobile" onclick="toggleMenu()">
<img src="assets/img/icon_menu_toggle.png"/>
</div>
</div>
<nav class="menu">
<div class="menu-int">
<ul id="menu" class="animated flipInX">
    <li class="logo-desktop"><a href="index.php"><img class="logo-menu-descktop" src="assets/img/logo-menu.png"</a></li>
    <a href="index.php"><li>Inicio</li></a>
    <a href="contato.php"><li>Contato</li></a>
    <a href="emergencia.php"><li>Telefones de Emergências</li></a>
    <a href="onibus.php"><li>Horários de Ônibus</li></a>
    <a href="emprego.php"><li>Vagas de Empregos</li></a>
    <?php if(isset($_SESSION['clogin']) && !empty($_SESSION['clogin'])): ?>
    <a href="anunciar.php"><li class="btn-anunciar-agora">Anunciar agora</li></a>
    <a href="sair.php"><li>Sair</li></a>
    <?php else: ?>
    <li class="menu-int-button" style="float: right !important;"><a href="login.php"><button>1 MÊS GRÁTIS</button></a></li>
    <?php endif; ?>
</ul>
</div>    
</nav>