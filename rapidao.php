<?php

if (isset($_GET['a'])) {
	session_start();
	$a=$_GET['a'];
	$id=$_SESSION['id'];
	include 'conexao.php';
$sql= "select a.corpo, a.validado, a.produto_idproduto, a.data,a.idcomentario,c.nome from comentario as a join cliente as c
				on c.idcliente = a.cliente_idcliente
				join produto p
				on a.produto_idproduto = p.idproduto where a.idcomentario=$a;";
	$res=mysqli_query($conn,$sql);
			while($vreg= mysqli_fetch_row($res)){


	echo "
		<center><h3 style='font-family:cursive; color:#e56a05;'>Reavalie o Produto</h3></center>
		 <div>
        <fieldset id='fiel_ava'>
        	<form name='form91' method='POST' action='Tela_Usuario.php' id='form91'>
            <ul id='list_ava'>
                <li><img src='img/toin.jpg' id='fotoP_ava'/></li>
                <li><b id='name_ava'>$vreg[5]</b></li>
                <li><textarea name='Ncorpo' placeholder='Digite sua critica ou sugestão...' id='txt_ava'>$vreg[0]</textarea></li>
            </ul>
      <input type='hidden' name='hi' value='$a'>
    <input type='submit' name='enviar_ava' value='Enviar'/>
    <input type='button' name='fechar_ava' value='Fechar' onclick=abrir('alt') />
        </form>";
    

echo "
        </fieldset>
	";
			}
	
}










?>