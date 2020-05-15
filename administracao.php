<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Administração</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<link rel="stylesheet" type="text/css" href="css/cssadmin.css">
    <script type="text/javascript" src="js/js.js"></script>
    <script src="jquery/jquery-3.3.1.min.js"></script>
	<style type="text/css">
#espaco{
	background-image:url("img/pet.png");
	background-repeat:no-repeat;
	background-size: 600px;
	background-position:center;
	opacity : 0.8;
}
#abrerelatório{
    background-image:url("img/relatorio2.jpg"); 
    /*background-size:cover;*/
}
body{
  /*  background-repeat:no-repeat;
       background-image:url("img/gatos-de-cor-laranja.jpg");*/
}

	</style>
	
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 -->
</head>
<body>
	<!--======================= comeco da div contein ===================-->
<div class="contein" id="contein1">
<ul class="lista" id="menu1">
<li class="lista1" onclick="abre1()" id="li1"><legend>Controle de vendas</legend>
<img src="img/estoque.png" class="image-con">
</li>
<li class="lista1" onclick="abre2()" id="li2"><legend>Produtos em alta</legend>
<img src="img/emalta.png" class="image-con">
</li>
<li class="lista1" onclick="abre3()" id="li3"><legend>Relatório de Vendas</legend>
<img src="img/relatorio.png" class="image-con">
</li>
<li class="lista1" onclick="abre4()" id="li4"><legend>Fornecedores</legend>
<img src="img/fornecedor.png" class="image-con">
</li>
</ul>
<div id="espaco">   <!-- div onde irá colocar as outras divs quando clicar no menu -->
    
<div class="info" id="controledeestoque">
    <!-- ==============================div numero-vendaassssssss=============-->
<div class="informacoes-sobre" id="num-vendas">
<ul>
<img src="img/cartaoc.png" class="imagecartao">
<li> No cartão : <span>500 vendas</span> </li>
<img src="img/money.png" class="imagecartao">
<li> No débito : <span>600 vendas</span></li>
<img src="img/levar.png" class="imagecartao">
<li> Para tirar na loja : <span>700 vendas</span></li>
<img src="img/dinner.png" class="imagecartao">
<li> à vista : <span>800 vendas</span></li>
</ul>
</div>
<!-- ==============================div numero-vendaassssssss=============-->
<form class="pesquisa" id="pesquisa1">
<input type="search" class="texto" placeholder="BUSCAR" name="buscacom" id="buscacom">
<img src="img/lupa.png" class="btn" >
</form>
<!-- tabeeelllaaaa -->

<!--comeco da div rolagem legal-->
    <img src="img/data.png" class="data">
<div class="rolagemlegal">
 <table class="tabelaEditavel">
        <thead>
            <tr>
                <th>Visualizar</th>
                <th>Código da venda</th>
                <th>Categoria de venda</th>
                <th>Cliente</th>
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
        </tbody>
    </table>

<!-- tabbbbeeellalala -->
</div>  <!--fim da div rolagem legal-->
<div class="info-vendas" >
    <legend>Valor Total da compra :</legend>
    <textarea cows="10" rows="1" class="textarea" disabled>R$ 150,00</textarea>
    <img src="img/x.png" class="x" onclick="fechainfo()" >
    <div class="rolagemlegal" id="rolagemlegal1">
    <table class="tabelaEditavel" id="tabela-info">
    <thead>
            <tr>
                <th>Quantidade</th>
                <th>Produto</th>
                <th>Valor Unitário</th>
                <th>Valor Total</th>
            </tr>
        </thead>
        <tbody>
    <tr>
<td>3</td>
<td>jumento racao</td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
</tr>
  <tr>
<td>3</td>
<td>jumento racao</td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
</tr>
  <tr>
<td>3</td>
<td>jumento racao</td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
</tr>
  <tr>
<td>3</td>
<td>jumento racao</td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
</tr>
  <tr>
<td>3</td>
<td>jumento racao</td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
</tr>

        </tbody>
    </table>
 </div>  <!-- fim rolagemlegal -->
</div>
</div>
<!-- divvv produtos em alta====================== -->
<div id="produtoalta">
      <img src="img/data.png" class="data">
    <form class="pesquisa" id="formcom">
<input type="search" class="texto" placeholder="BUSCAR" name="buscacom" id="buscacom">
<img src="img/lupa.png" class="btn" >
</form>
    <div class="rolagemlegal" id="rolagemlegal2">
    <table class="tabelaEditavel" >
    <thead>
            <tr>
                <th>Visualizar</th>
                <th>Produto ou Pet</th>
                <th>Número de vendas</th>
                <th>Número de Visualizacões</th>
                <th>Número de comentário</th>
            </tr>
        </thead>
        <tbody>
    <tr>
