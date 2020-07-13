<?php
    if(isset($_GET['modo'])){
        if($_GET['modo'] == 'atualizar'){
            require_once('../conexao.php');
            $conx = conexaoMysql();
            if(isset($_POST['btnEnviar'])){
                $id = $_GET['id'];
                $texto = $_POST['txttexto'];

                if($_FILES['txtfile1']['size'] > 0 && $_FILES['txtfile1']['type'] != ""){
                    if($_FILES['txtfile2']['size'] > 0 && $_FILES['txtfile2']['type'] != ""){
                        if($_FILES['txtfile3']['size'] > 0 && $_FILES['txtfile3']['type'] != ""){
                            $diretorioArquivo= "arquivo/";

                            $arquivoSize = round($_FILES['txtfile1']['size']/1024);
                            $arquivoSize2 = round($_FILES['txtfile2']['size']/1024);
                            $arquivoSize3 = round($_FILES['txtfile3']['size']/1024);
        
                            $arquivoPermetidos = array("image/jpeg", "image/jpg", "image/png", "image/gif");
                            $arquivoPermetidos2 = array("image/jpeg", "image/jpg", "image/png", "image/gif");
                            $arquivoPermetidos3 = array("image/jpeg", "image/jpg", "image/png", "image/gif");
        
                            $arquivoType = $_FILES['txtfile1']['type'];
                            $arquivoType2 = $_FILES['txtfile2']['type'];
                            $arquivoType3 = $_FILES['txtfile3']['type'];
        
                            if(in_array($arquivoType,$arquivoPermetidos)){
                                if(in_array($arquivoType2,$arquivoPermetidos2)){
                                    if(in_array($arquivoType3,$arquivoPermetidos3)){
                                        if($arquivoSize <= 2000){
                                            $nomeArquivo = pathinfo($_FILES['txtfile1']['name'], PATHINFO_FILENAME);
                                            $nomeArquivo2 = pathinfo($_FILES['txtfile2']['name'], PATHINFO_FILENAME);
                                            $nomeArquivo3 = pathinfo($_FILES['txtfile3']['name'], PATHINFO_FILENAME);
        
                                            $entensaoArquivo = pathinfo($_FILES['txtfile1']['name'],PATHINFO_EXTENSION);
                                            $entensaoArquivo2 = pathinfo($_FILES['txtfile2']['name'],PATHINFO_EXTENSION);
                                            $entensaoArquivo3 = pathinfo($_FILES['txtfile3']['name'],PATHINFO_EXTENSION);
        
                                            $nomeArquivoCrypto = md5($nomeArquivo . uniqid(time()));
                                            $nomeArquivoCrypto2 = md5($nomeArquivo . uniqid(time()));
                                            $nomeArquivoCrypto3 = md5($nomeArquivo . uniqid(time()));
        
                                            $foto = $nomeArquivoCrypto . "." . $entensaoArquivo;
                                            $foto2 = $nomeArquivoCrypto . "." . $entensaoArquivo;
                                            $foto3 = $nomeArquivoCrypto . "." . $entensaoArquivo;
        
                                            $arquivoTemp = $_FILES['txtfile1']['tmp_name'];
                                            $arquivoTemp2 = $_FILES['txtfile2']['tmp_name'];
                                            $arquivoTemp3 = $_FILES['txtfile3']['tmp_name'];
        
                                            if(move_uploaded_file($arquivoTemp, $diretorioArquivo.$foto)){
                                                if(move_uploaded_file($arquivoTemp2, $diretorioArquivo.$foto2)){
                                                    if(move_uploaded_file($arquivoTemp3, $diretorioArquivo.$foto3)){
                                                        $sql="update tblCuriosidade set imagemPrincipal = '".$foto."',imagemSegundario = '".$foto2."', imagemTerceiro = '".$foto3."', texto = '".$texto."' where idCuriosidade = " . $id;
                                                        echo($sql);
                                                        if(mysqli_query($conx, $sql))
                                                        echo("<script> 
                                                                    alert('registrado Atualizado com sucesso');
                                                                </script>"
                                                            );
                                                        
                                                    else
                                                        echo("
                                                        <script> 
                                                            alert('Erro ao Atualizar o registro.')
                                    
                                                        </script>
                                                        ");  
                                                    }
                                                }
                        
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }

            }

        }
    }


?>