<?php ini_set('default_charset','UTF-8'); ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>admin publicacao</title>
	<link rel="stylesheet" type="text/css" href="css/cssadmin.css">
	<script src="jquery/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="js/js.js"></script>
	<style>
	#espaco{
	background-image:url("img/pet.png");
	background-repeat:no-repeat;
	background-size: 600px;
	background-position:center;
	opacity : 0.8;
}
#agoravai{
    position:relative;
    left:500px;
    float:right;
}

	</style>
</head>
<body>
<!--======================= comeco da div contein ===================-->
<div class="contein" id="contein1">
<ul class="lista" id="menu1">
<li class="lista1" onclick="abreinfoz1()" id="li1"><legend id="legimageq">Novos  Produtos</legend>
<img src="img/novoproduto.png" class="image-con" id="image-con1">
</li>
<li class="lista1" onclick="abreinfoz2()" id="li2"><legend>Pedido de Compra</legend>
<img src="img/pedircompra.png" class="image-con">
</li>
<li class="lista1" onclick="abreinfoz3()" id="li3"><legend>Confirmação de Compra</legend>
<img src="img/confirmarcompra.png" class="image-con">
</li>
<li class="lista1" onclick="abreinfoz4()" id="li4"><legend>Entrada de produtos</legend>
<img src="img/entrar.png" class="image-con">
</li>
</ul>
<div id="espaco">   <!-- div onde irá colocar as outras divs quando clicar no menu -->
<div id="newproduto">
   <form action="adminpublicacao.php" method="POST" enctype="multipart/form-data" id="formprod">
        <input type="file" name="foto-prod" id="fo" required=""><label for="fo"><div id="foto-da-noticia"><h1 id="tii"> adicionar foto do produto</h1></div></label>
<legend class="danewpro">Nome do Produto :</legend><input type="text" name="y1" placeholder="digite o nome do produto"  class="inputnewpro" required="">
<legend class="danewpro">Informações Aditivas :</legend><input type="text" name="y2" placeholder="digite informações sobre o produto" class="inputnewpro" required="">
<legend class="danewpro">Descrição :</legend><input type="text" name="y3" placeholder="digite a descrição do produto" class="inputnewpro" required="">
<legend class="danewpro">Valor :</legend><input type="number" name="y4" placeholder="digite o valor do produto" class="inputnewpro"  required="">
<legend class="danewpro" >Categoria do Produto :</legend>
<select id="danewpro1" name="y5" required="">
           <?php
include 'testephp/Conexao.php';
$sq1="select * from categoriaproduto";
$fica=mysqli_query($con,$sq1); 
while($vreg= mysqli_fetch_row($fica)){
  echo "
<option class='maior' value='$vreg[0]'>$vreg[1]</option>
  ";
}
?>
</select>
<!-- <fieldset id="fielpro">
<legend>Tipo de Produto</legend>
<legend  class="producad">Produto :</legend><input type="radio" name="vai" class="vai">
<legend class="producad">Pet :</legend><input type="radio" name="vai" class="vai">
</fieldset>  -->
<!--  <legend class="" id="agoravai">Dicas do Starpet:</legend><textarea></textarea> -->
<input type="submit" value="salvar"  class="forn" id="buttons1">
<input type="reset" value="apagar" class="forn" id="buttons2">
  </form>
  <div class="rolagemlegal" id="newtabelaproduto">
 <table class="tabelaEditavel" id="">
        <thead>
            <tr>
                <th>Visualizar</th> 
                <th>Nome do produto</th>
                <th>Informações aditivas</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Categoria do Produto</th>


            </tr>
        </thead>
        <tbody>
       <?php
  include('testephp/Conexao.php');
 $res= mysqli_query($con,"select * from produto order by idproduto DESC");
   while($vreg= mysqli_fetch_row($res)){
                echo "
 <tr>
                <td><a href='#' class='link' onclick='abreinfo()''>abrir</a></td>
                <td>$vreg[1]</td>
                <td>$vreg[2]</td>
                <td>$vreg[3]</td>
                <td>$vreg[6]</td>
                <td>$vreg[5]</td>
            </tr>
  ";
               }

       ?>
           
         
        </tbody>
    </table>

