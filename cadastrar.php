<?php require'pages/header.php'; ?>
<div class="container">
<?php 
    require 'classes/usuarios.class.php';
    $u = new Usuarios();
    if(isset($_POST['nome']) && !empty($_POST['nome'])) {
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $senha = $_POST['senha'];
        $cpf = addslashes($_POST['cpf']);
        $telefone = addslashes($_POST['telefone']);
        
        if(!empty($nome) && !empty($email) && !empty($senha) && !empty($cpf) && !empty($telefone)) {
            if($u->cadastrar($nome, $email, $senha, $cpf, $telefone)) {
                ?>
    <div class="content-box">
    <div class="boxblue-alert">
    Cadastrado com sucesso <a href="login.php"><b style="color: #563d7c;">Logar agora !</b></a>
    </div>
    </div>
    <?php
            } else {
                ?>
    <div class="content-box">
    <div class="boxred-alert">
    Este usuario já exite!
    </div>
    </div>
    <?php
                
            }
        } else {
            ?>
    <div class="content-box">
    <div class="boxred-alert">
    Preencha todos os campos!
    </div>
    </div>
    <?php
        }
    }
    ?>
<section class="content-section animated flipInX">
<h2 class="h2-section" style="color: #563d7c;">Cadastre-se agora e <span class="h2-section-bold">Anuncie !</span></h2>
</section>
<div class="container-main-cadastro animated jackInTheBox">
<form method="POST">
<input type="text" name="nome" id="nome" placeholder="Nome Completo"/><br /><br />
<input type="email" name="email" id="email" placeholder="Email"/><br /><br />
<input type="password" name="senha" id="senha" placeholder="Senha"/><br /><br />
<input type="text" name="cpf" id="cpf" placeholder="Cpf"/><br /><br />
<input type="text" name="telefone" id="telefone" placeholder="Telefone"/><br /><br />
<input class="btn-submit" type="submit" value="cadastrar"/>
</form>
</div>
</div>
<?php require'pages/footer.php'; ?>