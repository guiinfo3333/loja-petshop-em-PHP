<!DOCTYPE html>
<html>
<head>
	<title>Usuárrio Comum</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="user_comum.css">
	 <script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
</head>
<body>
<?php
    // Error_reporting (0);
    session_start();
    if (!isset($_SESSION['nome'])) {
    echo "<script>alert('você precisa está logado!');</script>";
echo "<script>window.location.href='noticianews.php';</script>";
}
    ?>
<!-- =============================================== COMEÇO DO DA DIV PRINCIPAL ================================================-->

<header>
	<center>
<ul id="lista">
	<h3 id="vt"><a href="indexnormal.php"><img src="ICONES/back.png" id="ico_ajuda">Voltar á página Inicial</a></h3>
	<li id="botao" onclick="troca1()"><img src="ICONES/ed.png"/><b id="ico">Minhas Informações</b></li>
	<li id="botao" onclick="troca2()"><img src="ICONES/pet.png"/><b id="ico">Meu Pet</b></li>
	<li id="botao" onclick="troca3()"><img src="ICONES/purc.png"/><b id="ico">Minhas Compras</b></li>
	<li id="botao" onclick="troca4()"><img src="ICONES/cons.png"/><b id="ico">Agendar Consulta</b></li>
	<li id="botao" onclick="troca5()"><img src="ICONES/avaliacao.png"/><b id="ico">Minhas Avaliações</b></li>
	<h3 id="sair" onclick="sair()"><img src="ICONES/sairacc.png" id="icon_sair">Sair</h3>
</ul>
</center>
</header>

<div id="conteudoprincipal">

<center>
<div id="tela1">
	<center><h1 style="font-family:cursive; color:#e56a05;">Minhas informações</h1></center>
	<fieldset id="fil" class="textBorder">
		<legend style="font-family:cursive; color:#e56a05;">Meus Dados:</legend>
		<?php
		include 'conexao.php';      
		$sql= "select*from cliente where idcliente=1;";
		$res=mysqli_query($conn,$sql);
		while($vreg= mysqli_fetch_row($res)){

		?>
	<table class="tbinfo" BORDER RULES=none width="300">
		<tr>
			<td class="letras"><b>Nome:</b></td> <td class="letras"><b> <?php echo $vreg[1];?></b></td>
		</tr>
		<tr>
			<td class="letras"><b>Email:</b></td> <td class="letras"> <b> <?php echo $vreg[3];?></b></td>
		</tr>
		<tr>
			<td class="letras"><b>Senha:</b></td> <td class="letras"><b>  <?php echo $vreg[4];?></b></td>
		</tr>
		<tr>
			<td class="letras"><b>Endereço:</b></td> <td class="letras"><b>  <?php echo $vreg[2];?></b></td>
		</tr>
		<tr>
			<td class="letras"><b>Telefone:</b></td> <td class="letras"><b>  <?php echo $vreg[8];?></b></td>
		</tr>
		<tr>
			<td class="letras"><b>CEP</b></td> <td class="letras"><b>  <?php echo $vreg[7];?></b></td>
		</tr>
		<tr>
			<td class="letras"><b>Cpf:</b></td> <td class="letras"><b>  <?php echo $vreg[6];?></b></td>
		</tr>
		<tr><td><h6 onclick="abrir('Dalterar')" id="lt">Deseja alterar seus dados?<img src="ICONES/editar.png" id="icon_new"/></h6></td></tr>
	</table>
	<!-- <label id="label"><img src=fotousucomum/<?php echo $vreg[5];?> title="Click em 'Alterar meu dados' para adiconar uma foto de perfil." id="img_perfil"></label> -->
	<?php
}
mysqli_close($conn);
	?>
	<form name="form01" method="POST" action="Tela_Usuario.php" id="form01">
	<div id="Dalterar">
	<table class="tbalterar">
		<caption style="font-family:cursive; color:black;">Alterar Minhas Informações</caption>
		<tr bgcolor="#FFDEAD">
			<td><b>Novo Nome:</b></td><td><input type="text" name="Nnome" placeholder="Novo nome..."></td>
		</tr>
		<tr bgcolor="#FFDEAD">
			<td><b>Novo Email:</b></td><td><input type="Email" name="Nemail" placeholder="@Gmail.com..."></td>
		</tr>
		<tr bgcolor="#FFDEAD">
			<td><b>Novo Cpf:</b></td><td><input type="text" name="Ncpf" placeholder="###.###.###-##"></td>
		</tr>
		<tr bgcolor="#FFDEAD">
			<td><b>Novo Telefone:</b></td><td><input type="text" name="Ntel" placeholder="(##) # ####-####"></td>
		</tr>
		<tr bgcolor="#FFDEAD">
			<td><b>Nova Senha:</b></td><td><input type="password" name="Nsenha" placeholder="Nova senha..."></td>
		</tr>
		<tr>
			<td align="middle"><input type="submit" name="enviarUsu" value="Editar"/></td><td align="middle"><input type="button" name="fechar" value="Fechar" onclick="abrir('Dalterar')"/></td>
		</tr>
		</table>
		<!-- <label for="ft_perfil" id="label0"><h3 style="text-align: center; color:black;">Alterar Minha Foto?</h3></label>
		<input type="file" name="file" id="ft_perfil"> -->
	</div>
	</form>
	<?php
