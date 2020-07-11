<?php 
    require_once("functions/HFsite/HFsite.php");
    require_once('bd/conexao.php');
    $conex = conexaoMysql();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <script src="scripts/jquery.js"></script>
    <link rel="icon" type="imagem/png" href="img/icons/pudim.png" />
    <script>
            $(document).ready(function(){
                $('.iconeMobile').click(function(){
                    $('.menuMobile').fadeToggle(1000)});
                });
        </script>
    <title>Curiosidade</title>
</head>
<style>
</style>
    <body>
                <!--INICIO DO MENU-->
      <?php echo (cabecalho());?>
                <!-- FIM DO MENU -->
        <div class="itensEmDestaque">
            <?php
                $sql="select tblCuriosidade.* from tblCuriosidade";
                $selectCuriosidade = mysqli_query($conex,$sql);
                if($rsListCuriosidade = mysqli_fetch_assoc($selectCuriosidade)){
                    $texto = $rsListCuriosidade['texto'];
                    $img1 = $rsListCuriosidade['imagemPrincipal'];
                    $img2 = $rsListCuriosidade['imagemSegundario'];
                    $img3 = $rsListCuriosidade['imagemTerceiro'];
                }
            ?>
            <div class="container">
                <div class="propaganda"></div>
                <div class="noticia">
                    <img class="imgwarpoper" src="bd/cms/arquivo/<?=$img1?>" alt="">
                </div>
                <div class="empresa">
                    <img class="" src="bd/cms/arquivo/<?=$img2?>" alt="">
                </div>
                <div class="novidade">
                    <img class="" src="bd/cms/arquivo/<?=$img3?>" alt="">
                </div>
            </div>
        </div>
        <div class="containerEmpresa">
            <div class='container'>
                <div class='curiosidades'><?=$texto?></div>
            </div>
        </div>
                <!-- Inicio do rodape -->
        <?php echo(rodape()); ?>
                <!-- Fim do rodapé -->
    </body>
</html>