<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
header('Content-Type: text/html; charset=utf-8');
    ?>
    <title>Star Pet - Pet Shop Online</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/icons_png/icone-patas-caes_3.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, inicial-scale=1">
    <link href="dist/css/bootstrap.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="css/screen.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/cssbood.css">
    <style type="text/css">
    #fotousu{
         background-image:url('img1/usuario.png');
    }

</style>

</head>

<body>
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
                        <span class='' onclick=''>
                    <span class='glyphicon glyphicon-user icon-xs'></span> Entrar | Cadastrar</span>
                    </li>
                </a>
                      ";
                     }
                    ?>
                    <li class="item-header">
                        <a href="/carrinho" class="title user-item" title="Ir para o carrinho">
                    <span class="glyphicon glyphicon-shopping-cart icon-xs"></span></a>
                    </li>
                </ul>
            </nav>
        </div>
                    <div id='fotousui'>
  <ul id='menulogi'   onMouseOver='ak1()' onMouseOut ='saimenuusuario1()'>
<li><a href='#'>Usuário Comum</a></li>
<li><a href='#'>Administrador</a></li>
  </ul>
  </div>
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
    <ul style="margin-top: 60px;" class="ajlegal">
        
        <li class="nav-dropdown">
            <a href="higiene.php" class="dropbtn">Higiene</a>
    
        </li>
        
        <li class="nav-dropdown">
            <a href="Racoes.php" class="dropbtn">Ração</a>
         
        </li>
        
        <li class="nav-dropdown">
            <a href="saude.php" class="dropbtn">Saúde</a>
           
        </li>
        
        <li class="nav-dropdown">
            <a href="ajuda.php" class="dropbtn">Ajuda</a>
           
        </li>
        
        <li class="nav-dropdown">
            <a href="history.php" class="dropbtn">Nossa História</a>
            
        </li>
        
    </ul>
</nav>
    <!-- Fim do Menu-->

<div class="catalog">
        <div class="container">
            <div id="carousel" class="carousel slide" style="margin-top: 30px; left:30%; width: 40%;">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <a href="#"><img src="img/higiene.jpg" alt=""></a>
                        <div class="carousel-caption">
                        </div>
                    </div>
            </div>
            <!-- Carousel -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>

    <script>
        $('#carousel').carousel({
            interval: 2000,
            keyboard: false;
        })
    </script>
<!--Fim menu-->

<div class="container paineis">
       <section class="painel novidades" style="margin-left: -20px; margin-top:0px;">

            <h2>Novidades</h2>
             <ol>
                <?php
include 'testephp/Conexao.php';
$sq1="select p.nome, p.info_aditiva,p.descricao,p.imagem,c.descricao,p.idproduto,p.valor from produto as p join categoriaproduto as c on c.idcategoriaproduto= p.categoriaproduto_idcategoriaproduto where p.categoriaproduto_idcategoriaproduto=1 order by p.idproduto DESC limit 8;";
$fica=mysqli_query($con,$sq1); 
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

       <section class="painel novidades" style="margin-left: -20px; margin-top:0px;">

            <h2>Marcas Variadas</h2>
             <ol>
                    <?php
include 'testephp/Conexao.php';
$sq1="select p.nome, p.info_aditiva,p.descricao,p.imagem,c.descricao,p.idproduto,p.valor from produto as p join categoriaproduto as c on c.idcategoriaproduto= p.categoriaproduto_idcategoriaproduto where p.categoriaproduto_idcategoriaproduto=1 order by p.idproduto DESC limit 8;";
$fica=mysqli_query($con,$sq1); 
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
         <!-- <section class="painel novidades" style="margin-left: -20px; margin-top:0px;">

            <h2>Marcas Mais Procuradas</h2>
             <ol>
                <li>
                    <a href="#">
                        <figure>
                            <img src="img/produtos/racaopedigree.jpg">
                            <br/><br/>
                            <figcaption>Ração Pedigree Adulto Carne e  5 Vegetais - 3 KG
                                <h2>R$69,90</h2>
                            </figcaption>
                        </figure>
                    </a>
                </li>

                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/03.jpg"s>
                            <br/>
                            
                            <figcaption>Ração Magnus Premium para adultos sabor frango e arroz  1 KG
                                <h2>R$39,99</h2>
                            </figcaption>
                        </figure>
                    </a>
                </li>

                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/07.jpg">
                            <br/><br/>
                            <figcaption>Ração Pedigree natural junior sabor carne e vegetais 1 KG
                                <h2>R$29,90</h2>
                            </figcaption>
                        </figure>
                    </a>
                </li>

                 <li>
                    <a href="#">
                        <figure>
                            <img src="img/produtos/04.jpg">
                            <br/><br/>
                            <figcaption>Ração Magnus Premium filhotes sabor frango e arroz 1 KG 
                                <h2>R$39,90</h2>
                            </figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure>
                            <img src="img/produtos/08.jpg">
                            <br/><br/>
                            <figcaption>Ração pedigree para cachorros adultos sabor carne e legumes 1 KG 
                                <h2>R$29,90</h2>
                            </figcaption>
                        </figure>
                    </a>
                </li>
                 <li>
                    <a href="#">
                        <figure>
                            <img src="img/produtos/05.jpg">
                            <br/>
                            <br/><br/>
                            <figcaption>Ração Pedigree natural raças pequenas 1 KG 
                                <h2>R$19,90</h2>
                            </figcaption>
                        </figure>
                    </a>
                </li>
            </ol>

        </section> -->
        <!-- <footer>
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
</footer> -->
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



</script>

</body>
</html>