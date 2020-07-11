<?php
    if(isset($_GET['modo'])){
        if($_GET['modo'] == 'atualizar'){
            require_once('../conexao.php');
            $conx = conexaoMysql();
            if(isset($_POST['btnEnviar'])){
                $id = $_GET['id'];
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
                                $sql="update tblSobre set texto = '".$texto."',img = '".$foto."' where idSobre = " . $id;
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


?>