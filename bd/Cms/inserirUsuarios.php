<?php
    if(isset($_GET['modo'])){
        if($_GET['modo']== 'inserir'){
        //importe da biblioteca de conexão
        require_once('../conexao.php');
        //abre a conexão com o banco de dados
        $conex = conexaoMysql();
            if(isset($_POST['btnSalvar'])){
                $nome = $_POST['txtNome'];
                $usuario = $_POST['txtusuario'];
                $senha = $_POST['txtsenha'];
                $email = $_POST['txtemail'];
                $slcNivel = $_POST['slcnivel'];
                $sql="insert into tblusuarios (idNivel,
                                                nome,
                                                usuario,
                                                senha,
                                                email) 
                                                values
                                                (
                                                ".$slcNivel.",'".$nome."','".$usuario."','".$senha."','".$email."'
                                                )";
                                               
                                                if(mysqli_query($conex, $sql))
                                            echo("<script> 
                                                        alert('registrado com sucesso');
                                                            location.href='index.php'
                                                    </script>"
                                                );
                                            else
                                                echo("
                                                <script> 
                                                    alert('Erro ao cadastrar, Algum campo esta faltando, verifique e envie novamente')
                                                    </script>
                                                ");
            }
        }
    }
?>