if (isset($_POST['enviarUsu'])) {
  $idusualtera=$_SESSION["id"];
  $newnome=$_POST['Nnome'];
  $newcpf=$_POST['Ncpf'];
  $newemail=$_POST['Nemail'];
  $newsenha=$_POST['Nsenha'];
  $newtel=$_POST['Ntel'];
if ($newnome!=="") {
include 'conexao.php';
$sql="UPDATE `starpet`.`cliente` SET `nome` = '$newnome' WHERE `cliente`.`idcliente` =  $idusualtera;";
$res=mysqli_query($conn,$sql);
$ca=mysqli_affected_rows($conn);
        if ($ca>0) {
      echo "<script>alert('Nome  alterado com sucesso !');</script>";
        }
        mysqli_close($conn);
}
if ($newcpf!=="") {
include 'conexao.php';
$sql="UPDATE `starpet`.`cliente` SET `senha` = '$newcpf' WHERE `cliente`.`idcliente` =  $idusualtera;";
$res=mysqli_query($conn,$sql);
$ca=mysqli_affected_rows($conn);
        if ($ca>0) {
      echo "<script>alert('Senha alterada com sucesso!');</script>";
        }
        mysqli_close($conn);
}
if ($newemail!=="") {
include 'conexao.php';
$sql="UPDATE `starpet`.`cliente` SET `email` = ' $newemail' WHERE `cliente`.`idcliente` =  $idusualtera;";
$res=mysqli_query($conn,$sql);
$ca=mysqli_affected_rows($conn);
        if ($ca>0) {
      echo "<script>alert('Email  alterado com sucesso!');</script>";
        }
        mysqli_close($conn);
}
if ($newtel!=="") {
include 'conexao.php';
$sql="UPDATE `starpet`.`cliente` SET `telefone` = ' $newtel' WHERE `cliente`.`idcliente` =  $idusualtera;";
$res=mysqli_query($conn,$sql);
$ca=mysqli_affected_rows($conn);
        if ($ca>0) {
      echo "<script>alert('Login  alterado com sucesso!');</script>";
        }
        mysqli_close($conn);
}
if ($newsenha!=="") {
include 'conexao.php';
$sql="UPDATE `starpet`.`cliente` SET `senha` = ' $newsenha' WHERE `cliente`.`idcliente` =  $idusualtera;";
$res=mysqli_query($conn,$sql);
$ca=mysqli_affected_rows($conn);
        if ($ca>0) {
      echo "<script>alert('Senha  alterado com sucesso!');</script>";
        }
        mysqli_close($conn);
}
 echo "<script>window.location.href='Tela_Usuario.php';</script>";

}//fim do primeiro if
?>
	 </fieldset>
</div>
</center>


<center>
<div id="tela2">
<center><h1 style="font-family:cursive; color:#e56a05;">Meu Pet</h1></center>
<fieldset id="fil" class="textBorder">
		<legend style="font-family:cursive; color:#e56a05;">Dados do meu Pet:</legend>
		<?php
		include 'conexao.php';      
		$sql="select p.nome,p.raca,p.peso,p.idade,p.info_add, p.fotopet from petfavorito as p join cliente as c
on c.idcliente = p.cliente_idcliente limit 1;";
		$res=mysqli_query($conn,$sql);
		while($vreg=mysqli_fetch_row($res)){

		?>
		<center>
	<table class="tbinfo" BORDER RULES=none width="1000">
		<form name="form02" method="POST" action="Tela_Usuario.php" id="form02">
		<tr>
			<td class="letras"><b>Nome Pet:</b></td> <td class="letras"><b><?php echo $vreg[0];?></b></td>
		</tr>
		<tr>
			<td class="letras"><b>Raça:</b></td> <td class="letras"><b><?php echo $vreg[1];?></b></td>
		</tr>
		<tr>
			<td class="letras"><b>Peso:</b></td> <td class="letras"> <b><?php echo $vreg[2];?></b></td>
		</tr>
		<tr>
			<td class="letras"><b>Idade:</b></td> <td class="letras"> <b><?php echo $vreg[3];?></b></td>
		</tr>
		<tr>
			<td class="letras"><b>Informações adicionais:</b></td> <td class="letras"> <b><?php echo $vreg[4];?></b></td>
		</tr>
	</table>
	</center>
	<!-- <label id="label"><img src=fotopet/<?php echo $vreg[5];?> title="Click em 'Alterar dados do pet' para adicionar uma foto."/></label> -->

		<?php 
	}
mysqli_close($conn);
		?>
	</form>	
	<div id="DalterarPet">
	<table class="tbalterarPet">
		<caption style="font-family:cursive; color:#FFDEAD;">Alterar Informações do meu Pet</caption>
		<form name="form03" method="POST" action="Tela_Usuario.php" id="form03">
		<tr bgcolor="#FFDEAD">
			<td><b>Novo Nome:</b></td><td><input type="text" name="NPnome"></td>
		</tr>
		<tr bgcolor="#FFDEAD">
			<td><b>Novo Peso:</b></td><td><input type="text" name="NPpeso"></td>
		</tr>
		<tr bgcolor="#FFDEAD">
			<td><b>Idade:</b></td><td><input type="text" name="NPidade"></td>
		</tr>
		<tr bgcolor="#FFDEAD">
			<td><b>Informações Adicionais:</b></td><td><textarea id="tarea" name="NPinfo"></textarea></td>
		</tr>
		<tr>
			<td align="middle"><input type="submit" name="alterarpet" value="Editar"/></td><td align="middle"><input type="button" name="fecharpet" value="Fechar" onclick="abrir('DalterarPet')"/></td>
		</tr>
		</table>
		<!-- <label for="ft_pet2" id="label2"><h3 style="text-align: center; color:black;">Foto do Pet ?</h3></label>
		<input type="file" name="file" id="ft_pet2"> -->
		</form>
		<?php
if (isset($_POST['alterarpet'])) {
  $idusualtera=$_SESSION["id"];
  $newnomep=$_POST['NPnome'];
  $newpeso=$_POST['NPpeso'];
  $newidade=$_POST['NPidade'];
  $newinfo=$_POST['NPinfo'];
if ($newnomep!=="") {
include 'conexao.php';
$sql="UPDATE `starpet`.`pet` SET `nome_pet` = '$newnomep' WHERE `pet`.`idpet` =  $idusualtera;";
$res=mysqli_query($conn,$sql);
$ca=mysqli_affected_rows($conn);
        if ($ca>0) {
      echo "<script>alert('Nome do pet alterado com sucesso !');</script>";
        }
        mysqli_close($conn);
}
if ($newpeso!=="") {
include 'conexao.php';
$sql="UPDATE `starpet`.`pet` SET `peso` = '$newpeso' WHERE `pet`.`idpet` =  $idusualtera;";
$res=mysqli_query($conn,$sql);
$ca=mysqli_affected_rows($conn);
        if ($ca>0) {
      echo "<script>alert('Peso alterado com sucesso!');</script>";
        }
        mysqli_close($conn);
}
if ($newidade!=="") {
include 'conexao.php';
$sql="UPDATE `starpet`.`pet` SET `idade` = '$newidade' WHERE `pet`.`idpet` =  $idusualtera;";
$res=mysqli_query($conn,$sql);
$ca=mysqli_affected_rows($conn);
        if ($ca>0) {
      echo "<script>alert('Idade alterada com sucesso!');</script>";
        }
        mysqli_close($conn);
}
if ($newinfo!=="") {
include 'conexao.php';
$sql="UPDATE `starpet`.`pet` SET `info_adc` = '$newinfo' WHERE `pet`.`idpet` =  $idusualtera;";
$res=mysqli_query($conn,$sql);
$ca=mysqli_affected_rows($conn);
        if ($ca>0) {
      echo "<script>alert('Informações adiciondas com sucesso!');</script>";
        }
        mysqli_close($conn);
}
 echo "<script>window.location.href='Tela_Usuario.php';</script>";

}
?>
	</div>
	<!-- <div id="NovoPet">
