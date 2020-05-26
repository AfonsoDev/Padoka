<!-----------------PHP CODIGO -------------->
<?php 

require_once("functions/HFsite/HFsite.php");

?>
<!-----------------HTML CODIGO -------------->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="shortcut icon" href="img/icons/pudim.png" >
        <script src="scripts/jquery.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
            $(document).ready(function(){
                $('.iconeMobile').click(function(){
                    $('.menuMobile').fadeToggle(1000)});
                });
        </script>
        
        <title> Index Hill Valley </title>
        
    </head>
    
<body>
<!--        Menu           -->
    <?php echo(cabecalho());?>
        <header class="containerSlider">
            <div class="container">
                <div id="containerSlide">
                    <div id="prev">&laquo;</div>
                    <div id="next">&raquo;</div>
                </div>
            </div>
        </header>
        <?php echo(menuleft());?>
            <section class="container">
                <div class="rightContainer">
                    <?php echo(divProdutoPao());?>
                    <?php echo(divProdutoPao());?>
                    <?php echo(divProdutoPao());?>
                    <?php echo(divProdutoPao());?>
                    <?php echo(divProdutoPao());?>
                    <?php echo(divProdutoPao());?>
                    <?php echo(divProdutoPao());?>
                    <?php echo(divProdutoPao());?>
                    <?php echo(divProdutoPao());?>
                      
                </div>
                <div>
                    <?php echo(redesSociais());?>
                </div>
            </section>
        <?php echo(rodape());  ?>

        <div class="modal-bg">
            <div class="modal">
                <h2>Ensira seus dados</h2>
                <form method='POST' class='' name=''>  
                    <div class=''>
                        <div class='form-group'>
                            <div>
                                <label>Usuario:</label>
                            </div>
                        <input type='text' name='' class='inputedit' placeholder='Usuario'>
                    </div>
                    <div class='form-group'>
                        <div>
                            <label>Senha:</label>
                        </div>
                            <input type='password' name='' class='inputedit' placeholder='Senha'>
                    </div>
                            <input type='submit' value='Ok' class='btn_Entrar'>
                    </div>
                </form>
                <span class="modal-close">X</span>
                
            </div>
        </div>
      
        <script src="scripts/modal.js"></script>
        <script src="scripts/carrosel.js"></script>
    </body>
</html>