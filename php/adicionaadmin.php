<?php
if (isset($_POST['forncalx1'])) {
	# code...
include '../testephp/Conexao.php';
include '../testephp/Comfornecedor.php';
$a=$_POST['categoriasol'];
$b=$_POST['forncalx1'];
$c=$_POST['forncalx2'];
$d=$_POST['forncalx3'];
$e=$_POST['forncalx4'];
$f=$_POST['forncalx5'];

$fo= new Comfornecedor();
$fo->cadastraradm($c,$e,$a,$d,$b,$f);
// echo "$a e $b $c e $d e $e $f";
$fo->listanovo();
}
if (isset($_POST['buscacomin1'])) {
include '../testephp/Conexao.php';
include '../testephp/Comfornecedor.php';
$a=$_POST['buscacomin1'];
$fo= new Comfornecedor();
$fo->pesquisa($a);
}
if (isset($_POST['a'])) {
include '../testephp/Conexao.php';
include '../testephp/Comfornecedor.php';
$fo= new Comfornecedor();
$fo->apagar($_POST['a']);
}
if (isset($_GET['a'])) {
	$a=$_GET['a'];
include '../testephp/Conexao.php';
include '../testephp/Comfornecedor.php';
$fo= new Comfornecedor();
$fo->abritelaaltera($a);
	// echo "<script>alert('$a');</script>";
}
if (isset($_POST['altefornu1'])) {
$cnpj=$_POST['altefornu1'];
$nome=$_POST['altefornu2'];
$endereco=$_POST['altefornu3'];
$email=$_POST['altefornu4'];
$telefone=$_POST['altefornu5'];
$id=$_POST['altefornu6'];
include '../testephp/Conexao.php';
include '../testephp/Comfornecedor.php';
$fo= new Comfornecedor();
$fo->alterardevez($cnpj,$nome,$endereco,$email,$telefone,$id);
}







?>