<!-- tabbbbeeellalala -->
</div>  <!--fim da div rolagem legal-->
</div>
<!-- comeco da div pedido de compra -->
<div id="pedidodecompra">
      <form class="pesquisa" id="formcom">
<input type="search" class="texto" placeholder="BUSCAR" name="buscacom" id="buscacom">
<img src="img/lupa.png" class="btn" >
</form>
<!-- tabela para inserir pedido comeco -->
<div class="rolagemlegal" id="rolagemlegal4">
    <form action="" method="POST" id="">    <!-- formulario para apagar fornecedor -->
    <table class="tabelaEditavel" id="tabelapedido">
    <thead>
            <tr>
                
                <th>Selecionar</th>
                <th>Código do Produto</th>
                <th>Nome do Produto</th>
                <th>Quantidade</th>
                <th>Quantidade Mínima</th>
            </tr>
        </thead>
        <tbody>
    <tr>
<td><input type="checkbox" name="a" value="" class="checkbox"></td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
</tr>
  <tr>
<td><input type="checkbox" name="a" value="" class="checkbox"></td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
</tr>
<tr>
<td><input type="checkbox" name="a" value="" class="checkbox"></td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
</tr><td><input type="checkbox" name="a" value="" class="checkbox"></td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
</tr><td><input type="checkbox" name="a" value="" class="checkbox"></td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
</tr><td><input type="checkbox" name="a" value="" class="checkbox"></td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
</tr><td><input type="checkbox" name="a" value="" class="checkbox"></td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
</tr><td><input type="checkbox" name="a" value="" class="checkbox"></td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
</tr>
        </tbody>
    </table>
</div>
<input type="submit" value="inserir item de pedido" class="forn" id="inser1">
<input type="reset" value="apagar item de pedido " class="forn" id="inser2">
<!-- <input type="submit" value="finalizar pedido  " class="forn" id="inser3"> -->
</form>
<!-- =======================================agora para saber o que esta pedindo================== -->
<div class="rolagemlegal" id="rolagemlegal5">
    <form action="" method="POST" id="">    <!-- formulario para apagar fornecedor -->
    <table class="tabelaEditavel" id="tabelapedidow">
    <thead>
            <tr>
                
                <th>Selecionar</th>
                <th>Código do Pedido</th>
                <th>Código do Produto</th>
                <th>Nome do Produto</th>
                <th>Quantidade</th>
            </tr>
        </thead>
        <tbody>
    <tr>
<td><input type="checkbox" name="a" value="" class="checkbox"></td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
</tr>
  <tr>
<td><input type="checkbox" name="a" value="" class="checkbox"></td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
</tr>
<tr>
<td><input type="checkbox" name="a" value="" class="checkbox"></td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
</tr><td><input type="checkbox" name="a" value="" class="checkbox"></td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
</tr><td><input type="checkbox" name="a" value="" class="checkbox"></td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
</tr><td><input type="checkbox" name="a" value="" class="checkbox"></td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
</tr><td><input type="checkbox" name="a" value="" class="checkbox"></td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
</tr><td><input type="checkbox" name="a" value="" class="checkbox"></td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
</tr>
        </tbody>
    </table>
</div>
<input type="reset" value="apagar item de pedido " class="forn" id="inser4">
<input type="submit" value="finalizar pedido  " class="forn" id="inser3">
<input type="number" placeholder="Digite aqui a quantidade do produto.." id="qtd" disabled="disabled">
</form>

