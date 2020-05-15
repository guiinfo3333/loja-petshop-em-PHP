<?php
if (isset($_POST['vetpro1w'])) {

include '../testephp/Conexao.php';
include '../testephp/Comcatconsulta.php';
$a=$_POST['vetpro1w'];
$fo= new Comcatconsulta();
$fo->cadastrarcatconsulta($a);
}
if (isset($_POST['buscacompescat1'])) {
include '../testephp/Conexao.php';
include '../testephp/Comcatconsulta.php';
$a=$_POST['buscacompescat1'];
$fo= new Comcatconsulta();
$fo->pesquisa($a);
// $fo->listanovo();
}
if (isset($_POST['catdd'])) {
include '../testephp/Conexao.php';
include '../testephp/Comcatconsulta.php';
$fo= new Comcatconsulta();
$fo->apagar($_POST['catdd']);
}



?>