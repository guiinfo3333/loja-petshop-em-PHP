<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Comfornecedor
 *
 * @author Aluno
 */
class Comfornecedor {


  public function cadastraradm($a,$b,$c,$d,$e,$novoNom){
include 'Conexao.php';

$sq1="SELECT * FROM fornecedor where cnpj=$a";
$fica=mysqli_query($con,$sq1); 
$linha=mysqli_num_rows($fica);
//   echo "<script>alert($a);</script>";
//echo "<script>alert('$linha');</script>";   
if ($linha==1 || $linha>1) {
    echo "<script>alert('Fornecedor já cadastrado !');</script>"; 
}else{
//echo "<script>alert('$novoNom');</script>"; 
$sql= "INSERT INTO `fornecedor`(`idfornecedor`, `cnpj`, `nome`, `Catfornecedor_idCatfornecedor`, `end`, `tel`,`email`) VALUES (null,'$a','$e',$c,'$d','$b','$novoNom')";
$res=mysqli_query($con,$sql);
$linhas= mysqli_affected_rows($con);
if ($linhas==1) {
 echo "<script>alert('Fornecedor cadastrador com sucesso !');</script>";    
} else {
    echo "<script>alert('Erro ao cadastrar fornecedor !');</script>";  
}
}
mysqli_close($con);
}
public function listanovo(){
            include('Conexao.php');
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
    </table>";
}
public function pesquisa($nome){
include('Conexao.php');
 $campo="'%".$nome."%'";
 $sql="select * from fornecedor where nome like $campo order by idfornecedor DESC" ;
    $res=mysqli_query($con,$sql);

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
    </table>";

}
public function apagar($post){
    include('Conexao.php');
    $i=0;
    foreach($post as $checkbox){
    $sql="DELETE FROM `fornecedor` WHERE idfornecedor=$checkbox";
    $res= mysqli_query($con,$sql);
    $i=$i+1;
 
}
 if ($i>0) {
    if ($i==1) {
        
 echo "<script>alert('um fornecedor apagado com sucesso!');</script>";
    }else{
       echo "<script>alert('$i fornecedores apagados com sucesso!');</script>"; 
    }
 $this->listanovo();
   }else{
    echo "<script>alert('Erro ao apagar fornecedor');</script>";
   }
}
public function abritelaaltera($get){
  include('Conexao.php');
  $sql="select * from fornecedor where idfornecedor='$get'";
    $res=mysqli_query($con,$sql);
     while($vreg= mysqli_fetch_row($res)){
  echo "
<h1>Alterar dados</h1>
 <img src='img/x.png' class='x' onclick='fechainfo2()' >
 <form action='php/adicionaadmin.php' method='POST' id='alterverdadefonr'>
<legend>Cnpj:</legend><input type='number' placeholder='###-####-###-#' class='pc' name='altefornu1' >
<legend>Nome:</legend><input type='text' placeholder='digite o nome da empresa' class='pc' name='altefornu2' >
<legend>Endereço:</legend><input type='text' placeholder='digite o novo endereço' class='pc' name='altefornu3' >
<legend>Email:</legend><input type='text' placeholder='#@outlook.com' class='pc' name='altefornu4'>
<legend>Telefone:</legend><input type='tel' placeholder='(##) #####-####' class='pc' name='altefornu5' >
<input type='radio' value='$vreg[0]' style='display:none;' name='altefornu6' checked>
<input type='submit' value='excluir' class='en' id='en1'>
<input type='reset' value='apagar' class='en' id='en2'>
</form>
  ";
}
}
public function alterardevez($cnpj,$nome,$endereco,$email,$telefone,$id){
include('Conexao.php');
$a[0]="update fornecedor set nome='$nome' where idfornecedor='$id'";
$a[1]="update fornecedor set cnpj='$cnpj' where idfornecedor='$id'";
$a[2]="update fornecedor set end='$endereco' where idfornecedor='$id'";
$a[3]="update fornecedor set email='$email' where idfornecedor='$id'";
$b[0]=$nome;
$b[1]=$cnpj;
$b[2]=$endereco;
$b[3]=$email;
$result = count($b);
for ($i=0; $i <$result ; $i++) { 
 if (!empty($b[$i])) {
 $sql=$a[$i];
 $res=mysqli_query($con,$sql);
 if ($res) {
 echo "<script>alert('Dados atualizados com sucesso !');</script>";
 }

 }
}
  $this->listanovo();
}     

}
