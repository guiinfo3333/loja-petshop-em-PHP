<!DOCTYPE html>
<head>
    <title>Star Pet - Pet Shop Online</title>
    <?php
    header('Content-Type: text/html; charset=utf-8');
    ?>
    <link rel="shortcut icon" href="img/icons_png/icone-patas-caes_3.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, inicial-scale=1">
    <link href="dist/css/bootstrap.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="css/screen.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/cssbood.css">
<style type="text/css">
    #fotousu{
         background-image:url('img1/usuario.png');
    }
    #starpet{
        position:absolute;
        font-size:22px;
        left:120px;
        font-family:arial;
        color:white;
        text-shadow:3px 4px 6px black;
    }
    #retoque{
        position:relative;
        top:1px;
        left:35px;
    }
    #rje{
        position:relative;
        left:17px;
    }
</style>
</head>
<body onload="escondido()">
      <?php
 session_start();
  ?>
    <header class="main-header">
        <h1 id="starpet">Star Pets</h1>
        <div class="container container-limited">
            <h1 class="logo">
                <a href="indexnormal.php" target="_self" title="Ir para a home"><!-- <img src="" id="logostar" itemprop="logo"> -->  <img src="img1/data.png" class="data"></a>
            </h1>
            <div class="search header-search">
               <form class="form-inline" role="form" method="POST"  action="pesquisa.php">
                    <input class="col-md-12 search" type="search" placeholder="O que o seu pet precisa?" aria-label="Search" name="buscaprod">
                </form>
            </div>
            <nav id="sidenav" class="header-menu">
                <ul>
                    <li class="item-header">
                        <a href="/minha-conta/pedidos" class="title">
                        <span class="glyphicon glyphicon-repeat icon-xs"></span> Refazer pedido</a>
                    </li>
                    <li class="item-header">
                        <a href="/minha-conta/pedidos" class="title">
                        <span class="glyphicon glyphicon-th-large icon-xs"></span> Rastrear pedido</a>
                    </li>
                    <li class="item-header">
                        <a href="" class="title">
                        <span class="glyphicon glyphicon-calendar icon-xs">
                        </span> Assinatura <span class="icon-arrow-light"></span>
                        </a>
                    </li> 
                    <?php
                     if (!isset($_SESSION['nome'])) {
                      echo "
               <li class='item-header' id='retoque'>
                         <a href='login.php' id='rpc'>
                        <span class='' onclick='ak1()'>
                    <span class='glyphicon glyphicon-user icon-xs'></span> Entrar | Cadastrar</span>
                    </li>
                </a>
                      ";
                     }
                    ?>
                    <li class="item-header" id="rje">
                        <a href="sacola.php" class="title user-item" title="Ir para o carrinho">
                    <span class="glyphicon glyphicon-shopping-cart icon-xs"></span></a>
                    </li>
                </ul>
            </nav>
              <!--          <div id='fotousui'>
  <ul id='menulogi'   onMouseOver='ak1()' onMouseOut ='saimenuusuario1()'>
<li><a href=''>Usuário Comum</a></li>
<li><a href=''>Administração</a></li>
  </ul>
  </div> -->
        </div>
       <!--    <div id='fotousu' onclick='ak()'>
  <h1 id='nomeusu'>Guilherme</h1>
  <ul id='menulog'  onMouseOver='ak()' onMouseOut ='saimenuusuario()'>
<li><a href='Tela_Usuario.php'>Alterar suas informações</a></li>
<li><a href='acabarsessao.php'>Sair</a></li>
  </ul>
  </div> -->
      <?php
    if (isset($_SESSION['nome'])) {

$nomevarn=explode(" ",$_SESSION['nome']);
$ftdusu=$_SESSION['fotousu'];
if ($ftdusu) {
  echo "<style> #fotousu{background-image:url('imgcliente/$ftdusu');}</style>"; 
}else{   //este else é para o caso de nao ter foto o usuario para colocar a padrao
  echo "<style> #fotousu{background-image:url('imgcliente/usuario.png');}</style>";

}
    echo "
  <div id='fotousu' onclick='ak()'>
  <h1 id='nomeusu'>$nomevarn[0],</h1>
  <ul id='menulog'  onMouseOver='ak()' onMouseOut ='saimenuusuario()'>
<li><a href='Tela_Usuario.php'>Alterar suas informações</a></li>
<li><a href='acabarsessao.php'>Sair</a></li>
  <ul>
  </div>
  ";

    }
 ?>
    </header>


    <!--Menu-->

