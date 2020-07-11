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
    <link rel="icon" type="imagem/png" href="img/icons/pudim.png" />
    <script src="scripts/jquery.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script>
            $(document).ready(function(){
                $('.iconeMobile').click(function(){
                    $('.menuMobile').fadeToggle(1000)});
                });
        </script>
    <title>Sobre</title>
</head>
<body>
    <?php echo (cabecalho());?>   
    <header class="containerSlider">
        <div class="container">
            <div id="containerSlide">
                <div id="prev">&laquo;</div>
                 <div id="next">&raquo;</div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <h3 class="textSobre text-center py-4">Informações Sobre</h3>

            <?php
                $sql="select tblSobre.* from tblSobre";
                $selectSobre = mysqli_query($conex, $sql);

                while($rsSobre = mysqli_fetch_assoc($selectSobre)){
                    $texto = $rsSobre['texto'];
                    $img = $rsSobre['img'];
                
            ?>

            <div class="conteudoSobre">
                <div class="imgsobre-bd">
                    <img class="imgsize" src="bd/cms/arquivo/<?=$rsSobre['img']?>" alt="">
                </div>

                <div class="textSobre">
                    <p><?=$texto?></p>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </section>
    <?php echo(rodape());?>
    <script src="scripts/carrosel.js"></script>
</body>
</html>