<?php

class Comcatconsulta {
public function cadastrarcatconsulta($d){

include 'Conexao.php';
 echo "<script>alert('$d');</script>"; 
$sq1="SELECT * FROM categoriaconsulta where descricaol='$d'";
$fica=mysqli_query($con,$sq1); 
$linha=mysqli_num_rows($fica);
//   echo "<script>alert($a);</script>";
//echo "<script>alert('$linha');</script>";   
if ($linha==1 || $linha>1) {
    echo "<script>alert('Categoria de consulta já cadastrado !');</script>"; 
}else{
//echo "<script>alert('$novoNom');</script>"; 
$sql= "INSERT INTO `categoriaconsulta`(`idcategoriaconsulta`,`descricaol`) VALUES (null,'$d')";
$res=mysqli_query($con,$sql);
$linhas= mysqli_affected_rows($con);
if ($linhas==1) {
 echo "<script>alert('Categoria de consulta cadastrada com sucesso !');</script>";    
} else {
    echo "<script>alert('Erro ao cadastrar categoria de consulta !');</script>";  
}
$this->listanovo();
}
mysqli_close($con);
}
public function listanovo(){
	  include('Conexao.php');

       $res= mysqli_query($con,"select * from categoriaconsulta order by idcategoriaconsulta DESC");
	echo "<table class='tabelaEditavel'  id='aqui'>
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

}
public function pesquisa($nome){
include('Conexao.php');
 $campo="'%".$nome."%'";
 $sql="select * from categoriaconsulta where descricaol like $campo order by idcategoriaconsulta DESC" ;
$res=mysqli_query($con,$sql);
echo "<table class='tabelaEditavel'  id='aqui'>
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


}
public function apagar($post){
    include('Conexao.php');
    $i=0;
    foreach($post as $checkbox){
    $sql="DELETE FROM `categoriaconsulta` WHERE idcategoriaconsulta=$checkbox";
    $res= mysqli_query($con,$sql);
    $i=$i+1;
 
}
 if ($i>0) {
    if ($i==1) {
        
 echo "<script>alert('Uma categoria de consulta apagada com sucesso!');</script>";
    }else{
       echo "<script>alert('$i categoria de consultas apagadas com sucesso!');</script>"; 
    }
 $this->listanovo();
   }else{
    echo "<script>alert('Erro ao apagar categoria de consulta');</script>";
   }
}
public function alterardevez($id,$desc){
include('Conexao.php');
$a[0]="update categoriaconsulta set descricaol='$desc' where idcategoriaconsulta='$id'";
 $res=mysqli_query($con,$sql);
 if ($res) {
 echo "<script>alert('Dado atualizado com sucesso !');</script>";
 }else{
 echo "<script>alert('Erro ao atualizar !');</script>";
  
 }
  $this->listanovo();




}
}