<?php 
    require_once("functions/HFsite/HFsite.php");
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
                    <div class="loja">
                        <div class="lojaImg">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.9979962949033!2d-46.85537938447688!3d-23.49658166508956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf023b22cf86e7%3A0x6df73abd41df9558!2sCentro%20Comercial%20Alphaville!5e0!3m2!1spt-BR!2sbr!4v1584453251623!5m2!1spt-BR!2sbr" width="100%" height="200px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="lojaText text-center">
                            <h4> LOCALIZAÇÃO / TELEFONE</h4>
                        </div>
                    </div>
                    <div class="loja">
                        <div class="lojaImg">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.9979962949033!2d-46.85537938447688!3d-23.49658166508956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf023b22cf86e7%3A0x6df73abd41df9558!2sCentro%20Comercial%20Alphaville!5e0!3m2!1spt-BR!2sbr!4v1584453251623!5m2!1spt-BR!2sbr" width="100%" height="200px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="lojaText text-center">
                            <h4> LOCALIZAÇÃO / TELEFONE </h4>
                        </div>
                    </div>
            </section>
        </div>    
        <?php echo(rodape());?>
        <script src="scripts/carrosel.js"></script>
    </body>
</html>