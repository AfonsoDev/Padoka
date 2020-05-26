<?php 
    require_once("functions/HFsite/HFsite.php");

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
    <body>
                <!--INICIO DO MENU-->
      <?php echo (cabecalho());?>
                <!-- FIM DO MENU -->
        <div class="itensEmDestaque">
            <section class="container">
                <div class="propaganda"></div>
                <div class="noticia"></div>
                <div class="empresa"></div>
                <div class="novidade"></div>
            </section>
        </div>
        <div class="containerEmpresa">
            <section class='container'>
                <div class='curiosidades'></div>
            </section>
        </div>
                <!-- Inicio do rodape -->
        <?php echo(rodape()); ?>
                <!-- Fim do rodapé -->
    </body>
</html>