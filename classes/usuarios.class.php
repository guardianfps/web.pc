<?php 
    class Usuarios {
     
        public function cadastrar($nome, $email, $senha, $cpf, $telefone) {
            global $pdo; 
            $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
            $sql->bindValue(":email", $email);
            $sql->execute();
            
            if($sql->rowCount() == 0) {
                
                $sql = $pdo->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha, cpf = :cpf, telefone = :telefone");
                $sql->bindValue(":nome", $nome);
                $sql->bindValue(":email", $email);
                $sql->bindValue(":senha", md5($senha));
                $sql->bindValue(":cpf", $cpf);
                $sql->bindValue(":telefone", $telefone);
                $sql->execute();
                
                return true;
                
            } else {
                return false;
            }
            
        }
        
        public function login($email, $senha) {
            
            global $pdo;
            
            $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email and senha = :senha");
            
            $sql->bindValue(":email", $email);
            $sql->bindValue(":senha", md5($senha));
            $sql->execute();
            
            if($sql->rowCount() > 0) {
                $dado = $sql->fetch();
                $_SESSION['clogin'] = $dado ['id'];
                return true;
            }else {
                return false;
            }
            
        }
        
    }
?>