<form name="form04" method="POST" action="Tela_Usuario.php" id="form04">
	<table class="tbnovoPet">
		<caption style="font-family:cursive; color:#FFDEAD;">Adiocionar um Novo Pet</caption>
		<tr bgcolor="#FFDEAD">
			<td><b>Nome:</b></td><td><input type="text" name="Newnome"></td>
		</tr>
		<tr bgcolor="#FFDEAD">
			<td><b>Espécie:</b></td>
			<td>
				<select name="select">
  						<option value="valor1" class="letras">opção 1 </option> 
  						<option value="valor2" class="letras">opção 2</option>
 						<option value="valor3" class="letras">opção 3</option>
				</select>
			</td>
		</tr>
		<tr bgcolor="#FFDEAD">
			<td><b>Raça:</b></td>
			<td>
				<select name="select1">
  						<option value="valor1" class="letras">opção 1 </option> 
  						<option value="valor2" class="letras">opção 2</option>
 						<option value="valor3" class="letras">opção 3</option>
				</select>
			</td>
		</tr>
		<tr bgcolor="#FFDEAD">
			<td><b>Porte:</b></td><td><input type="text" name="Newporte"></td>
		</tr>
		<tr bgcolor="#FFDEAD">
			<td><b>Peso:</b></td><td><input type="text" name="Newpeso"></td>
		</tr>
		<tr bgcolor="#FFDEAD">
			<td><b>Idade:</b></td><td><input type="text" name="Newidade"></td>
		</tr>
		<tr bgcolor="#FFDEAD">
			<td><b>Ração:</b></td><td><input type="text" name="Newracao"></td>
		</tr>
		<tr bgcolor="#FFDEAD">
			<td><b>Informações Adicionais:</b></td><td><textarea id="tarea" name="Newinfo"></textarea></td>
		</tr>
		<tr>
			<td align="middle"><input type="submit" name="newpet" value="Salvar"/></td><td align="middle"><input type="button" name="fecharpet" value="Fechar" onclick="abrir('NovoPet')"/></td>
		</tr>
		</table>
		<label for="ft_pet3" id="label11"><h3 style="text-align: center; color:black;">Foto do Novo Pet</h3></label>
		<input type="file" name="file" id="ft_pet3">
	</div> -->
	<?php
//   if (isset($_POST['newpet'])):
//       include "conexao.php";
//        $a=isset($_POST['Newnome'])?$_POST['Newnome']:null;
//       $b=isset($_POST['Newporte'])?$_POST['Newporte']:null;
//       $c=isset($_POST['Newpeso'])?$_POST['Newpeso']:null;
//       $d=isset($_POST['Newidade'])?$_POST['Newidade']:null;
//       $e=isset($_POST['Newracao'])?$_POST['Newracao']:null;
//       $f=isset($_POST['Newinfo'])?$_POST['Newinfo']:null;
//       $option = $_POST['select'];
//       if($option.SelectedIndex()==1){
//       	echo '<script>alert("awdwd");</script>';
//       }
      

//       $sql1="INSERT INTO `pet`(`idpet`, `nome_pet`, `peso`, `porte`, `pedigree`,`idade`,`info_adc`) VALUES (null,'$a','$c','$b','$e','$d','$f')";
//       $res=mysqli_query($conn,$sql1);
//       $ca=mysqli_num_rows($res);
//      if ($ca>0) {
//          echo "<script>alert('login já está sendo usado tente outro!');</script>";
//           mysqli_close($conn);


//      }else{
//  $res= mysqli_query($conn,$sql1);
//  echo "<script>alert('cadastro realizado com sucesso');</script>";

// echo "<script> window.location.href='Tela_Usuario.php';</script>";

//      }

//     endif; 
 
      ?>
	 </form>
	<!-- <h6 onclick="abrir('NovoPet')" id="lt1">Adicionar um novo Pet?<img src="ICONES/new.png" id="icon_new"/></h6> -->
	<h6 onclick="abrir('DalterarPet')" id="lt1">Alterar os dados do Pet?<img src="ICONES/editar.png" id="icon_new"/></h6>
	 </fieldset>
</div>


</div>
</center>


<center>
<div id="tela3">
<center><h1 style="font-family:cursive; color:#e56a05;">Minhas Compras</h1></center>

	<center>
