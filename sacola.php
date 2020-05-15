<!DOCTYPE html>
 <?php
    header('Content-Type: text/html; charset=utf-8');
    ?>
<html>
<head>
	<title>Sacola Star Pet</title>
	   <link rel="shortcut icon" href="img/icons_png/icone-patas-caes_3.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, inicial-scale=1">
    <link href="dist/css/bootstrap.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="css/screen.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/cssbood.css">
	<link rel="stylesheet" type="text/css" href="css/cssadmin.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"> -->
<style type="text/css">
	body{
		font-family:arial;
		font-size:21px;
	}
	th{
		height:80px;
	}
	td{
		height:100px;
		text-align:center;
	}
	select{
		width:80px;
		height:30px;
		text-align: center;
	}
	.imaggetable{
		position:relative;
		width:80px;
		height:80px;
		top:0px;
		left:-300px;
	}
	#conticonti{
		position:absolute;
		top:500px;
		background-color:green;
		left:500px;
	}
	#conticonti2{
			position:absolute;
		top:500px;
		background-color:green;
		left:850px;
	}
	#tabelaEditavel{
		position:relative;
		top:70px;
	}
    #fotousu{
         background-image:url('img1/usuario.png');
    }
    #ruan{
      position:absolute;
      top:650px;
      left:80px;
    }
</style>
</head>
<body>
<header class="main-header">
        <h1 id="starpet">Star Pets</h1>
        <div class="container container-limited">
            <h1 class="logo">
                <a href="indexnormal.php" target="_self" title="Ir para a home"><!-- <img src="" id="logostar" itemprop="logo"> -->  <img src="img1/data.png" class="data"></a>
            </h1>
            <div class="search header-search">
                <form class="form-inline" role="form" method="POST">
                    <input class="col-md-12 search" type="search" placeholder="O que o seu pet precisa?" aria-label="Search">
                </form>
            </div>
            <nav id="sidenav" class="header-menu">
               
                    <li class="item-header">
                        <span class="title" onclick='ak1()'>
                    <span class="glyphicon glyphicon-user icon-xs"></span> Entrar | Cadastrar</span>
                    </li>
                    <li class="item-header">
                        <a href="/carrinho" class="title user-item" title="Ir para o carrinho">
                    <span class="glyphicon glyphicon-shopping-cart icon-xs"></span></a>
                    </li>
                </ul>
            </nav>
                       <div id='fotousui'>
  <ul id='menulogi'   onMouseOver='ak1()' onMouseOut ='saimenuusuario1()'>
<li><a href='#'>Usuário Comum</a></li>
<li><a href='#'>Administrador</a></li>
  </ul>
  </div>
        </div>
        
    </header>
    <?php
    session_start();
 if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho']=array();
  }
  //adiciona produto
  if (isset($_GET['acao'])) {
   //adicionar carrinho
    if ($_GET['acao']=='add') {
      $id=intval(($_GET['id']));
     if (!isset($_SESSION['carrinho'][$id])) {
     //se nao existir eu vou colocar este produto
      $_SESSION['carrinho'][$id]=1;
     }else{
      //se ele clicar de novo no link adiciona de novo
      $_SESSION['carrinho'][$id]+=1;
     }
    }
    //remover

    if ($_GET['acao']=='del') {
      // echo "<script>alert('oi');</script>";
      $id=intval($_GET['id']);
   if (isset($_SESSION['carrinho'][$id])) {
    //se existir a gente apaga
    unset($_SESSION['carrinho'][$id]);
   }
    }
    //  alterar quantidade
    if ($_GET['acao']=='up') {
 if (is_array($_POST['prod'])) { //verificando se o post é um array aí vamos percorrer ele
foreach ($_POST['prod'] as $id => $qtd) {
  //verificando se a quantidade é vazia ou 0
  $id=intval($id);
  if (!empty($qtd) || $qtd<>0) { //<> diferente
  $_SESSION['carrinho'][$id]=$qtd;
  }else{
    unset($_SESSION['carrinho']['id']);
    //se ele for igual a 0 eu apago ele
  }
}
 }
    }
  }
  // print_r( $_SESSION['carrinho']);
    ?>
<table class="tabelaEditavel" id="tabelaEditavel">
        <thead>
            <tr>
                <th>Excluir</th>
                <th>Sacola</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        <form action="?acao=up" method="post">
          
          <?php
          if (count($_SESSION['carrinho'])==0) {
        echo "<td colspan='5'>Nenhum produto adicionado ainda no carrinho!</td>";
          }
          foreach ($_SESSION['carrinho'] as $id => $qtd) {
            # code...
include 'testephp/Conexao.php';
$sql1="select p.nome, p.info_aditiva,p.descricao,p.imagem,c.descricao,p.idproduto,p.valor from produto as p join categoriaproduto as c on c.idcategoriaproduto= p.categoriaproduto_idcategoriaproduto where p.idproduto=$id;";
$fica=mysqli_query($con,$sql1); 
while($vreg= mysqli_fetch_row($fica)){
  $ubtotal=$vreg[6]*$qtd;
echo "
 <tr>
              <td><a href='?acao=del&id=$vreg[5]'>Remover</a></td>
                <td>Ração Jumento
<img src='imgprod/$vreg[3]' class='imaggetable'>
                </td>
                <td>
               <input type='text' size='3' name='prod[$id]' value='$qtd'/>
                </td>
                <td>R$ $vreg[6]</td>
                <td>R$ $ubtotal</td>
            </tr>     

";
$total+=$ubtotal;
}
          }
          ?>
           
        </tbody>
    </table>
<input type="submit" class="forn" value="Atualizar" id="conticonti">
        </form>
    <div id="ruan">
      <h1>Total : <?php 
       if (count($_SESSION['carrinho'])==0) {
        echo "R$ 0,00 ";
          }else{
      echo "$total"; 
          }
       ?></h1>
    </div>
<input type="reset" class="forn" value="Descartar" id="conticonti2">
</body>
</html>