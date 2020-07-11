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
    <script src="scripts/jquery.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <script>
            $(document).ready(function(){
                $('.iconeMobile').click(function(){
                    $('.menuMobile').fadeToggle(1000)});
                });
        </script>
    <title>Nossas Lojas</title>
</head>
    <body>
    <?php echo (cabecalho()); ?>
    <header class="containerSlider">
            <div class="container">
                <div id="containerSlide">
                    <div id="prev">&laquo;</div>
                    <div id="next">&raquo;</div>
                </div>
            </div>
        </header>
        <div class="container">
            <section class="containerlojas">
                    <div class="text-loja-h3">Nossas Lojas</div>
                    <?php
            $sql=" select tblLojas.*
                    from tblLojas";
                $selectLojas = mysqli_query($conex, $sql);

                while($rsLojas = mysqli_fetch_assoc($selectLojas)){
                    $idLoja = $rsLojas['idLoja'];
                    $loca = $rsLojas['localizacao'];
                    $tel = $rsLojas['telefone'];
                    $google = $rsLojas['googleMaps'];
        ?>
                    <div class="loja">
                        <div class="lojaImg">
                            <iframe src="<?=$google?>" class="lojaiframe" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="lojaText text-center">
                             <?=$loca?> - <?=$tel?> 
                        </div>
                        <?php
                        }
                        ?>
                    </div>

            </section>
        </div>    
        <?php echo(rodape());?>
        <script src="scripts/carrosel.js"></script>
    </body>
</html>