<div class="roll">
	<table class="tbcompras" BORDER RULES=all>
		<?php
		include 'conexao.php';    
		$id1 = $_SESSION["id"];  
		$sql="select v.tot_recebido, v.data, v.idvenda, ns.venda_idvenda,v.categoriavenda_idcategoriavenda, ns.des_notasaida_iddes_notasaida, ds.iddes_notasaida,ds.produto_idproduto,ds.qtd, p.nome, p.descricao,p.valor,cat.descricao from venda as v join cliente as c
			on c.idcliente = v.cliente_idcliente
			join NOTA_SAIDA ns
			on v.idvenda = ns.venda_idvenda
			join des_notasaida ds
			on ns.des_notasaida_iddes_notasaida = ds.iddes_notasaida
			join produto p
			on ds.produto_idproduto = p.idproduto
			join categoriavenda cat
			on v.categoriavenda_idcategoriavenda = cat.idcategoriavenda where idcliente = '$id1'";
		$res=mysqli_query($conn,$sql);
		while($vreg=mysqli_fetch_row($res)){
			echo "<tr style='background-color: #A9A9A9;'>

			<td ALIGN=MIDDLE>Nome Produto</td><td ALIGN=MIDDLE>Preço</td><td ALIGN=MIDDLE>Descrição Produto</td><td ALIGN=MIDDLE>Quantidade</td><td ALIGN=MIDDLE>Total Pago</td><td ALIGN=MIDDLE>Data</td><td ALIGN=MIDDLE>Descrição venda</td>
		
		</tr>
		<tr>

			<td ALIGN=MIDDLE>$vreg[9]</td><td ALIGN=MIDDLE>$vreg[11]</td><td ALIGN=MIDDLE>$vreg[10]</td><td ALIGN=MIDDLE>$vreg[8]</td><td ALIGN=MIDDLE>$vreg[0]</td><td ALIGN=MIDDLE>$vreg[1]</td><td ALIGN=MIDDLE>$vreg[12]</td>";
		}
		mysqli_close($conn);
		?>
		
		
	</table>

	<div id="InfoCompra">
	<table class="tbCP">
		<caption style="font-family:cursive; color:white;">Informações da minha Compra</caption>
		<tr bgcolor="#FFDEAD">
			<td ALIGN=MIDDLE><b>Nome Produto:</b></td><td ALIGN=MIDDLE><b>Descrição:</b><td ALIGN=MIDDLE><b>Peso:</b></td><td ALIGN=MIDDLE><b>Quantidade:</b></td><td ALIGN=MIDDLE><b>Valor Unitário:</b></td><td ALIGN=MIDDLE><b>Valor Total:</b></td></td><td ALIGN=MIDDLE><b>Data Validade:</b></td><td ALIGN=MIDDLE><b>Lote:</b>
		</tr>
		<tr bgcolor="#FFDEAD">
			<td ALIGN=MIDDLE>Default</td><td ALIGN=MIDDLE>Default</td><td ALIGN=MIDDLE>Default</td><td ALIGN=MIDDLE>Default</td><td ALIGN=MIDDLE> Default</td><td ALIGN=MIDDLE>Default</td><td ALIGN=MIDDLE>Default</td><td ALIGN=MIDDLE>Default</td><td ALIGN=MIDDLE>Default</td><td ALIGN=MIDDLE>Default</td><td ALIGN=MIDDLE> Default</td>
		</tr>
		
		<tr>
			<td align="middle"><input type="button" name="fecharh" value="Fechar" onclick="abrir('InfoCompra')"/></td>
		</tr>
		</table>
	</div>

	</div>
	</center>
	<table id="tbpromocao">
		<caption id="capprom">Promoções</caption>
		<tr>
			<td ALIGN=MIDDLE id="ipromo">
			<img src="ICONES/pedigree.png"/>
			<ul style="list-style: none;">
			<li><b id="bpromo">Descrição:</b>Ração Pedigree para adultos sabor carne 15Kg</li>
			<li><b id="bpromo">Preço:</b> R$ 110,00</li>
			</ul>
		</td>
			<td ALIGN=MIDDLE  id="ipromo"> 
			<img src="ICONES/magnus.png"/> 
			<li><b id="bpromo">Descrição:</b>Ração Pedigree para adultos sabor carne 15Kg</li>
			<li><b id="bpromo">Preço:</b> R$ 110,00</li>
			</ul>
			</td>
			<td  ALIGN=MIDDLE  id="ipromo"> 
				<img src="ICONES/magnus.png"/> 
				<li><b id="bpromo">Descrição:</b>Ração Pedigree para adultos sabor carne 15Kg</li>
			<li><b id="bpromo">Preço:</b> R$ 110,00</li>
			</ul>
			</td>
			<td  ALIGN=MIDDLE  id="ipromo"> <img src="ICONES/magnus.png"/> 
			<li><b id="bpromo">Descrição:</b>Ração Pedigree para adultos sabor carne 15Kg</li>
			<li><b id="bpromo">Preço:</b> R$ 110,00</li>
			</ul>
			</td>
			<td  ALIGN=MIDDLE  id="ipromo"> <img src="ICONES/magnus.png"/>
			<li><b id="bpromo">Descrição:</b>Ração Pedigree para adultos sabor carne 15Kg</li>
			<li><b id="bpromo">Preço:</b> R$ 110,00</li>
			</ul>
			</td>
			<td ALIGN=MIDDLE  id="ipromo"> <img src="ICONES/magnus.png"/>
				<li><b id="bpromo">Descrição:</b>Ração Pedigree para adultos sabor carne 15Kg</li>
			<li><b id="bpromo">Preço:</b> R$ 110,00</li>
			</ul>
			 </td>
		</tr>
	</table>
</div>
</center>

<center>
<div id="tela4">
<center><h1 style="font-family:cursive; color:#e56a05;">Agendar Consulta</h1></center>
<center>
<ul id="passos">
	<img src="ICONES/primeiro_passo.png" id="icon_bn1"/>
	<li><hr id="passo1"></li><img src="ICONES/segundo_passo.png" id="icon_bn2"/>
	<li><hr id="passo2"></li><img src="ICONES/terceiro_passo.png" id="icon_bn3"/>
	<li><hr id="passo3"></li><img src="ICONES/quarto_passo.png" id="icon_bn4"/>
	<li><hr id="passo4"></li><img src="ICONES/quinto_passo.png" id="icon_bn5"/>
</ul>
<form action="" method="POST" id="enviacons">
	
<div id="passo01">
<h1 style="font-family:cursive; color:#ffa551;">1º Passo - Informar dados pessoais</h1>
<?php
                        include 'testephp/Conexao.php';
                        $id= $_SESSION['id'];
                        $sql1="select * from cliente where idcliente=$id";
                         $fica=mysqli_query($con,$sql1); 
 while($vreg= mysqli_fetch_row($fica)){

 	echo "


        <table class='tbconsultar'>
			<tr align='left'>
				<td width='150'><b class='letras'>Nome:</b></td><td width='100'><input type='text' name='nome_con' placeholder='Meu nome...' disabled='' value='$vreg[1]'></td>
			</tr>
			<tr align='left'>
				<td width='150'><b class='letras'>Email:</b></td><td width='100'><input type='email' name='email_con' placeholder='Meu email...' disabled='' value='$vreg[3]'></td>
			</tr>
			<tr align='left'>
				<td width='10'><b class='letras'>Telefone:</b></td><td width='100'><input type='text' name='tel_con' placeholder='Meu telefone...' disabled='' value='$vreg[8]'></td>
			</tr>
			
		</table>
 	";

 }

						?>
		<button type="button" class="btt1">Apagar<img src="ICONES/apagar.png" class="icon_bn"></button>
		<button type="button" class="btt2" onclick="passo02()">Próximo<img src="ICONES/next.png" class="icon_bn"></button>
</div>
</center>
<center>
<div id="passo02">