<nav class="menu-nav">
    <ul style="margin-top: 60px;margin-left:140px;width:1000px;" class="ajlegal">
        
        <li class="nav-dropdown">
            <a href="higiene.php" class="dropbtn">Higiene</a>
          <!--   <div class="dropdown-content">
                <a href="Racoes.php"><img src="img/icons_png/racoes.jpg" class="submenu-image"/>Rações<span class="seta-image glyphicon glyphicon-chevron-right"></span></a>
                <a href="saude.php"><img src="img/icons_png/medicina-saude.jpg" class="submenu-image"/>Medicina e Saúde<span class="seta-image glyphicon glyphicon-chevron-right"></span></a>
                <a href="higiene.php"><img src="img/icons_png/higiene-limpeza.jpg" class="submenu-image"/>Higiene e Limpeza<span class="seta-image glyphicon glyphicon-chevron-right"></span></a>
                <a href="#">Acessórios para Alimentação<span class="seta glyphicon glyphicon-chevron-right"></span></a>
                <a href="#">Adestramento e Comportamento<span class="seta glyphicon glyphicon-chevron-right"></span></a>
                <a href="#">Bijuterias<span class="seta glyphicon glyphicon-chevron-right"></span></a>
                <a href="#">Brinquedos<span class="seta glyphicon glyphicon-chevron-right"></span></a>
                <a href="#">Caixas e Bolsas de Transporte<span class="seta glyphicon glyphicon-chevron-right"></span></a>
                <a href="#">Caminhas e Outros<span class="seta glyphicon glyphicon-chevron-right"></span></a>
                <a href="#">Casinhas e Acessórios<span class="seta glyphicon glyphicon-chevron-right"></span></a>
                <a href="#">Coleiras, Guias e Acessórios<span class="seta glyphicon glyphicon-chevron-right"></span></a>
                <a href="#">Escadas e Outros<span class="seta glyphicon glyphicon-chevron-right"></span></a>
                <a href="#">Ossinhos e Petiscos<span class="seta glyphicon glyphicon-chevron-right"></span></a>
                <a href="#">Roupas e Acessórios<span class="seta glyphicon glyphicon-chevron-right"></span></a> <a href="#">Shampoos e Cosméticos<span class="seta glyphicon glyphicon-chevron-right"></span></a>
            </div> -->
        </li>
        
        <li class="nav-dropdown">
            <a href="Racoes.php" class="dropbtn">Ração</a>
            <!-- <div class="dropdown-content">
                <a href="#"><img src="img/icons_png/racoes.jpg" class="submenu-image"/>Rações<span class="seta-image glyphicon glyphicon-chevron-right"></span></a>
                <a href="#"><img src="img/icons_png/medicina-saude.jpg" class="submenu-image"/>Caixa de Areia e Limpeza<span class="seta-image glyphicon glyphicon-chevron-right"></span></a>
                <a href="#"><img src="img/icons_png/higiene-limpeza.jpg" class="submenu-image"/>Medicina e Saúde<span class="seta-image glyphicon glyphicon-chevron-right"></span></a>
                <a href="#">Acessórios para Alimentação<span class="seta glyphicon glyphicon-chevron-right"></span></a>
                <a href="#">Adestramento e Comportamento<span class="seta glyphicon glyphicon-chevron-right"></span></a>
                <a href="#">Brinquedos<span class="seta glyphicon glyphicon-chevron-right"></span></a>
                <a href="#">Caixas e Bolsas de Transporte<span class="seta glyphicon glyphicon-chevron-right"></span></a>
                <a href="#">Caminhas e Arranhadores<span class="seta glyphicon glyphicon-chevron-right"></span></a>
                <a href="#">Coleiras e Acessórios<span class="seta glyphicon glyphicon-chevron-right"></span></a>
                <a href="#">Higiene e Limpeza<span class="seta glyphicon glyphicon-chevron-right"></span></a>
                <a href="#">Petiscos<span class="seta glyphicon glyphicon-chevron-right"></span></a>
            </div> -->
        </li>
        
        <li class="nav-dropdown">
            <a href="saude.php" class="dropbtn">Saúde</a>
          <!--   <div class="dropdown-content">
                <a href="#">Pássaros<span class="seta glyphicon glyphicon-chevron-right"></span></a>
                <a href="#">Répteis<span class="seta glyphicon glyphicon-chevron-right"></span></a>
                <a href="#">Peixes<span class="seta glyphicon glyphicon-chevron-right"></span></a>
                <a href="#">Roedores<span class="seta glyphicon glyphicon-chevron-right"></span></a>
            </div> -->
        </li>
        
        <li class="nav-dropdown">
            <a href="ajuda.php" class="dropbtn">Ajuda</a>
          <!--   <div class="dropdown-content">
                <ul class="menu-brand">
                    <li><a href="/royal-canin" class="link"><img src="img/logos_png/Royal_Canin_logo.png" class="brand-image" alt="Royal Canin"></a></li>
                    <li><a href="/premier-pet" class="link"><img src="img/logos_png/Premier_Pet.png" class="brand-image" alt="PremieR Pet" style="margin-top: 10px; "></a></li>
                    <li><a href="/whiskas" class="link"><img src="img/logos_png/whiskas-logo.png" class="brand-image" alt="Whiskas"></a></li>
                    <hr>
                    <div class="menu-brand-children">
                        <ul>
                            <li class="menu-brand-names">
                            <a href="#" class="menu-name">Adimax Pet</a>
                            </li>
                            <li class="menu-brand-names">
                            <a href="#"  class="menu-name">Agener União</a>
                            </li>
                            <li class="menu-brand-names">
                            <a href="#"  class="menu-name">American Pets</a>
                            </li>
                            <li class="menu-brand-names">
                            <a href="#"  class="menu-name">Avert</a>
                            </li>
                            <li class="menu-brand-names">
                            <a href="#"  class="menu-name">Bayer</a>
                            </li>
                            <li class="menu-brand-names">
                            <a href="#"  class="menu-name">Bichinho Chic</a>
                            </li>
                            <li class="menu-brand-names">
                            <a href="#"  class="menu-name">Bravecto</a>
                            </li>
                            <li class="menu-brand-names">
                            <a href="#"  class="menu-name">Capstar</a>
                            </li>
                            <li class="menu-brand-names">
                            <a href="#"  class="menu-name">Cepav</a>
                            </li>
                            <li class="menu-brand-names">
                            <a href="#"  class="menu-name">Ceva</a>
                            </li>
                            <li class="menu-brand-names">
                            <a href="#"  class="menu-name">Chalesco</a>
                            </li>
                        </ul>
                    </div>
                </ul>
            </div> -->
        </li>
        
        <li class="nav-dropdown">
            <a href="history.php" class="dropbtn">Nossa História</a>
         <!--    <div class="dropdown-content">
            <div class="menu-brand-children">
                        <ul>
                            <li class="menu-brand-names">
                            <a href="#" class="menu-name">Pit Bull</a>
                            </li>
                            <li class="menu-brand-names">
                            <a href="#"  class="menu-name">Vira Lata</a>
                            </li>
                            <li class="menu-brand-names">
                            <a href="#"  class="menu-name">Filo Brasileiro</a>
                            </li>
                            <li class="menu-brand-names">
                            <a href="#"  class="menu-name">Pinscher</a>
                            </li>
                            <li class="menu-brand-names">
                            <a href="#"  class="menu-name">Rottweile</a>
                            </li>
                            <li class="menu-brand-names">
                            <a href="#"  class="menu-name">Golden Retriver</a>
                            </li>
                            <li class="menu-brand-names">
                            <a href="#"  class="menu-name">Yorkshire</a>
                            </li>
                        </ul>
                    </div>
                </ul>
            </div> -->
        </li>
        
        
    </ul>
