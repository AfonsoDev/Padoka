<?php
    if(isset($_GET['modo'])){
        if($_GET['modo'] == 'atualizar'){
            require_once('../conexao.php');
            //abre a conexão com o banco de dados
            $conex = conexaoMysql();

            if(isset($_POST['btnSalvar'])){

                $id = $_GET['id'];

                $nome = $_POST['txtNome'];
                $usuario = $_POST['txtusuario'];
                $senha = $_POST['txtsenha'];
                $email = $_POST['txtemail'];
                $slcNivel = $_POST['slcnivel'];
                $sql=" update tblusuarios set 
                                            nome = '".$nome."',
                                            usuario = '".$usuario."',
                                            senha = '".$senha."',
                                            email = '".$email."',
                                            idNivel = ".$slcNivel."
                                            where idUsuario = " . $id;
                                            echo($sql);

                if(mysqli_query($conex, $sql))
                    echo("<script> 
                    alert('registrado Atualizado com sucesso');
                    </script>");
                else
                echo("
                <script> 
                    alert('Erro ao Atualizar o registro.')
                </script>
                ");



            }
        }
    }

?>