<h1 style="font-family:cursive; color:#ffa551;">2º Passo - Informar dados do Pet</h1>
        <table class="tbconsultar">
			<tr align="left">
				<td width="150"><b class="letras">Nome do Pet:</b></td><td width="100"><input type="text" name="nome_con" placeholder="Nome do meu Pet..."></td>
			</tr>
			<tr align="left">
				<td width="150"><b class="letras">Altura:</b></td>
				<td width="100">
					<input type="text" name="cpf_con" placeholder="Altura do meu Pet..."></td>
				</td>
			</tr>
			<tr align="left">
				<td width="10"><b class="letras">Raça:</b></td><td width="100"><input type="text" name="cpf_con1" placeholder="Raça do meu Pet..."></td>
			</tr>
			<tr align="left">
				<td width="150"><b class="letras">Peso:</b></td><td width="100"><input type="text" name="rua_con" placeholder="Peso do meu Pet..."></td>
			</tr>
			<tr align="left">
				<td width="150"><b class="letras">Idade:</b></td><td width="100"><input type="text" name="num_con" placeholder="Idade do meu Pet..."></td>
			</tr>
			<tr align="left">
				<td><b class="letras">Sexo:</b></td>
				<td>
					<select name="selectma">
  						<option value="macho" class="letras">Macho </option> 
  						<option value="fêmea" class="letras">Fêmea</option>
					</select>
				</td>
			</tr>
		</table>
		
		<button type="button" class="btt1" onclick="voltar_passo01()">Voltar<img src="ICONES/voltar.png" class="icon_bn"></button>
		<button type="button" class="btt2" onclick="passo03()">Próximo<img src="ICONES/next.png" class="icon_bn"></button>
</div>
</center>
<center>

<div id="passo03">
	<h1 style="font-family:cursive; color:#ffa551;">3º Passo - Escolher Clínica e o veterinário</h1>
        <table class="tbconsultar">
			<tr align="left">
				<td width="150"><b class="letras">Clínica:</b></td>
				<td width="100">
					<select name="select">
  						<option value="valor1" class="letras">Clínica 1</option> 
					</select>
				</td><td><b class="letras">Escoher Veterinário:</b></td>
				<td width="100">
					<select name="selectvet">
						<?php
                        include 'testephp/Conexao.php';
                        $sql1="select * from veterinario";
                         $fica=mysqli_query($con,$sql1); 
 while($vreg= mysqli_fetch_row($fica)){

 	echo "<option value='$vreg[0]' class='letras'>$vreg[1]</option>";

 }

						?>
  				
  						
					</select>
				</td>
			</tr>
			<tr align="left">
				<td width="150"><b class="letras">Email:</b></td><td width="100" class="letras">PetshopC1@gmail.com</td><td><b class="letras">Tipo de Consulta:</b></td>
				<td>
					<select name="selecttcon">
  					<?php
                        include 'testephp/Conexao.php';
                        $sql1="select * from categoriaconsulta";
                         $fica=mysqli_query($con,$sql1); 
 while($vreg= mysqli_fetch_row($fica)){

 	echo "<option value='$vreg[0]' class='letras'>$vreg[1]</option>";

 }

						?>	
  						
					</select>
				</td>
			</tr>
			<tr align="left">
				<td width="10"><b class="letras">Telefone:</b></td><td width="100" class="letras">(85) 9 9909-8999</td><td><b class="letras">Data disponível:</b></td><td><input type="date" size="100" name="datecons"></td>
			</tr>
			<tr align="left">
				<td width="150"><b class="letras">Rua(Av.):</b></td><td width="100" class="letras">Av. Sargento Hermínio</td><td><b class="letras">Horário disponível:</b></td><td><input type="time" name="hourcons"></td>
			</tr>
			<tr align="left">
				<td width="150"><b class="letras">N°:</b></td><td width="100" class="letras">220</td>
			</tr>
			<tr align="left">
				<td width="100"><b class="letras">Bairro:</b></td><td width="100" class="letras">Monte Castelo</td>
			</tr>
		</table>
		<button type="button" class="btt1" onclick="voltar_passo02()">Voltar<img src="ICONES/voltar.png" class="icon_bn"></button>
		<button type="submit" class="btt2" onclick="passo04()">Próximo<img src="ICONES/next.png" class="icon_bn"></button>
</div>
</center>
</form>
<center>
<div id="passo04">
<h1 style="font-family:cursive; color:#ffa551;">4º Passo - Confirmar Dados</h1>
        <table class="tbconsultar">
        	<caption style="font-family:cursive; color:#ffa551;">Meus dados e do Meu Pet</caption>
			<tr align="left">
				<td width="150"><b class="letras">Nome:</b></td><td width="100"><b class="letras">Antonio Gui</b></td><td width="150"><b class="letras">Nome:</b></td><td width="100"><b class="letras">Antonio Gui Jr.</b></td>
			</tr>
			<tr align="left">
				<td width="150"><b class="letras">Email:</b></td><td width="100"><b class="letras">ToinhodaTuf@gmail.com</b></td><td width="150"><b class="letras">Espécie:</b></td><td width="100"><b class="letras">Canina</b></td>
			</tr>
			<tr align="left">
				<td width="10"><b class="letras">Telefone:</b></td><td width="100"><b class="letras">9 8709-9087</b></td><td width="10"><b class="letras">Raça:</b></td><td width="100"><b class="letras">Pastor Alemão</b></td>
			</tr>
			<tr align="left">
				<td width="150"><b class="letras">Bairro:</b></td><td width="100"><b class="letras">Potira II</b></td><td width="150"><b class="letras"> Peso:</b></td><td width="100"><b class="letras">24 Kg</b></td>
			</tr>
			<tr align="left">
				<td width="150"><b class="letras">Rua:</b></td><td width="100"><b class="letras">Caucaia Jr.</b></td><td width="150"><b class="letras">Idade:</b></td><td width="100"><b class="letras">8 Anos</b></td>
			</tr>
			<tr align="left">
				<td><b class="letras">Nº:</b></td><td><b class="letras">232 </b></td><td><b class="letras">Sexo:</b></td><td><b class="letras">Macho </b></td>
			</tr>
		</table>

		<button type="reset" class="btt1" onclick="voltar_passo03()">Voltar<img src="ICONES/voltar.png" class="icon_bn"></button>
		<button type="reset" class="btt2" onclick="passo05()">Próximo<img src="ICONES/next.png" class="icon_bn"></button>
