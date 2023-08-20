<?php
    class Usuario 
    {
        private $pdo;
        public $msgErro = "";
        public function conectar($nome, $host, $usario, $senha)
        {
            global $pdo;
            try
            {
                $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usario,$senha);
            }   catch (PDOException $e) {
                $msgErro = $e->getMessage();
            }
            
        }
        public function cadastrar($nome, $email, $cpf, $senha)
        {
            global $pdo;
            // verificar se já existe o email cadastrado
            $sql = $pdo->prepare("SELECT id_usuario FROM usuarios where email = :e");
            $sql->bindValue(":e",$email);
            $sql->execute();
            if ($sql->rowCount() > 0) {
                return false; // já está cadastrado
            }
            else {
                // caso nao, Cadastrar
                $sql = $pdo->prepare("INSERT INTO usuario(nome,email,cpf,senha) VALUES (:n, :e, :c, :s)");
                $sql->bindValue(":n",$nome);
                $sql->bindValue(":e",$email);
                $sql->bindValue(":c",md5($cpf));
                $sql->bindValue(":s",md5($senha));
                $sql->execute();
                return true;
            }

            
        }
        public function logar($email, $senha)
        {
            global $pdo;
            // Verificar se o email e senha estão cadastrado
            $sql = $pdo->prepare("SELECT id_usuario from usuarios where email = :e and senha = :s");
            $sql->bindValue(":e",$email);
            $sql->bindValue(":s",$senha);
            $sql->execute();
            if ($sql->rowCount() > 0) {
                // Entrar no sistema (sessao);
                $dados = $sql->fetch();
                session_start();
                $_SESSION['id_usuario'] = $dados['id_usuario'];
                return true; // logado com sucesso   
            }
            else{
                return false;
            }
            
        }
    }
    
?>