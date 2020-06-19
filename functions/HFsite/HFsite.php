<?php 
    function cabecalho(){
        $navbar = "
         <div id='containerMenu'> 
                <div class='containerHeader'>  
                    <nav class='containerMenuMobile'>
                        <div class='iconeMobile'></div>
                            <div class='menuMobile'>
                                <ul class='ulItensMenu'>
                                    <li class='itemMenu'><a href='index.php'>Home</a></li>
                                    <li class='itemMenu'><a href='sobre.php'>Empresa</a></li>
                                    <li class='itemMenu'><a href='trabalho_form/index.php'>Contato</a></li>
                                    <li class='itemMenu'><a href='curiosidades.php'> Curiosidade</a></li>
                                    <li class='itemMenu'><a href='lojas.php'>Loja</a> </li>
                                    <li class='itemMenu'><a href='promacao.php'>Promoções</a></li>
                                    <li class='itemMenu'><a href='produto.php'>Produto Mês</a></li>
                                </ul>
                            </div>
                    </nav> 
                    <div class='logo'>
                        <a href='index.php'><img src='img/logo/logo.png' alt='Logo'></a>
                    </div>
                    <div class='iconeMenulogin modal-btn'></div>
                    <nav id='menu'>
                        <ul id='menuitem'>
                            <li class='menulista textBuild'> 
                                <a href='sobre.php'>Empresa</a>
                            </li>
                            <li class='menulista textBuild'> 
                                <a href='trabalho_form/index.php'>Contato</a>
                            </li>
                            <li class='menulista textBuild'>
                               <a href='curiosidades.php'> Curiosidade</a>
                            </li>
                            <li class='menulista textBuild'> 
                                <a href='lojas.php'>Loja</a> 
                            </li>
                            <li class='menulista textBuild'> 
                                <a href='promacao.php'>Promoções</a>
                            </li>
                            <li class='menulista textBuild'> 
                                <a href='produto.php'>Produto Mês</a>
                            </li>
                        </ul>
                    </nav>
                    
                   <div class='formluario_Entrar'>
                        <form method='POST' class='' name='frm_entrar'>  
                            <div class=''>
                                <div class='form-group'>
                                    <div>
                                        <label>Usuario:</label>
                                    </div>
                                <input type='text' name='txtusuario' class='inputedit' placeholder='Usuario'>
                            </div>
                            <div class='form-group'>
                                <div>
                                    <label>Senha:</label>
                                </div>
                                    <input type='password' name='txtsenha' class='inputedit' placeholder='Senha'>
                            </div>
                                    <input type='submit' value='Ok' class='btn_Entrar'>
                            </div>
                       </form>
                    </div>
                </div>
            </div>";
            return $navbar;

    }

    function rodape(){
        $footerbar = 
        "<footer>
            <div class='endereco'>
                Endereco - xxxxxxxxxxxxx xxxxxxxxxxxxx xxxxxxxxxxx xxxxxxxx
            </div>
            <div class='textSistemInt'>
                Sistema Interno
            </div>
            <div class='containerApp'>
                <div class='imgAPP'></div>
                <div class='textApp'>Baixe App</div>
            </div>
         </footer>";
        return $footerbar;
        }
        function menuleft(){
            $navbarleft="
        <div class='scrollbar'>
            <div class='container'>
               <div class='submenuleftmobile'>
                    <nav class='submenu'>
                        <ul class='submenuitem'>
                            <li class='submenulist texteedit'>ITEM</li>
                            <li class='submenulist texteedit'>ITEM</li>
                            <li class='submenulist texteedit'>ITEM</li>
                            <li class='submenulist texteedit'>ITEM</li>
                            <li class='submenulist texteedit'>ITEM</li>
                        </ul>
                    </nav>
               </div>
            </div>
        </div>
            ";
            return $navbarleft;
        }
    

        function redesSociais(){
            $redes="
            <div class='cardRedes'>
                <div class='face'>
                    <a href='#'></a>
                </div>
                <div class='insta'>
                    <a href='#'></a>
                </div>
                <div class='tt'>
                    <a href='#'></a>
                </div>
            </div>";
         return $redes;
        }

        function divProdutoPao(){
            $pao="
                 <div class='card'>
                 <div class=' py-2 bb textDefault'>Pão Francês </div>
                    <div class='imgCenter'>
                        <img src='img/pao.jpeg' alt='Pao' height='170' width='190'>
                    </div>
                    <div class='py-2 bt textDefault'>Pão francês  na frança se chama pão daqui?</div>
                    <div class='textDefault'>R$ 1,50 Reais </div>
                    <div class='text-center'><a href='#' class='botao botao1'>Comprar</a></div>
                </div>
            ";
            return $pao;
        }
        function pmProduto(){
            $pmpao="
            <div class='container'>
                <div class='promocaoDia'>
                    <div class='nome'>Pão</div>
                    <div class='imgProduto'><img src='img/pao.jpeg' alt='Pao' height='130' width='200'></div>
                    <div class='comprar'><a href='' class>Comprar</a></div>
                    <div class='detalhes'><a href='' class=''>De R$13,00 Por R$6,00</a></div>
                </div>
        </div>";
            return $pmpao;
        }
        function pdmes(){
            $pddomes = "
            <div class='container'>
            <div class='promocaoDia'>
                <div class='nome'>Produto do Mês</div>
                <div class='imgProduto'><img src='img/pao.jpeg' alt='Pao' height='130' width='200'></div>
                <div class='comprar'><a href='' class>Comprar</a></div>
                <div class='detalhes'><a href='' class=''>Apenas por R$6,00</a></div>
                </div>
            </div>";
            return $pddomes;
        }
?>