</div>
</center>
<center>
<div id="passo05">
<h1 style="font-family:cursive; color:#ffa551;">5º Passo - Finalizar</h1>
<fieldset id="finalizar">
	<legend style="font-family:cursive; color:black;">Clínica StarPet.</legend>
	O Sr. <b class="letras">Antonio Guilherme</b> está com uma consulta marcada para o dia <b class="letras">19/08/2019</b> as <b class="letras">08:30 am</b><p class="letras"> com seu pet <b class="letras">Antonio Gui Jr.</b> de <b class="letras">8 anos</b> com <b class="letras">24 Kg</b>
	da espécie <b class="letras">Canina</b> raça <b class="letras">Pastor Alemão</b></p> na clínica <b class="letras">Star Pet 1</b>, da <b class="letras">Av. Sargento Hermínio</b> localizada no bairro <b class="letras">Monte Castelo</b> com o Veterinário <b class="letras">User 1</b>
	<hr>
	Data de emissão:12/01/2019 ás 13:50 a.m <p> Este documento pode ser imprimido para ser apresentado no dia da consulta.</p>
	<button type="button" name="imprimir">Imprimir</button>
</fieldset>
		<button type="reset" class="btt1" onclick="voltar_passo04()">Voltar<img src="ICONES/voltar.png" class="icon_bn"></button>
		<button type="submit" class="btt2" onclick="ok()">Finalizar</button>
</div>
</center>
</div>
</center>
<center>
<div id="tela5">
	<center><h1 style="font-family:cursive; color:#e56a05;">Meus Comentários</h1></center>
	<fieldset>
		<legend><h4 style="font-family: cursive; color:#e56a05;">Seus comentários sobre os produtos</h4></legend>
		
		<table id="tbAvaliacao">
			<form name="form90" method="POST" action="Tela_Usuario.php" id="form90">
			<?php
			include "conexao.php";
			$id = $_SESSION["id"];
			$sql= "select a.corpo, a.validado, a.produto_idproduto, a.data, p.nome, p.descricao,a.idcomentario from comentario as a join cliente as c
				on c.idcliente = a.cliente_idcliente
				join produto p
				on a.produto_idproduto = p.idproduto where c.idcliente=$id;";
			$res=mysqli_query($conn,$sql);
			while($vreg= mysqli_fetch_row($res)){
				echo "<tr style='background-color:#f9b175;'>
								<th>Data</th><th>Produto</th><th>Descrição Produto</th><th>Comentário</th><th>situação</th>
							</tr>
							<tr>";
							if ($vreg[1]) {
								
							echo "
								<td>$vreg[3]</td><td>$vreg[4]</td><td>$vreg[5]</td><td>$vreg[0]</td><td>validado</td><td onclick=abrir('alt')><b id='abrir_alt'><a href='rapidao.php?a=$vreg[6]'>Alterar Avaliação</b></td>
							</tr>";
							}else{
								echo "
								<td>$vreg[3]</td><td>$vreg[4]</td><td>$vreg[5]</td><td>$vreg[0]</td><td>negado</td><td onclick=abrir('alt')><b id='abrir_alt'><a href='rapidao.php?a=$vreg[6]'>Alterar Avaliação</a></b></td>
							</tr>";
							}
			}
			mysqli_close($conn);
			?>
			</form>

		</table>
	</fieldset>
	<div id="alt">
		<center><h3 style="font-family:cursive; color:#e56a05;">Reavalie o Produto</h3></center>
		 <div>
        <fieldset id="fiel_ava">
        	<form name="form91" method="POST" action="Tela_Usuario.php" id="form91">
            <ul id="list_ava">
                <li><img src="img/toin.jpg" id="fotoP_ava"/></li>
                <li><b id="name_ava">Toin perigoso</b></li>
                <li><textarea name="Ncorpo" placeholder="Digite sua critica ou sugestão..." id="txt_ava"></textarea></li>
            </ul>
       
    <input type="submit" name="enviar_ava" value="Enviar"/>
    <input type="button" name="fechar_ava" value="Fechar" onclick="abrir('alt')" />
        </form>
        <?php
if (isset($_POST['Ncorpo'])) {
 
  $newcorpo=$_POST['Ncorpo'];
 $idc=$_POST['hi'];
if ($newcorpo!=="") {
include 'conexao.php';
$sql="UPDATE `starpet`.`comentario` SET `corpo` = '$newcorpo' WHERE `comentario`.`idcomentario` = $idc;";
$res=mysqli_query($conn,$sql);
$ca=mysqli_affected_rows($conn);
        if ($ca>0) {
      echo "<script>alert('Comnetário alterado com sucesso !');</script>";
        }
        mysqli_close($conn);
}
 echo "<script>window.location.href='Tela_Usuario.php';</script>";

}
?>
        </fieldset>
    </div>
	</div>
</div>
</center>
<!-- =============================================== FIM DA DIV COM CONTEÚDO PRINCIPAL ==========================================-->
<!-- ============================================================================================================================-->
<!-- ============================================================================================================================-->
<!-- ============================================================================================================================-->
<!-- =============================================== COMEÇO DO RODAPÉ ===========================================================-->
<footer id="rodape">
	<center>
<ul id="rodape0">
	<li>
		<TABLE BORDER=0 width="650" id="tb" cellspacing="11">

<TR>

<TH >Endereço<img src="ICONES/endereco.png" class="iconrd"></TH> <TH>Contatos<img src="ICONES/contatos.png" class="iconrd"></TH> <TH>Emails<img src="ICONES/emails.png" class="iconrd"></TH>

</TR>

<TR>

<TD >Av. Sargento Hermínio</TD> <TD>9 9999-8888</TD> <TD > StarPet@gmail.com</TD>

</TR>
<TR>

<TD >Bairro Monte Castelo </TD> <TD>9 8888-9999 </TD> <TD>StarPet@gmail.com</TD>

</TR>
<TR>

<TD >N° 3000 </TD> <TD>9 7777-8888 </TD> <TD>StarPet@gmail.com</TD>

</TR>
</TABLE>
	</li>

	<li>
		<figure>
	<img src="ICONES/logostar.png" id="icone1">	
	<center><figcaption>StarPets</figcaption></center>
		</figure>
	</li>

	<li>

	<TABLE BORDER=0 width="650" id="tb">
		<center><caption><B>Redes Sociais</B></caption></center>
