<?php
    if(isset($_GET['modo'])){
        if($_GET['modo'] == 'atualizar'){
            require_once('../conexao.php');
            $conex = conexaoMysql();

            if(isset($_POST['btnSalvar'])){

                $id = $_GET['id'];

                $nomenivel = $_POST['nome'];

                $rps = $_POST['checknive1'] = ( isset($_POST['checknive1']) ) ? true : 0;
                $rps1 = $_POST['checknive2'] = ( isset($_POST['checknive2']) ) ? true : 0;
                $rps2 = $_POST['checknive3'] = ( isset($_POST['checknive3']) ) ? true : 0;
                $rps3 = $_POST['checknive4'] = ( isset($_POST['checknive4']) ) ? true : 0;
                $AdmProdutos = $rps;
                $AdmConteudo = $rps1;
                $AdmFaleConosco = $rps2;
                $AdmUsuario = $rps3;

                $sql = "update tblnivel set 
                                        nivelNome = '".$nomenivel."',
                                        AdmConteudo = ".$AdmConteudo.",
                                        AdmFaleConosco = ".$AdmFaleConosco.",
                                        AdmUsuario = ".$AdmUsuario.",
                                        AdmProduto = ".$AdmProdutos."
                                        where idNivel = " . $id;
                                        echo($sql);

                if(mysqli_query($conex, $sql))
                    echo("<script> 
                            alert('registrado Atualizado com sucesso');
                        </script>"
                );
                else
                    echo("<script> 
                        alert('Erro ao Atualizar o registro.')
                        </script>");
            }
        }
    }

?>