<?php
    if(isset($_GET['modo'])){
        if($_GET['modo'] == 'inserir'){
            require_once('../conexao.php');
            $conex = conexaoMysql();

            if(isset($_POST['btnEnviar'])){
              $texto = $_POST['txttexto'];
              if($_FILES['txtfile']['size'] > 0 && $_FILES['txtfile']['type'] != ""){
                $diretorioArquivo= "arquivo/";
                $arquivoSize = round($_FILES['txtfile']['size']/1024);
                $arquivoPermetidos = array("image/jpeg", "image/jpg", "image/png", "image/gif");
                $arquivoType = $_FILES['txtfile']['type'];
                if(in_array($arquivoType,$arquivoPermetidos)){
                    if($arquivoSize <= 2000){
                        $nomeArquivo = pathinfo($_FILES['txtfile']['name'], PATHINFO_FILENAME);
                        $entensaoArquivo = pathinfo($_FILES['txtfile']['name'],PATHINFO_EXTENSION);
                        $nomeArquivoCrypto = md5($nomeArquivo . uniqid(time()));
                        $foto = $nomeArquivoCrypto . "." . $entensaoArquivo;
                        $arquivoTemp = $_FILES['txtfile']['tmp_name'];
                        if(move_uploaded_file($arquivoTemp, $diretorioArquivo.$foto)){
                            $sql="insert into tblSobre (texto,img) values('".$texto."','".$foto."')";

                        if(mysqli_query($conex, $sql))
                            echo("<script> 
                                    alert('registrado com sucesso');
                                    location.href='../../cms/index.php'
                                </script>");
                            
                        else
                            echo("<script> 
                                    alert('Erro ao cadastrar, Algum campo esta faltando, verifique e envie novamente')
                                    window.history.back();
                                </script>");
                            
                        }
                        else{
                            echo("Ops, Erro, arquivo não enviado");
                        }
                    }
                    else{
                        echo("TAMANHO DE ARQUIVO MAIOR QUE O PERMITIDO, PORFAVOR ARQUIVOS ATÉ 2MB");
                    }
                }
                else{
                    echo("extensão de arquivo selecionado não é permitido, TIPO DE ARQUIVO NÃO VALIDO");
                }
              }
              else{
                echo("Arquivo invalido na escolha da imagem");
              }
               
            }
        }
    }

?>