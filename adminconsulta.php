<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>
  <?php
session_start();
  ?>
	<meta charset='utf-8' />
	<title>Controle de consultas</title>
	<link rel="stylesheet" type="text/css" href="css/cssadmin.css">
   <script type="text/javascript" src="js/js.js"></script>
</head>
<body>
	<div class="contein" id="contein1novo">
		<ul class="lista" id="menu1">
<li class="lista1" onclick="abre1w()" id="c1"><legend id="ajeita1">Controle de Consultas</legend>
<img src="img/dpet.png" class="image-con" id='image-conte1s'>
</li>
<li class="lista1" onclick="abre2w()" id="c2"><legend id="ajeita2">Categoria de Consultas</legend>
<img src="img/icons8-categoria-100.png" class="image-con"  id='image-conte3s'>
</li>
<li class="lista1" onclick="abre3w()" id="c3"><legend id="ajeita3">Cadastrar Veterinário</legend>
<img src="img/veterinary.png" class="image-con" id="image-contec">
</li>
<li class="lista1" onclick="abre4w()" id="c4"><legend id="ajeita4">Alterar Perfil</legend>
<img src="img/alter.png" class="image-con " id='image-conte2s'>
</li>
</ul>
	<div id="espacocon">
		<div class="consu" id="consul1">
     <div id="piscatrue">
        10
    </div>
    <div  id="pisfalse">
        30
    </div>

<?php
include 'conexao.php';
include 'calendario.php';
?>
<input type="button" class="button" value="Abrir Consultas" id="abriconsulta" onclick="abreidvet()"><img src="img/veterinary.png" id="butconsvet">
<div id="idveterinary">
 <img src="img/x.png" class="x" onclick="fechaidvet()" >
    <h1 id="titlu">Consultas Marcadas</h1>
    <form action="php/adicionaveterinario.php" method="POST" id="">    <!-- formulario para apagar fornecedor-->
<div class="rolagemlegal" id="rolagemlegalwvetcosnul1">
    <table class="tabelaEditavel" >
    <thead>
            <tr>
                <th>Validar</th>
                <th>idconsulta</th>
                <th>Veterinário</th>
                <th>Cliente</th>
                <th>Horário</th>
                <th>Categoria</th>
                
            </tr>
        </thead>
        <tbody>
<?php
include('testephp/Conexao.php');
$res= mysqli_query($con,"select dta_consulta,v.nome,cat.descricaol,con.horario,pe.nome,pe.idade,pe.peso,pe.raca,c.nome,con.idconsulta from consulta as con join cliente as c on con.cliente_idcliente = c.idcliente join veterinario v on con.veterinario_idveterinario = v.idveterinario join categoriaconsulta cat on con.categoriaconsulta_idcategoriaconsulta=cat.idcategoriaconsulta join pet as pe on con.pet_idpet=pe.idpet  where v.idveterinario=1");
while($vreg= mysqli_fetch_row($res)){
                echo "
    <tr>
<td><input type='checkbox' name='aa' value=''></td>
<td>$vreg[9]</td>
<td>$vreg[1]</td>
<td>$vreg[8]</td>
<td>$vreg[3]</td>
<td>$vreg[2]</td>

</tr>
  ";
               }
?>

        </tbody>
    </table>
</div>
<input type="submit"  class="forn" value="Confirmar" id="fornvet1consul">
<input type="reset"  class="forn" value="apagar" id="fornvet2consul2">
</form>
<img src="img/veterinary.png" id="vetbrt">
</div>
		
		</div>
		 <div class="consu" id="consul2">
         <form class="pesquisa" id="pesquisa1cat" action="adminconsulta.php" method="POST" >
