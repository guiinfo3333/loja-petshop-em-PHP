<?php
// $extensao =pathinfo($_FILES['foto-da-noticia']['name'],PATHINFO_EXTENSION);
// echo "<script>a sua extensao é $extensao <script>";
if (isset($_POST['vetaddphp1'])) {
include '../testephp/Conexao.php';
include '../testephp/Comveterinario.php';
$a=$_POST['vetaddphp1'];
$b=$_POST['vetaddphp2'];
$c=$_POST['vetaddphp3'];
$d=$_POST['vetaddphp4'];
$e=$_POST['vetaddphp5'];
$f=$_POST['vetaddphp6'];

$fo= new Comveterinario();
$fo-> cadastrarvet($a,$b,$c,$d,$e,$f);

// echo "$a e $b $c e $d e $e $f";
$fo->listanovo();
}
if (isset($_POST['buscacomvethaum'])) {
include '../testephp/Conexao.php';
include '../testephp/Comveterinario.php';
$a=$_POST['buscacomvethaum'];
$fo= new Comveterinario();
$fo->pesquisa($a);
}
if (isset($_POST['altefornu1alte1'])) {
include '../testephp/Conexao.php';
include '../testephp/Comveterinario.php';
$nome=$_POST['altefornu1alte1'];
$endereco=$_POST['altefornu1alte2'];
$email=$_POST['altefornu1alte3'];
$login=$_POST['altefornu1alte4'];
$senha=$_POST['altefornu1alte5'];
$telefone=$_POST['altefornu1alte6'];
$id=$_POST['idvetsal'];
// $extensao =pathinfo($_FILES['foto-da-noticia']['name'],PATHINFO_EXTENSION);
// echo "<script>a sua extensao é $extensao <script>";
$fo= new Comveterinario();
$fo->alterardevez($nome,$endereco,$email,$login,$senha,$telefone,$id);
$fo->listanovoalter($id);
}



?>