</nav>
    <!-- Fim do Menu-->
    
    <!-- Slider -->

    <div class="">
        <div class="container">
            <div id="carousel" class="carousel slide" style="margin-top: 20px;">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <a href="#"><img src="img/slide/banner01.jpg" alt=""></a>
                        <div class="carousel-caption">
                        </div>
                    </div>

                    <div class="item">
                        <a href="#"><img src="img/slide/banner02.jpg" alt=""></a>
                        <div class="carousel-caption">
                        </div>
                    </div>

                    <div class="item">
                        <a href="#"><img src="img/slide/banner03.jpg" alt=""></a>
                        <div class="carousel-caption">
                        </div>
                    </div>
                </div>
                <!--carousel inner -->

                <a href="#carousel" class="left carousel-control" data-slide="prev">
                    <i class="glyphicon glyphicon-chevron-left"></i>
                </a>
                <a href="#carousel" class="right carousel-control" data-slide="next">
                    <i class="glyphicon glyphicon-chevron-right"></i>
                </a>

            </div>
            <!-- Carousel -->
        </div>
    </div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>

    <script>
        $('#carousel').carousel({
            interval: 2000,
            keyboard: false;
        })
    </script>

    <!-- Fim do Slider -->

    
    
    <!-- Paineis -->

    <div class="container paineis">

        <section class="painel novidades" style="margin-left: -20px; margin-top:0px;">