<!-- =======================================agora fim  para saber o que esta pedindo================== -->
<!-- fim para inserir pedido comeco -->
      <div class="rolagemlegal" id="newtabelaproduto">

 <table class="tabelaEditavel" id="newtabelaproduto1">
        <thead>
            <tr>
                <th>Visualizar</th>
                <th>Código do Pedido</th>
                <th>Data do Pedido</th>
                <th>Quantidade Total do Pedido</th>
                <th>Data da venda</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#" class="link" onclick="abreinfo()">abrir</a></td>
                <td>222222</td>
                <td>no cartão</td>
                <td>Rafael Leonan</td>
                <td>24/03/2019</td>
            </tr>
            <tr>
                <td><a href="#" class="link" onclick="abreinfo()">abrir</a></td>
                <td>Maria Silva</td>
                <td>mariasilva@mail.com</td>
                <td>(81) 8787-8686</td>
                <td>(81) 8787-8686</td>
            </tr>
            <tr>
               <td><a href="#" class="link" onclick="abreinfo()">abrir</a></td>
                <td>José Pedro</td>
                <td>zepedro@meuemail.com</td>
                <td>(84) 3232-3232</td>
                  <td>(84) 3232-3232</td>
            </tr>
              <tr>
                 <td><a href="#" class="link" onclick="abreinfo()">abrir</a></td>
                <td>José Pedro</td>
                <td>zepedro@meuemail.com</td>
                <td>(84) 3232-3232</td>
                <td>(84) 3232-3232</td>
            </tr>
              <tr>
            <td><a href="#" class="link" onclick="abreinfo()">abrir</a></td>
                <td>José Pedro</td>
                <td>zepedro@meuemail.com</td>
                <td>(84) 3232-3232</td>
                <td>(84) 3232-3232</td>
            </tr>
             <tr>
                <td><a href="#" class="link" onclick="abreinfo()">abrir</a></td>
                <td>José Pedro</td>
                <td>zepedro@meuemail.com</td>
                <td>(84) 3232-3232</td>
                <td>(84) 3232-3232</td>
            </tr>
             <tr>
                <td><a href="#" class="link" onclick="abreinfo()">abrir</a></td>
                <td>José Pedro</td>
                <td>zepedro@meuemail.com</td>
                <td>(84) 3232-3232</td>
                 <td>(84) 3232-3232</td>
            </tr>
            <tr>
                <td><a href="#" class="link" onclick="abreinfo()">abrir</a></td>
                <td>José Pedro</td>
                <td>zepedro@meuemail.com</td>
                <td>(84) 3232-3232</td>
                 <td>(84) 3232-3232</td>
            </tr>
        </tbody>
    </table>

<!-- tabbbbeeellalala -->
</div>  <!--fim da div rolagem legal-->
</div>
<!-- fim da div pedido de compra -->
<!--======================== comeco da div confirmacao de compraaaa======== -->
<div id="confirmacaodecompra">
 <form class="pesquisa" id="formcom">
<input type="search" class="texto" placeholder="BUSCAR" name="buscacom" id="buscacom">
<img src="img/lupa.png" class="btn" >
</form>
<!-- tabela para inserir pedido comeco -->
<div class="rolagemlegal" id="rolagemlegal6">
    <form action="" method="POST" id="">    <!-- formulario para apagar fornecedor -->
    <table class="tabelaEditavel" id="tabelapedido">
    <thead>
            <tr>
                
                <th>Selecionar</th>
                <th>Código do Pedido</th>
                <th>Data do Pedido</th>
                <th>Horário do Pedido</th>
                <th>Aprovação</th>
            </tr>
        </thead>
        <tbody>
    <tr>
<td><input type="checkbox" name="a" value="" class="checkbox"></td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
</tr>
  <tr>
<td><input type="checkbox" name="a" value="" class="checkbox"></td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
</tr>
<tr>
<td><input type="checkbox" name="a" value="" class="checkbox"></td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
</tr><td><input type="checkbox" name="a" value="" class="checkbox"></td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
</tr><td><input type="checkbox" name="a" value="" class="checkbox"></td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
</tr><td><input type="checkbox" name="a" value="" class="checkbox"></td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
</tr><td><input type="checkbox" name="a" value="" class="checkbox"></td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
</tr><td><input type="checkbox" name="a" value="" class="checkbox"></td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
<td>R$ 150,00</td>
</tr>
        </tbody>
    </table>
</div>
<input type="submit" value="Aprovar Pedido" class="forn" id="insr1">
<input type="reset" value="desmarcar seleção" class="forn" id="insr2">
</form>
<!-- div para escolher fornecedor do pedido -->
<div class="info-vendas" id="escoforne">
  <!-- <h1>Alterar dados</h1> -->
 <img src="img/x.png" class="x" onclick="fechaesco()">
