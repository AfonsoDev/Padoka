<?php

   require_once('../bd/conexao.php');
   $conex = conexaoMysql();


   if(isset($_POST['btnEnviar'])){

    $nome = $_POST['txtName'];
    $telefone = $_POST['txtTelefone'];
    $celular = $_POST['txtCelular'];
    $email = $_POST['txtEmail'];
    $homepage = $_POST['txtHomePage'];
    $facebook = $_POST['txtFacebook'];
    $sexo = $_POST['radiosexo'];
    $obs = $_POST['txtObs'];
    $profissao = $_POST['txtProfissao'];
    $idSugestaoCritica = $_POST['slcSugestaoCritica'];

    $sql = "insert into tblcontatos (nome,
                                    telefone,
                                    celular,
                                    email,
                                    homePage,
                                    facebook,
                                    idSugestaoCritica,
                                    obs,
                                    sexo,
                                    profissao
                                    )
                                    values 
                                    (
                                        '".$nome."','".$telefone."','".$celular."','".$email."','".$homepage."',
                                        '".$facebook."',".$idSugestaoCritica.", '".$obs."','".$sexo."','".$profissao."'

                                    )
                                    
                                    
                                    ";
                                echo($sql);
                                 if(mysqli_query($conex, $sql))
                                 {
                                     echo("<script> alert('registrado!')</script>");
                                 }else{
                                     echo("<script> alert('Erro!')</script>");
                                 }

                                



   }
  
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Padoka | Entre em contato </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="shortcut icon" href="../img/icons/pudim.png" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
<!--     -----------   HEADER  -------------     -->
 
        
        
<!-- --------       Extrutura body ----------------->
    
        <div class="contato_frm">
            <form class="" name="frm_Contato" action="#" method="post" autocomplete="off">
                <input type="text" class="input" placeholder="Nome" name="txtName" autocomplete="off" required data-js="name">
                    <div>
                         <input type="tel"  autocomplete="off" class="input" placeholder="Telefone" name="txtTelefone" required  data-js="telefone">
                            <div>
                                <input type="tel" class="input" placeholder="Celular" name="txtCelular" required  data-js="celular">
                                 <div>
                                <input type="email" class="input" placeholder="Email" name="txtEmail" required autocomplete="off">
                                     <div>
                                         <input type="url" class="input" placeholder="Home Page" name="txtHomePage"  required>
                                         
                                         <div>
                                            <input type="url" class="input" placeholder="Link Facebook" name="txtFacebook" autocomplete="off" required>
                                               <div class="">
                                                    <select class="select_form" name="slcSugestaoCritica">
                                                        <option value="0" selected disabled>Selecione uma opção</option>
                                                        <?php
                                                            $sql = "select * from tblsugestaocritica order by opcao";
                                                                
                                                           $selectSugestaoCritica =  mysqli_query($conex, $sql);
                                                           
                                                           while($rsSugestaoCritica = mysqli_fetch_assoc($selectSugestaoCritica))
                                                           {
                                                           ?>
                                                           
                                                                <option value="<?=$rsSugestaoCritica['idSugestaoCritica']?>"><?=$rsSugestaoCritica['opcao']?></option>
                                                           <?php
                                                           }
                                                           ?>
                                                    </select>    
                                               </div>
                                               <div class="obsBox">
                                                                <textarea autocomplete="off" class="obstxt" name="txtObs" cols="50" rows="7"></textarea>
                                                            </div>
                                             
                                             <div class="text-center">
                                                <span class="texteditone">Sexo :</span>   
                                                <input class="radio texteditone" name="radiosexo" value="F" type="radio"> Feminino
                                                 <input class="radio texteditone" name="radiosexo" value="M" type="radio"> Masculino
                                                 
                                                 <div>
                                                    <input type="text" value="" name="txtProfissao" required class="input" placeholder="Profissão" autocomplete="off">
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                </div>
                            </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-md mt-1 text-primaria" name="btnEnviar" value="ENVIAR">
                            <div class='back'>
                                <a href="../index.php" class='back'>Voltar</a>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
        
        
        
<!--    -----------    Footer ------------------- -->
       <script src="../scripts/mascaras.js"></script>
    </body>
</html>