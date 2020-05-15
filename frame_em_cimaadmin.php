<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title></title>
<link rel="stylesheet" type="text/css" href="css/cssadmin.css">
<script type="text/javascript" src="js/js.js"></script>
<style>
#imgadmadm{
    background-image:url('img/usuario.png');
}
#fotousu{
     top:10px;
    border:3px solid black;
    width:50px;
    height:50px;
    float:right;
   position:relative;
    right:15px;
    background-size:cover;
    border-radius:13px;
    background-image:url('img/usuario.png');
    background-color: white;

}
#fotousu  #menulog{
  display:block;
position:relative;
top:55px;
width:210px;
right:100px;
z-index:60;
left:-150px;
text-align: center;
list-style:none;
}
#fotousu  #menulog li{
background-color:#9bbbef;
  float:right;
  width:200px;
}
#fotousu #menulog li a:hover{
color:blue;

}
#fotousu  #menulog li a{

 width:200px;
  text-decoration:none;
}
#nomeusu{
    top:14px;
    position:absolute;
    left:-100px;
    font-family:arial;
    font-size:18px;
}
</style>
</head>
<body>
  <?php
session_start();
$nome=$_SESSION['nomeadm'];
$nome1=explode(" ",$nome);
  ?>
  <h1 id="ntiadm">ADMINISTRAÇÃO</h1>
	 <div id='fotousu' onclick="ak()">
  <h1 id='nomeusu' onclick="ak()"><?php echo "$nome1[0]";?></h1>
  <ul id='menulog'  onMouseOver='ak()' onMouseOut ='saimenuusuario()'>
<li><a href='usuarioPerfil.php'>Alterar suas informações</a></li>
<li><a href='indexnormal.php'>Sair</a></li>
  </ul>
  </div>
	<div class="conter" >
<ul class="lista">
<li class="lista1 lista2"><a href="administracao.php" target="t" onclick="oi()">Controle de Estoque</a>
	<img src="img/controle.png" class="imagem-menu">
</li>
<li class="lista1 lista2"><a href="adminpublicacao.php" target="t">Publicação de Produtos</a>
	<img src="img/publicar.png" class="imagem-menu">
</li>
<li class="lista1 lista2"><a href="admincomen.php" target="t">Controle de Comentários</a>
	<img src="img/comentar.png" class="imagem-menu">
</li>
<li class="lista1 lista2"><a href="adminconsulta.php" target="t">Controle de Consultas</a>
	<img src="img/doutor.png" class="imagem-menu">
</li>
</ul>
</div>
<script type="text/javascript">
	
  function oi(){
alert(("oi");
}
</script>
</body>
</html>