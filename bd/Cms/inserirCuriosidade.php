<?php
    if(isset($_GET['modo'])){
        if($_GET['modo'] == 'inserir'){
            require_once('../conexao.php');
            $conex = conexaoMysql();
            if(isset($_POST['btnEnviar'])){
                $texto = $_POST['txttexto'];

                if($_FILES['txtfile1']['size'] > 0 && $_FILES['txtfile2']['type'] != "" && $_FILES['txtfile2']['size'] > 0 && $_FILES['txtfile2']['type'] != "" && $_FILES['txtfile3']['size'] > 0 && $_FILES['txtfile3']['type'] != ""){
                    $diretorioArquivo= "arquivo/";

                    $arquivoSize = round($_FILES['txtfile1']['size']/1024);
                    $arquivoSize2 = round($_FILES['txtfile2']['size']/1024);
                    $arquivoSize3 = round($_FILES['txtfile3']['size']/1024);

                    $arquivoPermetidos = array("image/jpeg", "image/jpg", "image/png", "image/gif");

                    $arquivoType = $_FILES['txtfile1']['type'];
                    $arquivoType2 = $_FILES['txtfile2']['type'];
                    $arquivoType3 = $_FILES['txtfile3']['type'];

                    if(in_array($arquivoType,$arquivoPermetidos)){
                        if(in_array($arquivoType2,$arquivoPermetidos)){
                            if(in_array($arquivoType3,$arquivoPermetidos)){
                                if($arquivoSize <= 2000 && $arquivoSize2 <= 2000 && $arquivoSize3 <= 2000){

                                    $nomeArquivo = pathinfo($_FILES['txtfile1']['name'], PATHINFO_FILENAME);
                                    $nomeArquivo2 = pathinfo($_FILES['txtfile2']['name'], PATHINFO_FILENAME);
                                    $nomeArquivo3 = pathinfo($_FILES['txtfile3']['name'], PATHINFO_FILENAME);
        
                                    $entensaoArquivo = pathinfo($_FILES['txtfile1']['name'],PATHINFO_EXTENSION);
                                    $entensaoArquivo2 = pathinfo($_FILES['txtfile2']['name'],PATHINFO_EXTENSION);
                                    $entensaoArquivo3 = pathinfo($_FILES['txtfile3']['name'],PATHINFO_EXTENSION);
        
                                    $nomeArquivoCrypto = md5($nomeArquivo . uniqid(time()));
                                    $nomeArquivoCrypto2 = md5($nomeArquivo2 . uniqid(time()));
                                    $nomeArquivoCrypto3 = md5($nomeArquivo3 . uniqid(time()));
        
                                    $foto = $nomeArquivoCrypto . "." . $entensaoArquivo;
                                    $foto2 = $nomeArquivoCrypto2 . "." . $entensaoArquivo2;
                                    $foto3 = $nomeArquivoCrypto3 . "." . $entensaoArquivo3;
        
                                    $arquivoTemp = $_FILES['txtfile1']['tmp_name'];
                                    $arquivoTemp2 = $_FILES['txtfile2']['tmp_name'];
                                    $arquivoTemp3 = $_FILES['txtfile3']['tmp_name'];
        
                                    if(move_uploaded_file($arquivoTemp, $diretorioArquivo.$foto)){
                                        if(move_uploaded_file($arquivoTemp2, $diretorioArquivo.$foto2)){
                                            if(move_uploaded_file($arquivoTemp3, $diretorioArquivo.$foto3)){
                                                $sql="insert into tblCuriosidade (imagemPrincipal,imagemSegundario,imagemTerceiro,texto) values('".$foto."','".$foto2."','".$foto3."','".$texto."')";
            
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
                                        }
                                    }
                                    else{
                                        echo("Ops, Erro, arquivo não enviado");
                                    }
                                }
                                else{
                                    echo("TAMANHO DE ARQUIVO MAIOR QUE O PERMITIDO, PORFAVOR ARQUIVOS ATÉ 2MB");
                                }
                            }
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