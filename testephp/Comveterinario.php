<?php



class Comveterinario {


public function cadastrarvet($a,$b,$c,$d,$e,$f){
include 'Conexao.php';

$sq1="SELECT * FROM veterinario where login='$d'";
$fica=mysqli_query($con,$sq1); 
$linha=mysqli_num_rows($fica);
//   echo "<script>alert($a);</script>";
//echo "<script>alert('$linha');</script>";   
if ($linha==1 || $linha>1) {
    echo "<script>alert('Veterinário já cadastrado !');</script>"; 
}else{
//echo "<script>alert('$novoNom');</script>"; 
$sql= "INSERT INTO `veterinario`(`idveterinario`,`nome`, `endereco`, `email`,`login`,`senha`,`telefone`,`imagem`) VALUES (null,'$a','$b','$c','$d','$e','$f',null)";
$res=mysqli_query($con,$sql);
$linhas= mysqli_affected_rows($con);
if ($linhas==1) {
 echo "<script>alert('Veterinário cadastrado com sucesso !');</script>";    
} else {
    echo "<script>alert('Erro ao cadastrar Veterinário !');</script>";  
}
}
mysqli_close($con);
}
public function listanovo(){
	  include('Conexao.php');

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

}public function listanovoalter($id){
    include('Conexao.php');
       $res= mysqli_query($con,"select * from veterinario where idveterinario='$id'");
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

}
public function pesquisa($nome){
include('Conexao.php');
 $campo="'%".$nome."%'";
 $sql="select * from veterinario where nome like $campo order by idveterinario DESC" ;
    $res=mysqli_query($con,$sql);

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

}
public function alterardevez($nome,$endereco,$email,$login,$senha,$telefone,$id){
include('Conexao.php');
$a[0]="update veterinario set nome='$nome' where idveterinario='$id'";
$a[1]="update veterinario set endereco='$endereco' where idveterinario='$id'";
$a[2]="update veterinario set email='$email' where idveterinario='$id'";
$a[3]="update veterinario set login='$login' where idveterinario='$id'";
$a[4]="update veterinario set senha='$senha' where idveterinario='$id'";
$a[5]="update veterinario set telefone='$telefone' where idveterinario='$id'";
$b[0]=$nome;
$b[1]=$endereco;
$b[2]=$email;
$b[3]=$login;
$b[4]=$senha;
$b[5]=$telefone;
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
  $this->listanovoalter($id);
} 
public function alterafoto($a,$id,$con){
// include 'Conexao.php';
$sql="update veterinario set imagem='$a' where idveterinario='$id'";
$res=mysqli_query($con,$sql);
$linhas= mysqli_affected_rows($con);
if ($linhas==1) {
 echo "<script>alert('Foto de perfil aterada com sucesso!');</script>";    
} else {
    echo "<script>alert('Erro ao  alterar foto do perfil!');</script>";  
}
mysqli_close($con);
}


}