<tr>
	<td align="middle"><a href=""><img src="ICONES/facebook.png" class="icone"></a></td>
	<td align="middle"><a href=""><img src="ICONES/instagram.png" class="icone"></a></td> 
	<td align="middle"><a href=""><img src="ICONES/twitter.png" class="icone"></a></td> 
	<td align="middle"><a href=""><img src="ICONES/youtube.png" class="icone"></a></td>
	<td align="middle"><a href=""><img src="ICONES/plus.png" class="icone"></a></td>
</tr>
</TABLE>

	</li>
</ul>
</center>
<center>
<ul id="ul">
	<li><a href="ajuda.php" class="a1">Ajuda</a></li><script type="text/javascript">document.write("|");</script>
	<li><a href="" class="a1">Desenvolvedores</a></li><script type="text/javascript">document.write("|");</script>
	<li><a href="" class="a1">Mapa do Site</a></li><script type="text/javascript">document.write("|");</script>
	<li><a href="" class="a1">História da empresa</a></li><script type="text/javascript">document.write("|");</script>
	<li><a href="" class="a1">Promoções</a></li>
</ul>

</center>
<center><h5 id="copy">Copyright © 2019 | Pet Center Comércio e Participações S/A - Todos os direitos reservados</h5></center>
</footer>
<!-- =============================================== FIM DO RODAPÉ ===========================================================-->
</div>
<script type="text/javascript">
	function sair() {
		re = confirm("Deseja sair da conta ?");
			if(re){
				alert("Desconectado da conta!");
				window.location.href = 'acabarsessao.php';
			}else{
			}
	}
		function ok(){
			con = confirm("Deseja realizar essa ação ?");
			if(con){
				alert("Consulta marcada com sucesso!");
				window.location.href = 'Tela_Usuario.php';
			}else{
				alert("Reveja suas informações e marque uma consulta!");
				window.location.href = 'Tela_Usuario.php';
			}

		}
		
		function troca1(){ 
			
				var t1 = document.getElementById("tela1").style.display = "block";
				var t2 = document.getElementById("tela2").style.display = "none";
				var t3 = document.getElementById("tela3").style.display = "none";
				var t4 = document.getElementById("tela4").style.display = "none";
				var t5 = document.getElementById("tela5").style.display = "none";
			
			}
		function troca2(){ 
			
				var t2 = document.getElementById("tela2").style.display = "block";
				var t1 = document.getElementById("tela1").style.display = "none";
				var t3 = document.getElementById("tela3").style.display = "none";
				var t4 = document.getElementById("tela4").style.display = "none";
				var t5 = document.getElementById("tela5").style.display = "none";
			
			}
		function troca3(){ 
			
				var t3 = document.getElementById("tela3").style.display = "block";
				var t1 = document.getElementById("tela1").style.display = "none";
				var t2 = document.getElementById("tela2").style.display = "none";
				var t4 = document.getElementById("tela4").style.display = "none";
				var t5 = document.getElementById("tela5").style.display = "none";
				
			
			}
		function troca4(){ 
			
				var t4 = document.getElementById("tela4").style.display = "block";
				var t1 = document.getElementById("tela1").style.display = "none";
				var t2 = document.getElementById("tela2").style.display = "none";
				var t3 = document.getElementById("tela3").style.display = "none";
				var t5 = document.getElementById("tela5").style.display = "none";
				
			
			}
		function troca5(){ 
			
				var t5 = document.getElementById("tela5").style.display = "block";
				var t1 = document.getElementById("tela1").style.display = "none";
				var t2 = document.getElementById("tela2").style.display = "none";
				var t3 = document.getElementById("tela3").style.display = "none";
				var t4 = document.getElementById("tela4").style.display = "none";
			
			}

			function abrir(el) {
        	var display = document.getElementById(el).style.display;
        	if(display == 'none'){
            	document.getElementById(el).style.display = 'block';
            }else{
            		document.getElementById(el).style.display = 'none';
 			}
  			}
