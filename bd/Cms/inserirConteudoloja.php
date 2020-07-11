<?php
         if(isset($_GET['modo'])){

          if($_GET['modo'] == 'inserir'){
              require_once('../conexao.php');  
              $conex = conexaoMysql();

              if(isset($_POST['btnSalvar'])){

                  $loca = $_POST['txtloca'];
                  $telefone = $_POST['txttel'];
                  $google = $_POST['txtgoogle'];
                  $sql = "insert into tblLojas 
                  (localizacao, 
                  telefone, 
                  googleMaps) 
                  values (
                    '".$loca."',
                    '".$telefone."',
                    '".$google."'
                  )";
                  if(mysqli_query($conex, $sql)){
                    echo("<script> 
                    alert('registrado com sucesso');
                        location.href='../../cms/index.php'
                </script>");
                }else{
                    echo("<script> 
                        alert('Erro ao cadastrar, Algum campo esta faltando, verifique e envie novamente')
                         </script>");
                }
              }
          }
      }
?>