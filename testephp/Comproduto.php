<?php

class Comproduto {
public function cadastrarprod($a,$b,$c,$d,$e,$f,$con){
 include 'Conexao.php';
    

$sq1="SELECT * FROM produto where nome='$a'";
$fica=mysqli_query($con,$sq1); 
$linha=mysqli_num_rows($fica);
//   echo "<script>alert($a);</script>";
//echo "<script>alert('$linha');</script>";   
if ($linha==1 || $linha>1) {
    echo "<script>alert('Produto já cadastrado !');</script>"; 
}else{
//echo "<script>alert('$novoNom');</script>"; 
$sql= "INSERT INTO `produto`(`idproduto`,`nome`, `info_aditiva`, `descricao`,`imagem`,`categoriaproduto_idcategoriaproduto`,`valor`) VALUES (null,'$a','$b','$c','$d',$e,$f)";
$res=mysqli_query($con,$sql);
$linhas= mysqli_affected_rows($con);
if ($linhas==1) {
 echo "<script>alert('Produto castrado com sucesso !');</script>";   
   $this->achaid($a,$con);
   echo"<script>window.location.href ='adminpublicacao.php';</script>";
} else {
    echo "<script>alert('Erro ao cadastrar Produto !');</script>";  
}
}
mysqli_close($con);
}
public function listanovo(){
            include('Conexao.php');
            $res= mysqli_query($con,"select * from produto order by idproduto DESC");
            echo " 
     <table class='tabelaEditavel' id='newtabelaproduto1'>
        <thead>
            <tr>
                <th>Visualizar</th> 
                <th>Excluir</th>
                <th>Nome do produto</th>
                <th>Informações aditivas</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Categoria do Produto</th>


            </tr>
        </thead>
        <tbody>";
            while($vreg= mysqli_fetch_row($res)){
              	echo "
 <tr>
                <td><a href='#' class='link' onclick='abreinfo()''>abrir</a></td>
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

public function achaid($nome,$con){
 // include('Conexao.php');
 $res= mysqli_query($con,"select * from produto where nome='$nome'");
 while($vreg= mysqli_fetch_row($res)){
 include 'Comestoque.php';
 $obj= new Comestoque();
 $obj->cadastrarestoque(0,$vreg[0],$con); 	
 }
}













}








