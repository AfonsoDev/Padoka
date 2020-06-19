    <?php 
    require_once("functions/HFsite/HFsite.php");
    ?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title> aula de PHP 03 </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="promocao/style.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="scripts/jquery.js"></script>
        <link rel="stylesheet" href="css/reset.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/icons/pudim.png" >
        <script>
            $(document).ready(function(){
                $('.iconeMobile').click(function(){
                    $('.menuMobile').fadeToggle(1000)});
                });
        </script>
    </head>
<body>         
    <?php echo(cabecalho());?>
         <header> 
            <div class="bg-fundo-promocao">
                <div class="bg-letra-promocao">
                
                </div>
            </div>
         </header>
         <div>
             <div class="container">
                 <div id="containerProdutoDestaque">
                        
                     <div class="produtoSecundario"></div>
                     <div id="produtoDestaque"></div>
                     <div class="produtoSecundario"></div>
                 </div>
             </div>
         </div>
         <div id="titulo"><h2 class="container h2-titulo">Promoções</h2></div>
         <div id="containerPromocaoDoDia">
             <?php echo (pmProduto());?>
             <?php echo (pmProduto());?>
         </div>
         <?php echo(rodape());?>
    </body>
</html>