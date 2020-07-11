<?php
if(isset($_GET['modo'])){
    if($_GET['modo'] == 'atualizar'){
        require_once('../conexao.php');
        $conex = conexaoMysql();

        if(isset($_POST['btnSalvar'])){

            $id = $_GET['id'];

            $loca = $_POST['txtloca'];
            $telefone = $_POST['txttel'];
            $google = $_POST['txtgoogle'];

            $sql="update tblLojas set localizacao = '".$loca."', telefone = '".$telefone."',googleMaps = '".$google."' where idLoja = " . $id;
            if(mysqli_query($conex, $sql))
                echo("<script> 
                        alert('registrado Atualizado com sucesso');
                        location.href='../../index.php'
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