<td><a href="#" class="link" onclick="abreinfo1()">abrir</a></td>
<td>3</td>
<td>jumento racao</td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
</tr>
  <tr>
    <td><a href="#" class="link" onclick="abreinfo1()">abrir</a></td>
<td>3</td>
<td>jumento racao</td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
</tr>
  <tr>
<td><a href="#" class="link" onclick="abreinfo1()">abrir</a></td>
<td>3</td>
<td>jumento racao</td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
</tr>
<tr>
<td><a href="#" class="link" onclick="abreinfo1()">abrir</a></td>
<td>3</td>
<td>jumento racao</td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
</tr>

<tr>
<td><a href="#" class="link" onclick="abreinfo1()">abrir</a></td>
<td>3</td>
<td>jumento racao</td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
</tr>

<tr>
<td><a href="#" class="link" onclick="abreinfo1()">abrir</a></td>
<td>3</td>
<td>jumento racao</td>
<td>R$ 50,00</td>
<td>R$ 150,00</td>
</tr>
        </tbody>
    </table>
</div>
<div class="info-vendas" id="carac-prod">
<h1>Descrição do Produto</h1>
<img src="img/x.png" class="x" onclick="fechainfo1()" >
<img src="img/3.jpg" id="image-top">
<ul>
<li>Nome : <span>Ração Pitibul</span></li>
<li>Categoria : <span>Rações</span></li>
<li>Descrição :<span> A melhor ração do universo</span></li>
<li>Código de barra : <span>222</span></li>
</ul>
</div>
<img src="img/brinquedos.jpg" id="one" class="p1"><legend id="leg1">brinquedo 22</legend>
<img src="img/Cat.jpg" id="two" class="p1"><legend id="leg2">gato 33</legend>
<img src="img/3.jpg" id="three" class="p1"><legend id="leg3">racao jumento</legend>
<img src="img/podium.png" class="podium">
</div>
<!-- divvv produtos em alta====================== -->
<!-- =========================divvv fornecedores====================== -->
<div id="fornecedores">
   <img src="img/data.png" class="data">   
 <form class="pesquisa" id="formcompes1" action="adicionaadmin.php">
<input type="search" class="texto" placeholder="BUSCAR" name="buscacomin1" id="buscacomin1">
<img src="img/lupa.png" class="btn" >
</form>
<form action='adicionaadmin.php' method='POST' id='excluifornr'>  
 <div class="rolagemlegal" id="rolagemlegal3">
   <?php
include 'testephp/Conexao.php';
   // include('Conexao.php');
            $res= mysqli_query($con,"select * from fornecedor order by idfornecedor DESC");
            echo "
    <table class='tabelaEditavel' >
    <thead>
            <tr>
                <th>Alterar</th>
                <th>Excluir</th>
                <th>CNPJ</th>
                <th>Nome da Empresa</th>
                <th>Categoria</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>";
            while($vreg= mysqli_fetch_row($res)){
                echo "
    <tr>
<td><a href='php/adicionaadmin.php?a=$vreg[0]' class='link' onclick='abreinfo2()'>ação</a></td>
<td><input type='checkbox' name='a[]' value='$vreg[0]' class='checkbox'></td>
<td>$vreg[1]</td>
<td>$vreg[2]</td>
<td>$vreg[3]</td>
<td>$vreg[4]</td>
<td>$vreg[5]</td>
<td>$vreg[6]</td>

</tr>
  ";
               }
   echo "</tbody>
    </table> ";


   ?>
</div>
<input type="submit" value="Excluir" class="forn" id="forn1">
<input type="reset" value="Limpar" class="forn" id="forn2">
</form>  <!-- fim do formulario de exclusao do fornecedor -->
<div class="info-vendas" id="info-altera-forn">
<h1>Alterar dados</h1>
 <img src="img/x.png" class="x" onclick="fechainfo2()" >
 <form action="php/adicionaadmin.php" method="POST" id="alterverdadefonr">
<legend>Cnpj:</legend><input type="number" placeholder="###-####-###-#" class="pc" name="altefornu1" required>
<legend>Nome:</legend><input type="text" placeholder="digite o nome da empresa" class="pc" name="altefornu2" required>
<legend>Endereço:</legend><input type="text" placeholder="digite o novo endereço" class="pc" name="altefornu3" required>
<legend>Email:</legend><input type="text" placeholder="#@outlook.com" class="pc" name="altefornu4">
<legend>Telefone:</legend><input type="tel" placeholder="(##) #####-####" class="pc" name="altefornu5" required>
<input type="submit" value="excluir" class="en" id="en1">
<input type="reset" value="apagar" class="en" id="en2">
</form>
</div>
<input type="button" value="cadastrar" class="button" onclick="abrecasforn()" ondblclick="fechacasforn()"><img src="img/fornecedorb.png" id="fornbut"></input>
<div id="cad-forn">
<form action="php/adicionaadmin.php" method="POST" id="formfornad">
<fieldset id="fielcarfornecedor">
 <legend>Categoria de fornecedor:</legend>