<input type="search" class="texto" placeholder="BUSCAR" name="buscacompescat1" id="buscacompescat1">
<img src="img/lupa.png" class="btn" >
</form>
<form action="php/adicionaadmin.php" method="POST" id="apagacatrafa">  
 <div class="rolagemlegal" id="rolagemlegalwvetapar">
  <?php
 include('Conexao.php');
       $res= mysqli_query($con,"select * from categoriaconsulta order by idcategoriaconsulta DESC");
    echo "<table class='tabelaEditavel' id='aqui'>
    <thead>
            <tr>
                <th>Alterar</th>
                <th>Excluir</th>
                <th>Id categoria</th>
                <th>Descrição</th>
                
            </tr>
        </thead>
        <tbody>";

 while($vreg= mysqli_fetch_row($res)){
                echo "
    <tr>
<td><a href='#' class='link' onclick='abreinfo()' value='$vreg[1]'>Editar</td>
<td><input type='checkbox' name='catdd[]' value='$vreg[0]' class='checkbox'></td>
<td>$vreg[0]</td>
<td>$vreg[1]</td>
</tr>
  ";
               }
echo "
  </tbody>
    </table>
";
  ?>
</div>
<input type="button" class="button" value="Cadastrar" id="btnvet" onclick="abrecasfornw()" ondblclick="fechacasfornw()"><img src="img/iconecat.png" id="catvet">
<input type="submit" value="Excluir" class="forn" id="forn1">
<input type="reset" value="apagar" class="forn" id="forn2">
</form>  <!-- fim do formulario de exclusao da categoria do fornecedor -->
<div id="aparw">
<form action="php/addcatconsulta.php" method="POST" id="catcon00">
<input type="text" class="inputnewpr " id="vetpro1w" size="100" maxlength="150" placeholder="digite o nome de uma nova categoria..."  name="vetpro1w" required>  
<input type="submit" value="Cadastrar" class="forn" id="forn1w">
<input type="reset" value="apagar" class="forn" id="forn2w">
</form>
</div>
        <!-- termina ==============================================================-->
        </div>
		<div class="consu" id="consul3">
			<form class="pesquisa" id="pesquisa1vetha">
<input type="search" class="texto" placeholder="BUSCAR" name="buscacomvethaum" id="buscacomvethaum">
<img src="img/lupa.png" class="btn" >
</form>
<div class="rolagemlegal" id="rolagemvet">
    <?php
 include('testephp/Conexao.php');
 $res= mysqli_query($con,"select * from veterinario order by idveterinario DESC");
echo "<table class='tabelaEditavel'  id='tablevet'>
 <thead>
   <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Email</th>
                <th>Login</th>
                <th>Senha</th>
                <th>Telefone</th>
                
            </tr>
        </thead>
        <tbody>";
    ?>

        	<?php
 while($vreg= mysqli_fetch_row($res)){
                echo "
    <tr>
<td>$vreg[0]</td>
<td>$vreg[1]</td>
<td>$vreg[2]</td>
<td>$vreg[3]</td>
<td>$vreg[4]</td>
<td>$vreg[5]</td>
<td>$vreg[6]</td>

</tr>
  ";
               }
        	?>
            <?php
            echo "
        </tbody>
    </table>";?>

<!-- tabbbbeeellalala -->
</div>  <!--fim da div rolagem legal-->
<form action="php/adicionaveterinario.php" method="POST" id="vetaddphp">
<input type="text" class="inputnewpr " id="vetpro1" size="100" maxlength="150" placeholder="digite o seu nome..." required=""  name="vetaddphp1">	
<input type="end" class="inputnewpr " id="vetpro2" size="100" maxlength="150" placeholder="digite o seu endereço..." required="" name="vetaddphp2">
<input type="email" class="inputnewpr " id="vetpro3" size="100" maxlength="150" placeholder="digite o seu email..." required="" name="vetaddphp3">
<input type="text" class="inputnewpr " id="vetpro4" size="100" maxlength="150" placeholder="digite o seu login..." required="" name="vetaddphp4">
<input type="text" class="inputnewpr " id="vetpro5" size="100" maxlength="150" placeholder="digite o sua senha..." required="" name="vetaddphp5">
<input type="number" class="inputnewpr " id="vetpro6" size="100" maxlength="150" placeholder="digite o seu telefone..." required="" name="vetaddphp6">
<input type="submit" value="Cadastrar" class="forn" id="fornvet1" >
<input type="reset" value="Apagar" class="forn" id="fornvet2" >
</form>


		</div>
		<div class="consu" id="consul4">
          <form action="adminconsulta.php" method="POST" enctype="multipart/form-data" id="fotoaltkk">
        <input type="file" name="foto-da-noticia" id="fo" ><label for="fo">
          <input type="submit" value="Alterar" class="forn" id='ajeitadinho'>
        </form>
			<div id="foto-da-noticia1">
				<h1 id="tii1">Adicionar foto do Perfil</h1>
			</div>
		</label>
		<div class="rolagemlegal" id="perfilvet" >
