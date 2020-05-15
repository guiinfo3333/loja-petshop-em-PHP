<?php
if (isset($_POST['nome_con'])) {
session_start();
 $idcli=$_SESSION['id'];
$nome=$_POST['nome_con'];
$al=$_POST['cpf_con'];
$raca=$_POST['cpf_con1'];
$peso=$_POST['rua_con'];
$idade=$_POST['num_con'];
$sexo=$_POST['selectma'];
$idveterinario=$_POST['selectvet'];
$idcatcons=$_POST['selecttcon'];
$data=$_POST['datecons'];
$hora=$_POST['hourcons'];
include '../testephp/Conexao.php';

$sq1="INSERT INTO `pet`(`idpet`, `nome`, `raca`, `peso`, `idade`,  `sexo`) VALUES (null,'$nome','$raca','$peso','$idade','$sexo')";
$fica=mysqli_query($con,$sq1); 
if ($fica) {
	$sql3="select * from pet order by idpet DESC limit 1";
	$rr=mysqli_query($con,$sql3);
 while($vreg= mysqli_fetch_row($rr)){
///////////////////////

	$sql2="INSERT INTO `consulta`(`idconsulta`, `dta_consulta`, `cliente_idcliente`, `veterinario_idveterinario`, `categoriaconsulta_idcategoriaconsulta`, `horario`, `pet_idpet`) VALUES (null,'$data',$idcli,$idveterinario,$idcatcons,'$hora',$vreg[0])";
   $xuxu=mysqli_query($con,$sql2); 

 ///////////////////
 }
	
}

                        
                        
                        $sql1="select * from cliente where idcliente=$idcli";
                         $fica=mysqli_query($con,$sql1); 
 while($vreg= mysqli_fetch_row($fica)){
echo "
<form action='php/addcupon.php' id='addcupom'> 
<input type='hidden' name='oi'>
<h1 style='font-family:cursive; color:#ffa551;'>4º Passo - Confirmar Dados</h1>
        <table class='tbconsultar'>
        	<caption style='font-family:cursive; color:#ffa551;'>Meus dados e do Meu Pet</caption>
			<tr align='left'>
				<td width='150'><b class='letras'>Nome:</b></td><td width='100'><b class='letras'>$vreg[1]</b></td><td width='150'><b class='letras'>Nome:</b></td><td width='100'><b class='letras'>$nome</b></td>
			</tr>
			<tr align='left'>
				<td width='150'><b class='letras'>Email:</b></td><td width='100'><b class='letras'>$vreg[3]</b></td><td width='150'><b class='letras'>Raça:</b></td><td width='100'><b class='letras'>$raca</b></td>
			</tr>
			
			<tr align='left'>
				<td width='150'><b class='letras'>Endereço:</b></td><td width='100'><b class='letras'>$vreg[2]</b></td><td width='150'><b class='letras'> Peso:</b></td><td width='100'><b class='letras'>$peso</b></td>
			</tr>
			
			<tr align='left'>
				<td><b class='letras'>hora:</b></td><td><b class='letras'>$hora </b></td><td><b class='letras'>Sexo:</b></td><td><b class='letras'>$sexo </b></td>
			</tr>
		</table>

		<button type='reset' class='btt1' onclick='voltar_passo03()''>Voltar<img src='ICONES/voltar.png' class='icon_bn'></button>
		<button type='submit' class='btt2' onclick='passo05()''>Próximo<img src='ICONES/next.png' class='icon_bn'></button>
</form>
		";
 
 }
}












?>