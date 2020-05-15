
<?php
if (isset($_POST['buscacomxu'])) {
// include '../testephp/Conexao.php';
$nome=$_POST['buscacomxu'];
include '../testephp/Conexao.php';
include '../testephp/Comcomentario.php';
$a= new Comcomentario();
$a->pesquisa($nome);
}
if (isset($_GET['cli'])) {
	$idcli=$_GET['cli'];
	$idcom=$_GET['com'];
	include '../testephp/Conexao.php';
$sql1= "select co.data,co.corpo,co.avaliacao,p.idproduto,c.nome,c.imagem,c.idcliente,co.idcomentario,p.nome,co.validado from comentario as co join produto as p
on p.idproduto = co.produto_idproduto
join cliente c
on c.idcliente=co.cliente_idcliente
where c.idcliente=$idcli and co.idcomentario=$idcom";
$fica=mysqli_query($con,$sql1); 
 while($vreg= mysqli_fetch_row($fica)){
 	echo "
<div class='info-vendas' id='info-altera-forn1'>
  <!-- <h1>Alterar dados</h1> -->
 <img src='img/x.png' class='x' onclick='fechainfo3()'>
<div class='espaco-foto'>
<img src='imgcliente/usuario.png'>
</div>
<legend id='legcom'>Comentário :</legend>
<textarea class='textarea' id='textareacom' disabled>$vreg[1]</textarea>
</div>
 	";
 	if ($vreg[4]) {
 	echo "<style>
.info-vendas{
	background-image:url('imgcliente/$vreg[4]');
}
 	</style>";
 	}else{
 		echo "<style>
.info-vendas{
	background-image:url('imgcliente/usuario.png');
}
 	</style>";
 	}
 	}

}
?>