<h1 id="h1fornecedorw">Selecionar Fornecedor para o pedido de código xxxxx-xxxx</h1>
<!-- ============div selecionafornecedor====== -->
<div id="selecionafornecedorkk">
<form action="" method="POST" id="">
<legend class="legfornt">Fornecedor 1 :</legend> <legend class="legfornt">Fornecedor 2 :</legend> <legend class="legfornt">Fornecedor 3 :</legend> <legend class="legfornt">Fornecedor 4 :</legend>
<select  class="selfornt" required="">                        
<option>Chibinha</option>
<option>Rapidao</option>
<option>ola</option>
</select> <select class="selfornt" required="">                        
<option>Chibinha</option>
<option>Rapidao</option>
<option>ola</option>
</select> <select class="selfornt" required="">                        
<option>Chibinha</option>
<option>Rapidao</option>
<option>ola</option>
</select> <select class="selfornt" required="">                        
<option>Chibinha</option>
<option>Rapidao</option>
<option>ola</option>
</select> 
<input type="submit" name="" value="enviar" class="forn" id="enviarpedidomelhor1">
<input type="reset" name="" value="desmarcar" class="forn" id="enviarpedidomelhor2">
</form>
</div>
<!-- ============div selecionafornecedor====== -->
</div>
<!-- div para escolher fornecedor do pedido -->
</div>
<!--======================== fim da div confirmacao de compraaaa======== -->
<!--============================= comeco da div entrada de produtos============================= -->
<div id="entradadeprodutos">
    

</div>
<!--============================= fim da div entrada de produtos============================= -->
</div><!-- div onde irá colocar as outras divs quando clicar no menu -->
</div>
<?php
  if (isset($_FILES['foto-prod'])):
$a=utf8_decode($_POST['y1']);
$b=utf8_decode($_POST['y2']);
$c=utf8_decode($_POST['y3']);
$d=utf8_decode($_POST['y4']);
$e=utf8_decode($_POST['y5']);
    $con=mysqli_connect("localhost","root","","starpet");
    include 'testephp/Comproduto.php';
//criando um array com os formatos permitidos
  $formatosPermitidos = array("png","jpeg","jpg","JPG",'JPEG','PNG');
   //var_dump($_FILES);
  
$extensao =pathinfo($_FILES['foto-prod']['name'],PATHINFO_EXTENSION);//funcao para peggar a extensao
//  echo" $extensao";

  //agora verificando se aquela extensao existe no noosso arrya
  if(in_array($extensao,$formatosPermitidos)):
  //echo "existe";
    $pasta ="imgprod/";   //para onde vai
      $temporario=$_FILES['foto-prod']['tmp_name'];
      $novoNome= uniqid().".$extensao";
      if(move_uploaded_file($temporario,$pasta.$novoNome)):
        $mensagem= "Upload feito com sucesso";
              $adm = new Comproduto();
              $adm->cadastrarprod($a,$b,$c,$novoNome,$e,$d,$con);
               // echo "<script>window.location.href='adminpublicacao.php';</script>";

      else:
        $mensagem= "erro,nao foi possivel fazer o upload";
      endif;
     else:
      //echo "nao existe";
             echo "<script>alert('insira uma imagem nos padroes desejados')</script>";
     endif;
    
  endif;




?>
<!--======================= termino da div contein ===================-->
<script type="text/javascript">
$("#fo").on('change', function () {
 
    if (typeof (FileReader) != "undefined") {
 
        var image_holder = $("#foto-da-noticia");
        image_holder.empty();
 
        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img />", {
                "src": e.target.result,
                "class": "thumb-image"
            }).appendTo(image_holder);
        }
        image_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
    } else{
        alert("Erro, eu sou viado e n consigo fazer o codigo.");
    }
});
</script>

<footer>

<div class="inforodape" id="end">
    <img src="img/logostar.png" id="idlogrod">
<ul>
<li>Rua Capitão Nestor Góis 411</li>
<li>Bairro Ellery </li>
<li>Petshop Star Pets</li>
<li>Copyright © 2019 Pet Center Comércio e Participações S/A - Todos os direitos reservados</li>
</ul>
</div>
<div class="inforodape" id="contato">
<ul>
<li>Contatos :</li>
<li>(85) 98533-7317</li>
<li>(85) 98533-7317</li>
<li>(85) 98533-7317</li>
<li>(85) 98533-7317</li>
</ul>
</div>
<div class="inforodape" id="redes">
<ul>
<h1 id="rs">Redes Sociais:</h1>
<li><img src="img/insta2.png" class="rede1"></li>
<li><img src="img/tt1.png" class="rede1"></li>
<li><img src="img/face1.png" class="rede1"></li>
</ul>
</div>
</footer>
</body>

</html>