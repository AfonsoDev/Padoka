<?php
    if(isset($_POST['modo'])){
        if($_POST['modo'] == 'visualizar'){
            if(isset($_POST['id'])){
                $id = $_POST['id'];

             require_once('../conexao.php');
              $conex = conexaoMysql();

              $sql="select tblUsuarios.*, tblNivel.nivelNome, tblNivel.idNivel
                    from 
                    tblUsuarios, 
                    tblNivel
                    where 
                    tblNivel.idNivel = tblUsuarios.idNivel and tblUsuarios.idusuario = ".$id;

                $selectUsuarios = mysqli_query($conex, $sql);

                if($rsUsuariosnivel = mysqli_fetch_assoc($selectUsuarios)){
                    $nome = $rsUsuariosnivel['nome'];
                    $usuario = $rsUsuariosnivel['usuario'];
                    $senha = $rsUsuariosnivel['senha'];
                    $email = $rsUsuariosnivel['email'];
                    $nomenivel = $rsUsuariosnivel['nivelNome'];
                }
            }
        }
    }


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../cms/css/table.css">
    <title>Modal</title>
</head>
<body>
   <div id="visualizar">
   <div class="table-container">
        <table class="table-basic">
            <tr>
                <th>Nome</th>
                <th>Usuario</th>
                <th>Senha</th>
                <th>E-mail</th>
                <th>nivel</th>
            </tr>
            <tr>
                <td><?=$rsUsuariosnivel['nome']?></td>
                <td><?=$rsUsuariosnivel['usuario']?></td>
                <td><?=$rsUsuariosnivel['senha']?></td>
                <td><?=$rsUsuariosnivel['email']?></td>
                <td><?=$rsUsuariosnivel['nivelNome']?></td>
            </tr>
        </table>
    </div>
   </div>
</body>
</html>