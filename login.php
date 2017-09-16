<?php require'pages/header.php'; ?>
<div class="container">
<?php 
    require 'classes/usuarios.class.php';
    $u = new Usuarios();
    if(isset($_POST['email']) && !empty($_POST['email'])) {
        $email = addslashes($_POST['email']);
        $senha = $_POST['senha'];
      
        if($u->login($email, $senha)) {
            ?>
    <script type="text/javascript">window.location.href="./";</script>
    
    <?php
        }else {
            ?>
    <div class="content-box">
    <div class="boxred-alert">
    Ops. Email ou senha incorreto !
    </div>
    </div>
    <?php
        }
    }
    ?>
<section class="content-section animated flipInX">
<h2 class="h2-section" style="color: #563d7c;">Login / <span class="h2-section-bold">Agenda Cambuí</span></h2>
</section>
<div class="container-main-form animated jackInTheBox">      
<form method="POST">
<input type="email" name="email" id="email" placeholder="Email" required/><br /><br />
<input type="password" name="senha" id="senha" placeholder="Senha" required/><br /><br />
<input class="btn-submit" type="submit" value="Entrar"/>
</form>
<a href="cadastrar.php"><button class="btn-submit" >Cadastre-se</button></a>
    
</div>
</div>
<?php require'pages/footer.php'; ?>