<select name="categoriasol" required>
  <option value="1">Ração</option>
  <option value="saab">Produtos de Limpeza</option>
  <option value="mercedes">Brinquedos</option>
  <option value="audi">Jogos</option>
</select>
</fieldset>
<img src="img/fo.jpg" id="fo">
<legend>Nome da empresa:</legend><input type="text" name="forncalx1" maxlength="300" placeholder="digite o nome da empresa" required>
<legend>CNPJ:</legend><input type="number" name="forncalx2" maxlength="300" placeholder="###-####-###-#" required>
<legend>Endereço:</legend><input type="text" name="forncalx3" maxlength="300" placeholder="digite o endereço da empresa" required>
<legend>Telefone:</legend><input type="tel" name="forncalx4" maxlength="300" placeholder="(##) #####-####" required>
<legend>Email:</legend><input type="email" name="forncalx5" maxlength="300" placeholder="#@outlook.com" required>
<input type="submit" value="cadastrar" id="cad1">
<input type="reset" value="apagar" id="cad2">
</form>
</div>
</div>
<!-- =========================divvv fornecedores====================== -->
<!---================div relatorio==========================-->
<div id="relatorio">
<h1>Gerar Relatórios</h1>
<button>Gerar relatório de vendas</button>
<button>Gerar relatório de fornecedores</button>
<button>Gerar relatório de vendas</button>
<button>Gerar relatório de Produtos que estão em falta</button>
<div id="abrerelatório">
</div>
</div>
<!---================div relatorio==========================-->
</div><!-- termino da div espaco -->
<!-- divvvv controle de estoque -->

<!-- divvvv controle de estoque -->
</div>
<!--======================= termino da div contein ===================-->
	
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
<script type="text/javascript">
     $(document).ready(function(){

    $(document).on('submit','#formfornad',function(event){
       event.preventDefault();
      var dados=$(this).serialize();
      var res=confirm("Deseja realizar mesmo esta ação ?");
      if (res) {
        if(dados==""){
          alert("Você precisa selecionar ao menos um registro!");
        }else{
        $.ajax({
            url: 'php/adicionaadmin.php',
            method: 'post',
            dataType: 'html',
            data: dados,
            success: function(data){
                $('#rolagemlegal3').html(data);
            }
        });
        //coloco aqui o resto das chaves
      }
      }
    });


});
      $(document).ready(function(){

        $('#buscacomin1').keyup(function(){
            $('#formcompes1').submit(function(){
                var dados = $(this).serialize();

                $.ajax({
                    url: 'php/adicionaadmin.php',
                    method: 'post',
                    dataType: 'html',
                    data: dados,
                    success: function(data){
                        $('#rolagemlegal3').empty().html(data);
                    }
                });

                return false;
            });

            $('#formcompes1').trigger('submit');

        });
    });
      $(document).ready(function(){

    $(document).on('submit','#excluifornr',function(event){
       event.preventDefault();
      var dados=$(this).serialize();
      var res=confirm("Deseja realizar mesmo esta ação ?");
      if (res) {
        if(dados==""){
          alert("Você precisa selecionar ao menos um registro!");
        }else{
        $.ajax({
            url: 'php/adicionaadmin.php',
            method: 'post',
            dataType: 'html',
            data: dados,
            success: function(data){
                $('#rolagemlegal3').html(data);
            }
        });
        //coloco aqui o resto das chaves
      }
      }
    });


});
  $('#rolagemlegal3').on('click','a',function(event){
  event.preventDefault();
  var urlget=this.href;
  var envio2 = $(this).serialize();
  

  $.ajax({

    url:urlget,
    dataType: 'html',
    data: envio2,
    type: 'GET',
    success: function(data){

      $('#info-altera-forn').html(data);
    }
  });

  return false;

});
  $(document).ready(function(){

    $(document).on('submit','#alterverdadefonr',function(event){
       event.preventDefault();
      var dados=$(this).serialize();
      var res=confirm("Deseja realizar mesmo esta ação ?");
      if (res) {
        if(dados==""){
          alert("Você precisa selecionar ao menos um registro!");
        }else{
        $.ajax({
            url: 'php/adicionaadmin.php',
            method: 'post',
            dataType: 'html',
            data: dados,
            success: function(data){
                $('#rolagemlegal3').html(data);
            }
        });
        //coloco aqui o resto das chaves
      }
      }
    });


});
</script>
</body>
</html>