// ======================================= FUNÇÕES PARA MARCAR CONSULTA ==================================
				var pa1 = document.getElementById("passo01");
				var pa2 = document.getElementById("passo02");
				var pa3 = document.getElementById("passo03");
				var pa4 = document.getElementById("passo04");
				var pa5 = document.getElementById("passo05");
				var pss1 = document.getElementById("passo1");
				var pss2 = document.getElementById("passo2");
				var pss3 = document.getElementById("passo3");
				var pss4 = document.getElementById("passo4");
				var icon1 = document.getElementById("icon_bn1");
				var icon2 = document.getElementById("icon_bn2");
				var icon3 = document.getElementById("icon_bn3");
				var icon4 = document.getElementById("icon_bn4");
    		function passo01(){ 
				pa1.style.display = "block";
				pa2.style.display = "none";
				pa3.style.display = "none";
				pa4.style.display = "none";
				pa5.style.display = "none";
			}
			function passo02(){ 
				pa2.style.display = "block";
				pa1.style.display = "none";
				pa3.style.display = "none";
				pa4.style.display = "none";
				pa5.style.display = "none";
				pss1.style.backgroundColor = "#ff7575";
				icon1.style.backgroundColor = "#ff7575";
			}
			function passo03(){ 
				pa3.style.display = "block";
				pa1.style.display = "none";
				pa2.style.display = "none";
				pa4.style.display = "none";
				pa5.style.display = "none";
				pss2.style.backgroundColor = "#ffca60";
				icon2.style.backgroundColor = "#ffca60";
			}
			function passo04(){ 
				pa4.style.display = "block";
				pa2.style.display = "none";
				pa1.style.display = "none";
				pa3.style.display = "none";
				pa5.style.display = "none";
				pss3.style.backgroundColor = "#64ff56";
				icon3.style.backgroundColor = "#64ff56";
			}
			function passo05(){ 
				pa5.style.display = "block";
				pa1.style.display = "none";
				pa2.style.display = "none";
				pa3.style.display = "none";
				pa4.style.display = "none";
				pss4.style.backgroundColor = "#56aaff";
				icon4.style.backgroundColor = "#56aaff";
			}
			function voltar_passo01(){ 
				pa1.style.display = "block";
				pa2.style.display = "none";
				pa3.style.display = "none";
				pa4.style.display = "none";
				pa5.style.display = "none";
				pss1.style.backgroundColor = "";
				icon1.style.backgroundColor = "";
			}
			function voltar_passo02(){ 
				pa2.style.display = "block";
				pa1.style.display = "none";
				pa3.style.display = "none";
				pa4.style.display = "none";
				pa5.style.display = "none";
				pss2.style.backgroundColor = "";
				icon2.style.backgroundColor = "";
			}
			function voltar_passo03(){ 
				pa3.style.display = "block";
				pa1.style.display = "none";
				pa2.style.display = "none";
				pa4.style.display = "none";
				pa5.style.display = "none";
				pss3.style.backgroundColor = "";
				icon3.style.backgroundColor = "";
			}
			function voltar_passo04(){ 
				pa4.style.display = "block";
				pa2.style.display = "none";
				pa1.style.display = "none";
				pa3.style.display = "none";
				pa5.style.display = "none";
				pss4.style.backgroundColor = "";
				icon4.style.backgroundColor = "";
			}
			function voltar_passo05(){ 
				pa5.style.display = "block";
				pa1.style.display = "none";
				pa2.style.display = "none";
				pa3.style.display = "none";
				pa4.style.display = "none";
			}

			    function Avaliar(estrela) {

        var url = window.location;
        url = url.toString()
        url = url.split("avaliacao.php");
        url = url[0];

        var s1 = document.getElementById("s1").src;
        var s2 = document.getElementById("s2").src;
        var s3 = document.getElementById("s3").src;
        var s4 = document.getElementById("s4").src;
        var s5 = document.getElementById("s5").src;
        var avaliacao = 0;

        if (estrela == 5){        
        if (s5 = url + "img/star0.png") {
            document.getElementById("s1").src = "img/star1.png";
            document.getElementById("s2").src = "img/star1.png";
            document.getElementById("s3").src = "img/star1.png";
            document.getElementById("s4").src = "img/star1.png";
            document.getElementById("s5").src = "img/star1.png";
            avaliacao = 5;
        } else {
            document.getElementById("s1").src = "img/star1.png";
            document.getElementById("s2").src = "img/star1.png";
            document.getElementById("s3").src = "img/star1.png";
            document.getElementById("s4").src = "img/star1.png";
            document.getElementById("s5").src = "img/star0.png";
            avaliacao = 4;
        }}
        
        //ESTRELA 4
        if (estrela == 4){  
        if (s4 = url + "img/star0.png") {
            document.getElementById("s1").src = "img/star1.png";
            document.getElementById("s2").src = "img/star1.png";
            document.getElementById("s3").src = "img/star1.png";
            document.getElementById("s4").src = "img/star1.png";
            document.getElementById("s5").src = "img/star0.png";
            avaliacao = 4;
        } else {
            document.getElementById("s1").src = "img/star1.png";
            document.getElementById("s2").src = "img/star1.png";
            document.getElementById("s3").src = "img/star1.png";
            document.getElementById("s4").src = "img/star0.png";
            document.getElementById("s5").src = "img/star0.png";
            avaliacao = 3;
        }}

        //ESTRELA 3
        if (estrela == 3){  
        if (s3 = url + "img/star0.png") {
            document.getElementById("s1").src = "img/star1.png";
            document.getElementById("s2").src = "img/star1.png";
            document.getElementById("s3").src = "img/star1.png";
            document.getElementById("s4").src = "img/star0.png";
            document.getElementById("s5").src = "img/star0.png";
            avaliacao = 3;
        } else {
            document.getElementById("s1").src = "img/star1.png";
            document.getElementById("s2").src = "img/star1.png";
            document.getElementById("s3").src = "img/star0.png";
            document.getElementById("s4").src = "img/star0.png";
            document.getElementById("s5").src = "img/star0.png";
            avaliacao = 2;
        }}
        
        //ESTRELA 2
        if (estrela == 2){  
        if (s2 = url + "img/star0.png") {
            document.getElementById("s1").src = "img/star1.png";
            document.getElementById("s2").src = "img/star1.png";
            document.getElementById("s3").src = "img/star0.png";
            document.getElementById("s4").src = "img/star0.png";
            document.getElementById("s5").src = "img/star0.png";
            avaliacao = 2;
        } else {
            document.getElementById("s1").src = "img/star1.png";
            document.getElementById("s2").src = "img/star0.png";
            document.getElementById("s3").src = "img/star0.png";
            document.getElementById("s4").src = "img/star0.png";
            document.getElementById("s5").src = "img/star0.png";
            avaliacao = 1;
        }}
        
        //ESTRELA 1
        if (estrela == 1){  
        if (s1 = url + "img/star0.png") {
            document.getElementById("s1").src = "img/star1.png";
            document.getElementById("s2").src = "img/star0.png";
            document.getElementById("s3").src = "img/star0.png";
            document.getElementById("s4").src = "img/star0.png";
            document.getElementById("s5").src = "img/star0.png";
            avaliacao = 1;
        } else {
            document.getElementById("s1").src = "img/star0.png";
            document.getElementById("s2").src = "img/star0.png";
            document.getElementById("s3").src = "img/star0.png";
            document.getElementById("s4").src = "img/star0.png";
            document.getElementById("s5").src = "img/star0.png";
            avaliacao = 0;
        }}
        
        document.getElementById('rating').innerHTML = avaliacao;
        
    }

$(document).ready(function(){
    $(document).on('submit','#enviacons',function(event){
       event.preventDefault();
      var dados=$(this).serialize();
      var res=confirm("Deseja realizar mesmo esta ação ?");
      if (res) {
        if(dados==""){
          alert("Você precisa selecionar ao menos um registro!");
        }else{
        $.ajax({
            url: 'php/addcc.php',
            method: 'post',
            dataType: 'html',
            data: dados,
            success: function(data){
                $('#passo04').html(data);
            }
        });
        //coloco aqui o resto das chaves
      }
      }
    });
});$(document).ready(function(){
    $(document).on('submit','#addcupom',function(event){
       event.preventDefault();
      var dados=$(this).serialize();
      var res=confirm("Deseja realizar mesmo esta ação ?");
      if (res) {
        if(dados==""){
          alert("Você precisa selecionar ao menos um registro!");
        }else{
        $.ajax({
            url: 'php/addcupon.php',
            method: 'post',
            dataType: 'html',
            data: dados,
            success: function(data){
                $('#passo05').html(data);
            }
        });
        //coloco aqui o resto das chaves
      }
      }
    });
});
  $('#tela5').on('click','a',function(event){
  event.preventDefault();
  var urlget=this.href;
  var envio2 = $(this).serialize();
  

  $.ajax({

    url:urlget,
    dataType: 'html',
    data: envio2,
    type: 'GET',
    success: function(data){

      $('#alt').html(data);
    }
  });

  return false;

});
	</script>
</body>
</html>