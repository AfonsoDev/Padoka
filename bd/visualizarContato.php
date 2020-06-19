<?php
    if(isset($_POST['modo'])){
        if($_POST['modo'] == 'visualizar'){
            if(isset($_POST['id'])){
                $id = $_POST['id'];
                require_once('conexao.php');
                $conex = conexaoMysql();

                $sql="select tblcontatos.*, tblsugestaocritica.opcao, tblsugestaocritica.sigla
                    from tblcontatos, tblsugestaocritica
                    where tblsugestaocritica.idsugestaocritica = tblcontatos.idsugestaocritica
                    and tblcontatos.idcontato = " .$id;
                 $selectContato = mysqli_query($conex,$sql);

                 if($rsContatos = mysqli_fetch_assoc($selectContato)){
                    $nome = $rsContatos['nome'];
                    $telefone = $rsContatos['telefone'];
                    $celular = $rsContatos['celular'];
                    $email = $rsContatos['email'];
                    $homepage = $rsContatos['homePage'];
                    $facebook = $rsContatos['facebook'];
                    $sexo = $rsContatos['sexo'];
                    $obs = $rsContatos['obs'];
                    $profissao = $rsContatos['profissao'];
                    $idSugestaoCritica = $rsContatos['idSugestaoCritica'];
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
    <title>Visualizar Contato</title>
</head>
<script src="../script/jquery.js"></script>
<script>
 $(document).ready(function(){
            $('#close').click(function(){
                $('#modal').fadeOut(1000);
            });
        });
</script>
<style>
#visuazlizar{
    width:1000px;
    height:800px;
    border:solid 1px black;
    margin-left:auto;
    margin-right:auto;
}
#visuazlizar table{
    width:inherit;
    height:inherit;
}
#visuazlizar table tr{
    height:20px;
}
#visuazlizar table tr td{
    width: 50%;
    border: solid 1px black;
}
.titlevisu{
    text-align: center;
    background-color: royalblue;
    font-size: larger;
    font-family: Arial, Helvetica, sans-serif;
}

</style>
<body>
    <div id="visuazlizar">
        <a href="#" id="close" class="">Fechar</a>
        <table>
        <tr>
            <td colspan="2" class="titlevisu">Contatos</td>
        </tr>
            <tr>
                <td>NOME: </td>
                <td><?=$nome?></td>
            </tr>
            <tr>
                <td>TELEFONE: </td>
                <td><?=$telefone?></td>
            </tr>
            <tr>
                <td>CELULAR: </td>
                <td><?=$celular?></td>
            </tr>
            <tr>
                <td>E-MAIL: </td>
                <td><?=$email?></td>
            </tr>
            <tr>
                <td>HOMEPAGE: </td>
                <td><?=$homepage?></td>
            </tr>
            <tr>
                <td>LINK-FACEBOOK: </td>
                <td><?=$facebook?></td>
            </tr>
            <tr>
                <td>Opção: </td>
                <td><?=$idSugestaoCritica?></td>
            </tr>
            <tr>
                <td>OBS: </td>
                <td><?=$obs?></td>
            </tr>
            <tr>
                <td>Sexo: </td>
                <td><?=$sexo?></td>
            </tr>
            <tr>
                <td>Profissão: </td>
                <td><?=$profissao?></td>
            </tr>
        </div>
    </table>
</body>
</html>