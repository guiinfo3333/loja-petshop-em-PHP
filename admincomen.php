<!DOCTYPE html>
<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/cssadmin.css">
	<script type="text/javascript" src="js/js.js"></script>
    <script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
	<style type="text/css">
		#pescom{
	position:absolute;
	left:300px;
}
	</style>
</head>
<body>
<div id="espaco1">
	 <form class="pesquisa" id="pescomxu" method="POST" action="php/addcatcomentario.php">
<input type="search" class="texto" placeholder="BUSQUE POR DATA OU POR USUÁRIO" name="buscacomxu" id="buscacomxu">
<img src="img/lupa.png" class="btn" >
</form>
    <form action="php/addcatcomentario.php" method="POST" id="validacomm">    <!-- formulario para apagar fornecedor -->
 <div class="rolagemlegal" id="rolagemlegal3">
    <table class="tabelaEditavel" id="tabelamaior">
    <thead>
            <tr>
                <th>Visualizar</th>
                <th>Marcado</th>
                <th>nome do usuario</th>
                <th>Data do comentário</th>
                <th>Produto</th>
                <th>Situação</th>
               
            </tr>
        </thead>
        <tbody>
            <?php
include 'testephp/Conexao.php';
$sql1= "select co.data,co.corpo,co.avaliacao,p.idproduto,c.nome,c.imagem,c.idcliente,co.idcomentario,p.nome,co.validado from comentario as co join produto as p
on p.idproduto = co.produto_idproduto
join cliente c
on c.idcliente=co.cliente_idcliente
 order by co.idcomentario DESC";
 $fica=mysqli_query($con,$sql1); 
 while($vreg= mysqli_fetch_row($fica)){
$data = explode("-", $vreg[0]);
echo"
    <tr>
<td><a href='php/addcatcomentario1.php?cli=$vreg[6]&com=$vreg[7]' class='link' onclick='abreinfo3()'>ação</a></td>
<td><input type='checkbox' name='aw[]' value='$vreg[7]' class='checkbox'></td>
<td>$vreg[4]</td>
<td>$data[2]/$data[1]/$data[0]</td>
<td>$vreg[8]</td>";
if ($vreg[9]) {
   echo "<td>Validado</td>";
}else{
   echo "<td>Não Validado</td></tr>";

}
 }
 
 ?>
        </tbody>
    </table>
</div>
<input type="submit" value="Validar" class="forn" id="forn1">
<input type="reset" value="apagar" class="forn" id="forn2">
</form>
<div class="info-vendas" id="info-altera-forn1">
  <!-- <h1>Alterar dados</h1> -->
 <img src="img/x.png" class="x" onclick="fechainfo3()" >
<div class="espaco-foto">
</div>
<legend id="legcom">Comentário :</legend>
<textarea class="textarea" id="textareacom" disabled></textarea>
</div>
<div id="image-deco">
<img src="img/men.png">
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
</footer>
<script type="text/javascript">
$(document).ready(function(){
    $(document).on('submit','#validacomm',function(event){
       event.preventDefault();
      var dados=$(this).serialize();
      var res=confirm("Deseja realizar mesmo esta ação ?");
      if (res) {
        if(dados==""){
          alert("Você precisa selecionar ao menos um registro!");
        }else{
        $.ajax({
            url: 'php/addcatcomentario.php',
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

        $('#buscacomxu').keyup(function(){
            $('#pescomxu').submit(function(){
                var dados = $(this).serialize();

                $.ajax({
                    url: 'php/addcatcomentario1.php',
                    method: 'post',
                    dataType: 'html',
                    data: dados,
                    success: function(data){
                        $('#rolagemlegal3').empty().html(data);
                    }
                });

                return false;
            });

            $('#pescomxu').trigger('submit');

        });
    });
</script>
</body>
</html>