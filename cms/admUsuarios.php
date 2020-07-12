<!-- addslashes comando para tratar as aspas simples -->
<?php
require_once('function.php');

$idNivel = 0;
$nome = null;
$usuario = null;
$email = null;
$senha = null;



$action = "../bd/Cms/inserirUsuarios.php?modo=inserir";
    require_once('../bd/conexao.php');
    $conex = conexaoMysql();

    if(isset($_GET['modo'])){
        if($_GET['modo'] == 'consultaEditar'){
            if(isset($_GET['id'])){
                $id = $_GET['id'];

                $sql="select tblusuarios.*,
                      tblnivel.nivelnome
                      from 
                      tblUsuarios,
                      tblNivel
                      where
                      tblNivel.idnivel = tblUsuarios.idNivel and tblUsuarios.idusuario =".$id;

                      $selectDados = mysqli_query($conex, $sql);

                      if($rsListUsuarios = mysqli_fetch_assoc($selectDados)){
                          $idUsuario = $rsListUsuarios['idUsuario'];
                          $nome = $rsListUsuarios['nome'];
                          $usuario = $rsListUsuarios['usuario'];
                          $senha = $rsListUsuarios['senha'];
                          $email = $rsListUsuarios['email'];
                          $NivelNome = $rsListUsuarios['nivelnome'];
                          $idNivel = $rsListUsuarios['idNivel'];
                          $action = "../bd/Cms/updateContatoCms.php?modo=atualizar&id=" . $rsListUsuarios['idUsuario'];

                      }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/table.css">
    <script src="../scripts/jquery.js"></script>
    <script>
    $(document).ready(function(){
        //function que sera acionada no click do botao para visualizar
        $('.pesquisar').click(function(){
            //chama a div modal pelo efeito do fadein
            $('#modal').fadeIn(1000);
        });
    });

    function visualizarUsuario(idUsuario){
        $.ajax({
                type:"POST",
                 url:"../bd/Cms/visualizarContatoCms.php",
                 data:{modo:'visualizar',id:idUsuario},
                 success: function(dados){
                     $('#modalconteudo').html(dados);
                    }
                });
            }
    </script>
    <title>Padoka | Admin | CMS</title>
</head>
<style>
    #modal{
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        z-index: 9999;
        position: fixed;
        padding-top:10vh;
        box-sizing: border-box;
        display:none;
    }
    #modalconteudo{
        width:70vw;
        height:60vh;
        overflow: auto;
        margin-right:auto;
        margin-left:auto;
        background-color:white;
    }
</style>
<body>
    <div id="modal">
        <div id="modalconteudo">
        
        </div>
    </div>
    <div class="main">
        <section class="container">
            <div class="containertop">
                <div class="cmsTitle">
                    <h1>CMS - SISTEMA DE GERENCIAMENTO PADOKA</h1>
                </div>
                <div class="imgTitle">

                </div>
             </div>
        </section>
    <header>
    <?php echo(cabecalho());?>
    </header>
        <div class="container">
            <div class="containerItens">
                <div class="containerFormUsuario">
                    <div class="SubMenu">
                        <div class="subMenuItem">
                            <ul>
                                <li>   
                                    <a href="admNivel.php">
                                        <div>
                                            <svg viewBox="0 0 64 64" class="svg" xmlns="http://www.w3.org/2000/svg"><g id="Driver_License-Id-License-Transport-Identification" data-name="Driver License-Id-License-Transport-Identification"><path d="m15 29h2v2h-2z"/><path d="m21 29h2v2h-2z"/><path d="m58 7h-52a5 5 0 0 0 -5 5v38a5 5 0 0 0 5 5h52a5 5 0 0 0 5-5v-38a5 5 0 0 0 -5-5zm3 43a3.009 3.009 0 0 1 -3 3h-52a3.009 3.009 0 0 1 -3-3v-35h58zm0-37h-58v-1a3.009 3.009 0 0 1 3-3h52a3.009 3.009 0 0 1 3 3z"/><path d="m27.85 41.51-4.85-2.16v-1.43a8.06 8.06 0 0 0 3.74-4.92h.26a3 3 0 0 0 0-6v-2a8 8 0 0 0 -16 0v2a3 3 0 0 0 0 6h.26a8.06 8.06 0 0 0 3.74 4.92v1.43l-4.85 2.16a7 7 0 0 0 -4.15 6.39v2.1a1 1 0 0 0 1 1h24a1 1 0 0 0 1-1v-2.1a7 7 0 0 0 -4.15-6.39zm-.85-12.51a1 1 0 0 1 0 2zm-16 2a1 1 0 0 1 0-2zm12.53 10.77-.24.94-1.58-.53-.37-.73.68-.34zm-10.53-16.77a6 6 0 0 1 12 0v.97a2.009 2.009 0 0 1 -1.6-1.48l-.43-1.73a1 1 0 0 0 -1.97.24 3.009 3.009 0 0 1 -3 3h-5zm0 6v-3h5a5.012 5.012 0 0 0 3.93-1.91 3.99 3.99 0 0 0 3.07 1.89v3.02a6 6 0 0 1 -12 0zm2.98 10.11.68.34-.37.73-1.58.53-.24-.94zm-.73 7.89h-7.25v-1.1a5 5 0 0 1 2.97-4.57l1.65-.73.41 1.64a1.017 1.017 0 0 0 .49.64 1 1 0 0 0 .48.12 1.185 1.185 0 0 0 .32-.05l2.36-.79zm2.09 0 .96-3.29a.99.99 0 0 0 1.4 0l.96 3.29zm.88-6.2.4-.8h.76l.4.8-.78.79zm2.78-3.42-1.24.62h-1.52l-1.24-.62v-.64a7.822 7.822 0 0 0 4 0zm9 9.62h-7.25l-1.43-4.84 2.36.79a1.185 1.185 0 0 0 .32.05 1 1 0 0 0 .48-.12 1.017 1.017 0 0 0 .49-.64l.41-1.64 1.65.73a5 5 0 0 1 2.97 4.57z"/><path d="m34 18h4v2h-4z"/><path d="m42 18h2v2h-2z"/><path d="m46 18h2v2h-2z"/><path d="m50 18h2v2h-2z"/><path d="m54 18h2v2h-2z"/><path d="m34 31h6v2h-6z"/><path d="m42 27h4v2h-4z"/><path d="m48 27h8v2h-8z"/><path d="m42 31h14v2h-14z"/><path d="m42 37h2v2h-2z"/><path d="m46 37h2v2h-2z"/><path d="m50 37h2v2h-2z"/><path d="m54 37h2v2h-2z"/><path d="m42 48h4v2h-4z"/><path d="m48 48h4v2h-4z"/><path d="m54 48h2v2h-2z"/></g></svg>
                                        </div>
                                        <h4 class="text-menu btn-align">Adm Nivel</h4>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <form action="<?=$action?>" name="" method="post">
                        <div class="rgtPerm">Registro Dados Pessoais</div>
                        <div>
                            <input type="text" class="formInput" name="txtNome" value="<?=$nome?>" placeholder='Nome'>
                        </div>
                        <div>
                            <input type="text" class="formInput" name="txtusuario" value="<?=$usuario?>" placeholder='Usuario'>
                        </div>
                        <div>
                            <input type="text" class="formInput" name="txtsenha" value="<?=$senha?>" placeholder='Senha'>
                        </div>
                        <div>
                            <input type="text" class="formInput" name="txtemail" value="<?=$email?>"  placeholder='E-mail'>
                        </div>
                        <div class="selectdiv">
                            <select name="slcnivel" class="select" id="">
                                <?php
                                    if(isset($_GET['modo']))
                                    {
                                        if($_GET['modo'] == 'consultaEditar')
                                        {
                                            ?>
                                            <option value="<?=$idNivel?>"><?=$NivelNome?></option>
                                        
                                            <?php
                                            
                                        }
                                        }else{
                                            ?>
                                            <option value="0" selected disabled>Selecionar</option>
                                            <?php
                                        }


                                
                                
                                    $sql = "select * from tblNivel  where idNivel <> ".$idNivel." order by nivelNome";
                                    
                                    $slcnivel = mysqli_query($conex, $sql);

                                    while($rsSelectNivel = mysqli_fetch_assoc($slcnivel)){
                                ?>
                                    <option value="<?=$rsSelectNivel['idNivel']?>"><?=$rsSelectNivel['nivelNome']?></option>
                                    <?php
                                    }
                                ?>
                            </select>
                        </div>

                        <div class="btn-align">
                            <input type="submit" class="btn btn-primary" name="btnSalvar" value="Registrar">
                        </div>
                    </form>
                    
                </div>
                    <div class="table-container">
                        <table class="table-basic">
                            <tr>
                                <th>Nome</th>
                                <th>Usuario</th>
                                <th>Senha</th>
                                <th>E-mail</th>
                                <th>nivel</th>
                                <th>Ação</th>
                            </tr>
                            <?php
                                $sql="select 
                                tblusuarios.idUsuario,
                                tblusuarios.nome,
                                tblusuarios.usuario,
                                tblusuarios.senha,
                                tblusuarios.email,
                                tblNivel.nivelNome
                                from
                                    tblusuarios,
                                    tblNivel
                                where
                                 tblNivel.idNivel = tblusuarios.idNivel 
                                 order by tblusuarios.idusuario desc";

                                 $selectUsuarios = mysqli_query($conex, $sql);

                                 while($rsUsuarios = mysqli_fetch_assoc($selectUsuarios)){
                            ?>
                            <tr>
                                <td><?=$rsUsuarios['nome']?></td>
                                <td><?=$rsUsuarios['usuario']?></td>
                                <td><?=$rsUsuarios['senha']?></td>
                                <td><?=$rsUsuarios['email']?></td>
                                <td><?=$rsUsuarios['nivelNome']?></td>
                                <td class="td-body">
                                   <div class="iconDiv">
                                        <a href="../bd/Cms/deletarContatoCms.php?modo=excluir&id=<?=$rsUsuarios['idUsuario']?>" onclick="return confirm('Ola tudo bem ? , deseja realmente excluir esse usuario ?');">
                                            <svg class="icon" viewBox="-57 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m156.371094 30.90625h85.570312v14.398438h30.902344v-16.414063c.003906-15.929687-12.949219-28.890625-28.871094-28.890625h-89.632812c-15.921875 0-28.875 12.960938-28.875 28.890625v16.414063h30.90625zm0 0"/><path d="m344.210938 167.75h-290.109376c-7.949218 0-14.207031 6.78125-13.566406 14.707031l24.253906 299.90625c1.351563 16.742188 15.316407 29.636719 32.09375 29.636719h204.542969c16.777344 0 30.742188-12.894531 32.09375-29.640625l24.253907-299.902344c.644531-7.925781-5.613282-14.707031-13.5625-14.707031zm-219.863282 312.261719c-.324218.019531-.648437.03125-.96875.03125-8.101562 0-14.902344-6.308594-15.40625-14.503907l-15.199218-246.207031c-.523438-8.519531 5.957031-15.851562 14.472656-16.375 8.488281-.515625 15.851562 5.949219 16.375 14.472657l15.195312 246.207031c.527344 8.519531-5.953125 15.847656-14.46875 16.375zm90.433594-15.421875c0 8.53125-6.917969 15.449218-15.453125 15.449218s-15.453125-6.917968-15.453125-15.449218v-246.210938c0-8.535156 6.917969-15.453125 15.453125-15.453125 8.53125 0 15.453125 6.917969 15.453125 15.453125zm90.757812-245.300782-14.511718 246.207032c-.480469 8.210937-7.292969 14.542968-15.410156 14.542968-.304688 0-.613282-.007812-.921876-.023437-8.519531-.503906-15.019531-7.816406-14.515624-16.335937l14.507812-246.210938c.5-8.519531 7.789062-15.019531 16.332031-14.515625 8.519531.5 15.019531 7.816406 14.519531 16.335937zm0 0"/><path d="m397.648438 120.0625-10.148438-30.421875c-2.675781-8.019531-10.183594-13.429687-18.640625-13.429687h-339.410156c-8.453125 0-15.964844 5.410156-18.636719 13.429687l-10.148438 30.421875c-1.957031 5.867188.589844 11.851562 5.34375 14.835938 1.9375 1.214843 4.230469 1.945312 6.75 1.945312h372.796876c2.519531 0 4.816406-.730469 6.75-1.949219 4.753906-2.984375 7.300781-8.96875 5.34375-14.832031zm0 0"/></svg>
                                        </a>
                                        <a class="pesquisar" onclick="visualizarUsuario(<?=$rsUsuarios['idUsuario']?>);">
                                            <svg id="Capa_1" class="icon" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m293.613 312.202h92.947v55.768h-92.947z" fill="#2b4d66" transform="matrix(.707 -.707 .707 .707 -140.868 340.086)"/></g><g><path d="m351.637 351.636h55.768v55.768h-55.768z" fill="#4a80aa" transform="matrix(.707 -.707 .707 .707 -157.203 379.52)"/></g><g><path d="m504.503 438.779-.028 65.696-65.696.027-72.403-72.402 65.724-65.724z" fill="#407093"/></g><g><path d="m504.503 438.779-.028 43.788-94.283-94.283 21.908-21.908z" fill="#365e7d"/></g><g><circle cx="193.303" cy="193.304" fill="#407093" r="185.895"/></g><g><path d="m305.722 45.255c23.743 31.22 37.847 70.169 37.847 112.418 0 102.667-83.228 185.895-185.895 185.895-42.249 0-81.199-14.104-112.418-37.846 33.954 44.646 87.63 73.476 148.048 73.476 102.667 0 185.895-83.228 185.895-185.895-.001-60.417-28.831-114.094-73.477-148.048z" fill="#365e7d"/></g><g><circle cx="193.303" cy="193.304" fill="#e4f6ff" r="136.323"/></g><g><path d="m275.627 84.645c17.358 22.875 27.665 51.394 27.665 82.323 0 75.289-61.034 136.323-136.323 136.323-30.93 0-59.448-10.307-82.323-27.664 24.895 32.807 64.299 54 108.658 54 75.289 0 136.323-61.034 136.323-136.323-.001-44.36-21.193-83.764-54-108.659z" fill="#d3effb"/></g><g><path d="m173.101 271.528c3.264 0 6.268-2.148 7.209-5.442l40.411-141.442c1.139-3.983-1.168-8.135-5.151-9.274-3.982-1.138-8.136 1.168-9.274 5.152l-40.411 141.442c-1.139 3.983 1.168 8.135 5.151 9.273.689.197 1.382.291 2.065.291z"/><path d="m243.608 249.23c1.454 1.397 3.326 2.09 5.194 2.09 1.971 0 3.939-.773 5.412-2.306l48.495-50.515c2.787-2.903 2.787-7.488 0-10.391l-48.495-50.514c-2.869-2.989-7.619-3.084-10.607-.216-2.988 2.869-3.086 7.618-.216 10.606l43.507 45.319-43.507 45.32c-2.869 2.989-2.771 7.738.217 10.607z"/><path d="m143 137.378c-2.989-2.87-7.738-2.771-10.606.216l-48.495 50.514c-2.787 2.903-2.787 7.488 0 10.391l48.495 50.515c1.473 1.534 3.441 2.306 5.412 2.306 1.869 0 3.74-.693 5.194-2.09 2.988-2.869 3.086-7.618.216-10.606l-43.507-45.32 43.507-45.319c2.869-2.99 2.772-7.738-.216-10.607z"/><path d="m509.804 433.472-72.404-72.404c-2.93-2.928-7.679-2.928-10.609 0l-7.839 7.839-28.821-28.821 7.84-7.84c2.929-2.93 2.929-7.679 0-10.609l-35.177-35.178c7.207-13.09 12.908-26.994 16.902-41.436 8.582-31.031 9.286-64.026 2.038-95.418-.933-4.036-4.962-6.554-8.997-5.621-4.037.932-6.553 4.96-5.621 8.997 13.954 60.438-3.865 122.671-47.664 166.47-34.785 34.78-80.461 52.168-126.15 52.164-45.678-.004-91.37-17.392-126.141-52.163-69.552-69.562-69.552-182.739 0-252.291 69.552-69.552 182.73-69.552 252.29 0 15.704 15.703 28.169 33.86 37.051 53.966 1.674 3.79 6.105 5.505 9.893 3.831 3.79-1.674 5.505-6.103 3.831-9.892-9.633-21.808-23.146-41.494-40.166-58.514-75.41-75.4-198.104-75.402-273.508 0-75.401 75.402-75.401 198.097 0 273.508 37.705 37.704 87.22 56.556 136.75 56.551 32.126-.003 64.256-7.948 93.16-23.815l35.175 35.175c1.465 1.464 3.385 2.197 5.305 2.197s3.84-.733 5.305-2.197l7.84-7.84 28.821 28.821-7.839 7.839c-2.929 2.93-2.929 7.679 0 10.609l21.624 21.624c1.465 1.464 3.385 2.197 5.305 2.197s3.84-.733 5.305-2.197c2.929-2.93 2.929-7.679 0-10.609l-16.32-16.319 55.114-55.114 67.099 67.1c2.93 2.928 7.679 2.928 10.609 0 2.928-2.931 2.928-7.68-.001-10.61zm-182.862-51.415-27.233-27.233c10.734-7.074 20.914-15.329 30.351-24.764 9.29-9.29 17.563-19.486 24.743-30.372l27.254 27.254zm23.754-2.536 28.825-28.825 28.821 28.821-28.825 28.825z"/><path d="m418.045 473.16c-2.928-2.928-7.678-2.929-10.608.001-2.929 2.929-2.929 7.679.001 10.608l26.035 26.034c1.464 1.464 3.384 2.197 5.304 2.197s3.84-.733 5.305-2.198c2.929-2.929 2.929-7.679-.001-10.608z"/><path d="m60.048 163.556c-4.088-.676-7.949 2.089-8.625 6.177-7.563 45.716 7.459 92.546 40.183 125.27 27.161 27.166 63.277 42.128 101.694 42.128 38.416 0 74.535-14.961 101.702-42.127 27.166-27.166 42.127-63.285 42.127-101.702s-14.962-74.533-42.127-101.694c-27.166-27.167-63.284-42.128-101.701-42.128s-74.533 14.962-101.691 42.125c-12.483 12.473-22.429 26.887-29.561 42.843-1.691 3.782.005 8.218 3.787 9.909 3.778 1.689 8.219-.005 9.909-3.787 6.382-14.276 15.287-27.18 26.472-38.355 24.328-24.333 56.675-37.733 91.085-37.733s66.76 13.401 91.093 37.734c24.333 24.328 37.733 56.676 37.733 91.084 0 34.41-13.401 66.76-37.734 91.092s-56.683 37.734-91.092 37.734-66.757-13.4-91.085-37.734c-29.311-29.31-42.766-71.259-35.991-112.213.675-4.085-2.09-7.947-6.178-8.623z"/></g></g></svg>
                                        </a>
                                        <a href="admUsuarios.php?modo=consultaEditar&id=<?=$rsUsuarios['idUsuario']?>"><svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                                   </div>
                                </td>
                            </tr>
                            <?php
                                 }
                            ?>

                        </table>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>