<?php

if (isset($_POST['oi'])) {
include '../testephp/Conexao.php';
  $sql= "select dta_consulta,v.nome,cat.descricaol,con.horario,pe.nome,pe.idade,pe.peso,pe.raca,c.nome from consulta as con join cliente as c on con.cliente_idcliente = c.idcliente join veterinario v on con.veterinario_idveterinario = v.idveterinario join categoriaconsulta cat on con.categoriaconsulta_idcategoriaconsulta=cat.idcategoriaconsulta join pet as pe on con.pet_idpet=pe.idpet order by con.idconsulta DESC limit 1";
   $res=mysqli_query($con,$sql);
    while($vreg= mysqli_fetch_row($res)){
$date=explode("-", $vreg[0]);
echo "
<h1 style='font-family:cursive; color:#ffa551;'>5º Passo - Finalizar</h1>
<fieldset id='finalizar'>
	<legend style='font-family:cursive; color:black;'>Clínica StarPet.</legend>
	O Sr.(a) <b class='letras'>$vreg[8]</b> está com uma consulta marcada para o dia <b class='letras'>$date[2]/$date[1]/$date[0]</b> as <b class='letras'>$vreg[3]</b><p class='letras'> com seu pet <b class='letras'>$vreg[4]</b> de <b class='letras'>$vreg[5] anos</b> com <b class='letras'>$vreg[6] Kg</b>
	da raça <b class='letras'></b> <b class='letras'>$vreg[7]</b></p> na clínica <b class='letras'>Star Pet 1</b>, da <b class='letras'>Av. Sargento Hermínio</b> localizada no bairro <b class='letras'>Monte Castelo</b> com o Veterinário <b class='letras'>$vreg[2]</b>
	<hr>
	Data da consulta :$date[2]/$date[1]/$date[0] ás $vreg[3] <p> Este documento pode ser imprimido para ser apresentado no dia da consulta.</p>
	<button type='button' name='imprimir'>Imprimir</button>
</fieldset>
		<button type='reset' class='btt1' onclick='voltar_passo04()'>Voltar<img src='ICONES/voltar.png' class='icon_bn'></button>
		<button type='submit' class='btt2' onclick='ok()'>Finalizar</button>


";
    }

}






?>