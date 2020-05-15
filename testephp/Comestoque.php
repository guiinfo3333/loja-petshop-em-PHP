<?php

class Comestoque {

public function cadastrarestoque($qtd,$produto_idproduto,$con){
// include 'Conexao.php';
$sql= "INSERT INTO `estoque`(`idestoque`,`qtd`,`produto_idproduto`) VALUES (null,$qtd,$produto_idproduto)";
$res=mysqli_query($con,$sql);
$linhas= mysqli_affected_rows($con);
if ($linhas==1) {
 echo "<script>alert('Com 0 em quantidade,para aumentar a quantidade faça um pedido !');</script>";   
} else {
    echo "<script>alert('Erro ao cadastrar no estoque!');</script>";  
}


}


}