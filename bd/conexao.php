<?php

    function conexaoMysql(){
        $server = 'localhost';
        $user = 'root';
        $senha='bcd147';
        $database='dbcontatos';

        $conexao = mysqli_connect($server,$user,$senha,$database);
        return $conexao;
    }
?>