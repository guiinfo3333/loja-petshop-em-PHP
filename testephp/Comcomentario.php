<?php

class Comcomentario {

public function cadastrarcomen($corpo,$validado,$idcli,$idprod,$data,$avaliacao){
 echo "<script>alert('$corpo');</script>";   
include 'Conexao.php'; 
$sql= "INSERT INTO `comentario`(`idcomentario`,`corpo`,`validado`,`cliente_idcliente`,`produto_idproduto`,`data`,`avaliacao`) VALUES (null,'$corpo',$validado,$idcli,$idprod,'$data',$avaliacao)";
$res=mysqli_query($con,$sql);
$linhas= mysqli_affected_rows($con);
if ($linhas==1) {
 echo "<script>alert('Avaliação realizada com sucesso!');</script>";    
} else {
    echo "<script>alert('Erro ao realizar avaliação !');</script>";  
}
$this->listanovo($idprod);

mysqli_close($con);
}
public function listanovo($idprod){
        include '../testephp/Conexao.php';
$sql1= "select co.data,co.corpo,co.avaliacao,p.idproduto,c.nome,c.imagem from comentario as co join produto as p
on p.idproduto = co.produto_idproduto
join cliente c
on c.idcliente=co.cliente_idcliente
 where p.idproduto=$idprod order by co.idcomentario DESC;";
$fica=mysqli_query($con,$sql1); 
  $ca=mysqli_num_rows($fica);
if ($ca==0) {
 echo " 
       <div id='oi'>
        <fieldset id='fiel'>
         <form action='php/addcatcomentario.php' method='POST' id='neewcom'>
            <legend>Seja o primeiro a avaliar estes produto:</legend>
            <ul>
                <li><img src='imgcliente/usuario.png' id='fotoP'/></li>
                <li><b id='name_p'>$vreg[4]</b></li>
                <li><textarea placeholder='Digite sua critica ou sugestão...'></textarea></li>
            </ul>

    <input type='submit' name='enviar_ava' value='Enviar'/>
         </form>
        </fieldset>
    </div>";
}else if($ca==1){
  echo " 
       <div id='oi'>
        <fieldset id='fiel'>
         <form action='php/addcatcomentario.php' method='POST' id='neewcom'>
            <legend>1 avaliação feita , deixe também sua avaliação !</legend>
            <ul>
                <li><img src='imgcliente/usuario.png' id='fotoP'/></li>
                <li><b id='name_p'>$vreg[4]</b></li>
                <li><textarea placeholder='Digite sua critica ou sugestão...'></textarea></li>
            </ul>
    
    <input type='submit' name='enviar_ava' value='Enviar'/>
        </form>
        </fieldset>
    </div>";
}else if($ca>1){
  echo " 
       <div id='oi'>
        <fieldset id='fiel'>
         <form action='php/addcatcomentario.php' method='POST' id='neewcom'>
            <legend>$ca avaliações feitas , deixe também sua avaliação !</legend>
            <ul>
                <li><img src='imgcliente/usuario.png' id='fotoP'/></li>
                <li><b id='name_p'>Você</b></li>
                <li><textarea placeholder='Digite sua critica ou sugestão...' name='nnewcom'></textarea></li>
            </ul>
       
    <input type='submit' name='enviar_ava' value='Enviar'/>
        </form>
        </fieldset>
    </div>";
}

while($vreg= mysqli_fetch_row($fica)){
  if (empty($vreg[5])) {
    $new=explode("-",$vreg[0]);
              echo " 
       <div id='oi'>
        <fieldset id='fiel'>
            <ul>
                <li><img src='imgcliente/usuario.png' id='fotoP'/></li>
                <li><b id='name_p'>$vreg[4]<br>$new[2]/$new[1]/$new[0]</b></li>
                <li><textarea placeholder='Digite sua critica ou sugestão...' disabled>$vreg[1]</textarea></li>
            </ul>
              
        </fieldset>
    </div>";
  }else{
     $new=explode("-",$vreg[0]);
       echo " 
       <div id='oi'>
        <fieldset id='fiel'>
            <ul>
                <li><img src='imgcliente/usuario.png' id='fotoP'/></li>
                <li><b id='name_p'>$vreg[4]<br>$new[2]/$new[1]/$new[0]</b></li>
                <li><textarea placeholder='Digite sua critica ou sugestão...'>$vreg[1]</textarea></li>
            </ul>
    
        
        </fieldset>
    </div>";
  }
       
}
 
}
//comeca agora para alterar situacao do comentaario
public function alteracom($id){
    $qtdv=0;
    $qtdn=0;
    foreach ($id as $key => $value) {
    include 'Conexao.php'; 
    $sql1 = "select validado from comentario where idcomentario= $value";
    $fica1=mysqli_query($con,$sql1); 
     while($vreg= mysqli_fetch_row($fica1)){

if ($vreg[0]) {
    /////////////////
$sql="update comentario set validado=0 where idcomentario='$value'";
$fica=mysqli_query($con,$sql); 
$qtdn=$qtdn+1;
/////////////////////// 
}else{
     /////////////////
$sql="update comentario set validado=1 where idcomentario='$value'";
$fica=mysqli_query($con,$sql); 
$qtdv=$qtdv+1;
/////////////////////// 
}
     }


 
    }
echo "<script>alert('$qtdn comentários  foram não validados !');</script>";
echo "<script>alert('$qtdv comentários foram validados !')</script>";
$this->listacomnaadm();
}

//termina agora para alterar situacao do comentaario
//comeca lista comentario na adm
public function listacomnaadm(){
    echo " <table class='tabelaEditavel' id='tabelamaior'>
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
        <tbody>";
  include 'Conexao.php';
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
<td><a href='addcatcomentario.php?cli=$vreg[6]&com=$vreg[7]' class='link' onclick='abreinfo3()'>ação</a></td>
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
  echo "</tbody>
    </table>";
}
//fim do lista comentario na adm
//pesquisa comentario masssa
public function pesquisa($nome){
include('Conexao.php');
 $campo="'%".$nome."%'";
$sql= "select co.data,co.corpo,co.avaliacao,p.idproduto,c.nome,c.imagem,c.idcliente,co.idcomentario,p.nome,co.validado from comentario as co join produto as p
on p.idproduto = co.produto_idproduto
join cliente c
on c.idcliente=co.cliente_idcliente
 where c.nome like $campo or co.data like $campo";
    $fica=mysqli_query($con,$sql);

  echo " <table class='tabelaEditavel' id='tabelamaior'>
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
        <tbody>";
          while($vreg= mysqli_fetch_row($fica)){
$data = explode("-", $vreg[0]);
echo"
    <tr>
<td><a href='addcatcomentario.php?cli=$vreg[6]&com=$vreg[7]' class='link' onclick='abreinfo3()'>ação</a></td>
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
  echo "</tbody>
    </table>";
}


//fim do comentario massa

}