<?php
    if(isset($_GET['modo']))
    {
        if($_GET['modo'] == 'excluir')
        {
            require_once('conexao.php');
            $conex = conexaoMysql();

            if(isset($_GET['id']))
            {
                $id = $_GET ['id'];
                $sql = "delete from tblcontatos where idContato=".$id;
                if(mysqli_query($conex, $sql))
                    header('location:../index.php');
                
            }
        }
    }



?>