<?php

include('Conexao.php');
$id=$_SESSION['idadm'];
 $sql= "select * from veterinario where idveterinario=$id" ;
    $res=mysqli_query($con,$sql);

echo "<table class='tabelaEditavel'  id='perfilvettable'>
    <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Email</th>
                <th>Login</th>
                <th>Senha</th>
                <th>Telefone</th>
                
            </tr>
        </thead>
        <tbody>";
         while($vreg= mysqli_fetch_row($res)){
                echo "
    <tr>
<td>$vreg[0]</td>
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
    </table>";
    ?>
  </div>
  <form action="php/adicionaveterinario.php" method="POST" enctype="multipart/form-data" id="formprod">
<h1 id="legendavet">* Você pode deixar em branco se não houve a necessidade de alterações</h1>
<input type="text" class="inputnewpr " id="vetpro1" size="100" maxlength="150" placeholder="digite o seu novo nome..."  name="altefornu1alte1" >	
<input type="end" class="inputnewpr " id="vetpro2" size="100" maxlength="150" placeholder="digite o seu novo endereço..."  name="altefornu1alte2">
<input type="email" class="inputnewpr " id="vetpro3" size="100" maxlength="150" placeholder="digite o seu novo email..."  name="altefornu1alte3">
<input type="text" class="inputnewpr " id="vetpro4" size="100" maxlength="150" placeholder="digite o seu novo login..."  name="altefornu1alte4">
<input type="text" class="inputnewpr " id="vetpro5" size="100" maxlength="150" placeholder="digite o sua novo senha..."  name="altefornu1alte5">
<input type="number" class="inputnewpr " id="vetpro6" size="100" maxlength="150" placeholder="digite o seu novo telefone..."  name="altefornu1alte6">
<?php
$id=$_SESSION['idadm'];
echo "
<input type='hidden'   name='idvetsal' value='$id'>
";
?>
<input type="submit" value="Alterar" class="forn" id="fornvet1" >
<input type="reset" value="Apagar" class="forn" id="fornvet2" >	
	</form><!--form do final para alterar-->
		</div>
	</div>
	</div>
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
<?php
$id=$_SESSION['idadm'];
  if (isset($_FILES['foto-da-noticia'])):
    $con=mysqli_connect("localhost","root","","starpet");
    include 'testephp/Comveterinario.php';
//criando um array com os formatos permitidos
  $formatosPermitidos = array("png","jpeg","jpg","JPG",'JPEG','PNG');
   //var_dump($_FILES);
  
$extensao =pathinfo($_FILES['foto-da-noticia']['name'],PATHINFO_EXTENSION);//funcao para peggar a extensao
//  echo" $extensao";

  //agora verificando se aquela extensao existe no noosso arrya
  if(in_array($extensao,$formatosPermitidos)):
  //echo "existe";
    $pasta ="imgvet/";   //para onde vai
      $temporario=$_FILES['foto-da-noticia']['tmp_name'];
      $novoNome= uniqid().".$extensao";
      if(move_uploaded_file($temporario,$pasta.$novoNome)):
        $mensagem= "Uploaf feito com sucesso";
              $adm = new Comveterinario();
              $adm->alterafoto($novoNome,$id,$con);
      else:
        $mensagem= "erro,nao foi possivel fazer o upload";
      endif;
     else:
      //echo "nao existe";
             echo "<script>alert('insira uma imagem nos padroes desejados')</script>";
     endif;
    
  endif;




?>
</footer>
<script type="text/javascript">
$("#fo").on('change', function () {
 
    if (typeof (FileReader) != "undefined") {
 
        var image_holder = $("#foto-da-noticia1");
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
        alert("Este navegador nao suporta FileReader.");
    }
});
  $(document).ready(function(){

    $(document).on('submit','#vetaddphp',function(event){
       event.preventDefault();
      var dados=$(this).serialize();
      var res=confirm("Deseja realizar mesmo esta ação ?");
      if (res) {
        if(dados==""){
          alert("Você precisa selecionar ao menos um registro!");
        }else{
        $.ajax({
            url: 'php/adicionaveterinario.php',
            method: 'post',
            dataType: 'html',
            data: dados,
            success: function(data){
                $('#rolagemvet').html(data);
            }
        });
        //coloco aqui o resto das chaves
      }
      }
    });


});
  $(document).ready(function(){

    $(document).on('submit','#formprod',function(event){
       event.preventDefault();
      var dados=$(this).serialize();
      var res=confirm("Deseja realizar mesmo esta ação ?");
      if (res) {
        if(dados==""){
          alert("Você precisa selecionar ao menos um registro!");
        }else{
        $.ajax({
            url: 'php/adicionaveterinario.php',
            method: 'post',
            dataType: 'html',
            data: dados,
            success: function(data){
                $('#perfilvet').html(data);
            }
        });
        //coloco aqui o resto das chaves
      }
      }
    });


});
  //fazendo
   $(document).ready(function(){

        $('#buscacomvethaum').keyup(function(){
            $('#pesquisa1vetha').submit(function(){
                var dados = $(this).serialize();

                $.ajax({
                    url: 'php/adicionaveterinario.php',
                    method: 'post',
                    dataType: 'html',
                    data: dados,
                    success: function(data){
                        $('#rolagemvet').empty().html(data);
                    }
                });

                return false;
            });

            $('#pesquisa1vetha').trigger('submit');

        });
    }); 
   // to fazendo
   $(document).ready(function(){

        $('#buscacompescat1').keyup(function(){
            $('#pesquisa1cat').submit(function(){
                var dados = $(this).serialize();

                $.ajax({
                    url: 'php/addcatconsulta.php',
                    method: 'post',
                    dataType: 'html',
                    data: dados,
                    success: function(data){
                        $('#aqui').empty().html(data);
                    }
                });

                return false;
            });

            $('#pesquisa1cat').trigger('submit');

        });
    });
   // to fazendo
     $(document).ready(function(){

    $(document).on('submit','#catcon00',function(event){
       event.preventDefault();
      var dados=$(this).serialize();
      var res=confirm("Deseja realizar mesmo esta ação ?");
      if (res) {
        if(dados==""){
          alert("Você precisa selecionar ao menos um registro!");
        }else{
        $.ajax({
            url: 'php/addcatconsulta.php',
            method: 'post',
            dataType: 'html',
            data: dados,
            success: function(data){
                $('#rolagemlegalwvetapar').html(data);
            }
        });
        //coloco aqui o resto das chaves
      }
      }
    });


});  
     $(document).ready(function(){

    $(document).on('submit','#apagacatrafa',function(event){
       event.preventDefault();
      var dados=$(this).serialize();
      var res=confirm("Deseja realizar mesmo esta ação ?");
      if (res) {
        if(dados==""){
          alert("Você precisa selecionar ao menos um registro!");
        }else{
        $.ajax({
            url: 'php/addcatconsulta.php',
            method: 'post',
            dataType: 'html',
            data: dados,
            success: function(data){
                $('#rolagemlegalwvetapar').html(data);
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