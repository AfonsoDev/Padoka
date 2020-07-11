<?php
    if(isset($_POST['modo'])){
        if($_POST['modo'] == 'visualizar'){
            if(isset($_POST['id'])){
                $id = $_POST['id'];
                require_once('../conexao.php');
                $conex = conexaoMysql();
                
                $sql="select tblLojas.* from tblLojas where tblLojas.idLoja = " . $id;

                $selectLoja = mysqli_query($conex, $sql);
                if($rsLojasVisualizar = mysqli_fetch_assoc($selectLoja)){
                    $loca = $rsLojasVisualizar['localizacao'];
                    $telefone = $rsLojasVisualizar['telefone'];
                    $google = $rsLojasVisualizar['googleMaps'];
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
                <th>localizacao</th>
                <th>Telefone</th>
                <th>googleMaps</th>
            </tr>
            <tr>
                <td><?=$loca?></td>
                <td><?=$telefone?></td>
                <td><?=$google?></td>
            </tr>
        </table>
    </div>
   </div>
</body>
</html>