<!-- <img src="img/icone-patas-caes_3.png"> -->
    <ol>
<?php
 $campo="'%".$_POST['buscaprod']."%'";
include 'testephp/Conexao.php';
$sq1="select p.nome, p.info_aditiva,p.descricao,p.imagem,c.descricao,p.idproduto,p.valor from produto as p join categoriaproduto as c on c.idcategoriaproduto= p.categoriaproduto_idcategoriaproduto where p.nome like $campo order by p.idproduto DESC;";
$fica=mysqli_query($con,$sq1); 
 $ca=mysqli_affected_rows($con);
 if ($ca>1) {
      echo "<h2>Resultados da pesquisa : $ca produtos</h2>";
 }else if($ca==0){
  echo "<h2>Resultado da pesquisa : 0 produto </h2>";
 }else if($ca==1){
  echo "<h2>Resultado da pesquisa : 1 produto </h2>";

 }
while($vreg= mysqli_fetch_row($fica)){
                echo "
                <li>
                    <a href='produto.php?a=$vreg[5]'>
                        <figure>
                            <img src='imgprod/$vreg[3]'>
                            <figcaption>$vreg[0]
                                <h2>R$$vreg[6]</h2>
                            </figcaption>
                        </figure>
                    </a>
                </li>
  ";
               }
?>

            </ol>

        </section>

      
    </div>

    <!-- Fim dos Paineis -->

    <!-- Rodapé -->
     <footer>
<div class="inforodape" id="end">
    <img src="img1/logostar.png" id="idlogrod">
<ul>
<li class="disblo">Rua Capitão Nestor Góis 411</li>
<li class="disblo">Bairro Ellery </li>
<li class="disblo">Petshop Star Pets</li>
<li class="disblo" id="disbo1">Copyright © 2019 Pet Center Comércio e Participações S/A - Todos os direitos reservados</li>
</ul>
</div>
<div class="inforodape" id="contato">
<ul>
<li id="cali">Contatos :</li><br>
<li>(85) 98533-7317</li><br>
<li>(85) 98533-7317</li><br>
<li>(85) 98533-7317</li><br>
<li>(85) 98533-7317</li><br>
</ul>
</div>
<div class="inforodape" id="redes">
<ul>
<h1 id="rs">Redes Sociais:</h1>
<li><img src="img1/insta2.png" class="rede1"></li>
<li><img src="img1/tt1.png" class="rede1"></li>
<li><img src="img1/face1.png" class="rede1"></li>
</ul>
</div>
</footer>
    <!-- fim do rodapé -->
    <script>

function ak(){
a=document.getElementById("menulog");
a.style.display="block";
}
function saimenuusuario(){
a=document.getElementById("menulog");
a.style.display="none";
}
function ak1(){
a=document.getElementById("menulogi");
a.style.display="block";
}
function saimenuusuario1(){
a=document.getElementById("menulogi");
a.style.display="none";
}

function escondido(){
    teclas=event.keyCode;
    if (teclas==112) {
        alert("oi");
    }
}

</script>
    
</body>

</html>