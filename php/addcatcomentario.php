<?php
session_start();
  if (!isset($_SESSION['nome'])) {

echo "<script>alert('Você precisa está logado para desenvolver esta ação !')</script>";
$idprod= $_SESSION['prod'];
echo "<script>alert('Você precisa escrever algo!')</script>";
 include '../testephp/Conexao.php';
include '../testephp/Comcomentario.php';
$a= new Comcomentario();
$a->listanovo($idprod);
  }else{

if (isset($_POST['nnewcom'])) {
if (empty($_POST['nnewcom'])) {
	$idprod= $_SESSION['prod'];
echo "<script>alert('Você precisa escrever algo!')</script>";
 include '../testephp/Conexao.php';
include '../testephp/Comcomentario.php';
$a= new Comcomentario();
$a->listanovo($idprod);
}else{

$idprod= $_SESSION['prod'];
$idusu=$_SESSION['id'];
$corpo=$_POST['nnewcom'];
  $dia=date("d");
  $mes=date("m");
  $ano=date("Y");
 $vartot=$ano.'-'.$mes.'-'.$dia;
 include '../testephp/Conexao.php';
include '../testephp/Comcomentario.php';
$a= new Comcomentario();
$a->cadastrarcomen($corpo,1,$idusu,$idprod,$vartot,5);
}


}
if (isset($_POST['aw'])) {
	$id=$_POST['aw'];
include '../testephp/Conexao.php';
include '../testephp/Comcomentario.php';
$a= new Comcomentario();
$a->alteracom($id);
}


  }










?>