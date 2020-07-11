<?php
    if(isset($_GET['modo'])){
        if($_GET['modo'] == 'excluir'){
            require_once('../conexao.php');
            $conex = conexaoMysql();
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $sql="delete from tblSobre where idSobre = " . $id;

                if(mysqli_query($conex, $sql)){
                unlink('arquivo/'.$_GET['img']);
                header('location:../../cms/index.php');
                }
            }
        }
    }


?>