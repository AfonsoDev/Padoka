<?php
    if(isset($_GET['modo'])){

        if($_GET['modo'] == 'inserir'){
            require_once('../conexao.php');

            $conex = conexaoMysql();

            if(isset($_POST['btnSalvar'])){
                $nome = $_POST['nome'];
                $rps = $_POST['checknive1'] = ( isset($_POST['checknive1']) ) ? true : 0;
                $rps1 = $_POST['checknive2'] = ( isset($_POST['checknive2']) ) ? true : 0;
                $rps2 = $_POST['checknive3'] = ( isset($_POST['checknive3']) ) ? true : 0;
                $rps3 = $_POST['checknive4'] = ( isset($_POST['checknive4']) ) ? true : 0;
                $AdmProdutos = $rps;
                $AdmConteudo = $rps1;
                $AdmFaleConosco = $rps2;
                $AdmUsuario = $rps3;
                $sql = "insert into tblNivel (nivelNome, AdmConteudo, AdmFaleConosco, AdmUsuario,AdmProduto) 
                values ('".$nome."',
                        '".$AdmConteudo."',
                        '".$AdmFaleConosco."',
                        '".$AdmUsuario."',
                        '".$AdmProdutos."')";  
                echo($sql); 
                if(mysqli_query($conex, $sql)){
                    echo("<script> 
                    alert('registrado com sucesso');
                        location.href='../../cms/index.php'
                </script>");
                }else{
                    echo("<script> 
                        alert('Erro ao cadastrar, Algum campo esta faltando, verifique e envie novamente')
                         </script>");
                }
            }
        }
    }
?>