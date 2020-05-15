<!DOCTYPE html>
<html>
<head>
	<title>Página de Ajuda</title>
	<meta charset="utf-8">

	<style type="text/css">
		html, body {
		min-height: 100%; 				
		}
		*{
		margin: 0; 	
		padding:0;			
		}
		
	.principal{
		position:absolute;
		height: 100%;
		width: 100%;
		top:130px;
	}
	.menu{
		display: block;
		float:left;
		cursor: pointer;
		padding-left: 10px;
		margin-left: 10px;
		border-left:2px solid gray;
		border-bottom:1px solid gray;
	}
	ul.menu li {
		list-style: none;
		height: 50px;
		width: 600px;
	}
	ul.menu li:hover {
		background-color: #e5e5e5;
	}
	
	.menu h3#resposta0{
		font-size:12px;
		cursor: text;
		position: relative;
		list-style: none;
		display:none; 
	}
	.menu h3#resposta1{
		font-size:12px;
		cursor: text;
		position: relative;
		list-style: none;
		display:none; 
	}
	.menu h3#resposta2{
		font-size:12px;
		cursor: text;
		position: relative;
		list-style: none;
		display:none; 
	}
	.menu h3#resposta3{
		font-size:12px;
		cursor: text;
		position: relative;
		list-style: none;
		display:none; 
	}
	.menu h3#resposta4{
		font-size:12px;
		cursor: text;
		position: relative;
		list-style: none;
		display:none; 
	}
	.menu h3#resposta5{
		font-size:12px;
		cursor: text;
		position: relative;
		list-style: none;
		display:none; 
	}
	.menu h3#resposta6{
		font-size:12px;
		cursor: text;
		position: relative;
		list-style: none;
		display:none; 
	}
		.menu h3#resposta11{
		font-size:12px;
		cursor: text;
		position: relative;
		list-style: none;
		display:none; 
	}
	.menu h3#resposta12{
		font-size:12px;
		cursor: text;
		position: relative;
		list-style: none;
		display:none; 
	}
	.menu h3#resposta13{
		font-size:12px;
		cursor: text;
		position: relative;
		list-style: none;
		display:none; 
	}
	.menu h3#resposta14{
		font-size:12px;
		cursor: text;
		position: relative;
		list-style: none;
		display:none; 
	}
	.menu h3#resposta15{
		font-size:12px;
		cursor: text;
		position: relative;
		list-style: none;
		display:none; 
	}
	.menu h3#resposta16{
		font-size:12px;
		cursor: text;
		position: relative;
		list-style: none;
		display:none; 
	}
	.menu h3#resposta17{
		font-size:12px;
		cursor: text;
		position: relative;
		list-style: none;
		display:none; 
	}
	.words{
		color:#292b29;
	}
	#tt{
		position: relative;
		color:#ff4949;
		font-family: times new roman;	
	}
	h2{
		color:black;
		font-size:15px;

	}
	h2:hover{
		color:#414244;
		text-decoration: underline;
	}
	#duvida{
		position: relative;
		border-top: none;
		border-left:2px solid black;
		border-left:none;
		border-bottom:none;
		height: 200px;
		width: 450px;
		top:100px;
		float:left;
		left:10px;
	}
	#textarea{
		position: relative;
		margin-left: 10px;
		outline:none; 
		border-top: none;
		border-left:none;
		border-right:none;
		border-bottom:2px solid black;
		resize:none;
		width: 280px;
		height: 60px;
		top:30px;
		background-color: #e8e8ea;
		padding:10px;
	}
	#pergunta{
		position: relative;
		bottom:22px;
	}
	input[name="enviar"]{
		position: relative;
		background-color: black;
		float:right;
		right:40px;
		top:40px;
		color:white;
		border:0;
		border-bottom:2px solid #e56a05;
		width: 100px;
		cursor: pointer;

	}
	input[name="enviar"]:hover{
		background-color: #e56a05;
		border-bottom:2px solid black;
	}
	a:link{
		text-decoration: none;
	}
	#lege{
		font-family: sans-serif;
		font-size: 20px;
	}
	#ic_pe{
		position:relative;
		float:right;
		right: 500px;
		width: 100px;
		bottom:45px;
		border-radius: 25px;
	}	
	#nav{
		position: relative;
		width: 100%;
		height: 40px;

	}
	#logo{
		position: relative;
		width: 150px;
		height: 100px;
		border-radius:25px;
		transition:all 0.4s ease-out;
		cursor: pointer;
	}
	#logo:hover{
		box-shadow: 5px 5px 10px black;
		transform:translateX(20px);
	}
	header#cabecalho{
		position: relative;
		top:0px;
		background-color: rgb(229, 106, 5);
		width: 100%;
		box-shadow: 1px 1px 20px black;
		position: fixed;
		z-index: 10;
	}
	nav#navp{
		position: relative;
		float:right;
		right: 500px;
		width: 600px;
		height: 90px;

	}

	.container {
  width:100%;
  position: relative;
  height: 50px;
}
input[name="q"]{
  height: 50px;
  border: none;
  outline: none;
  border: 1px solid white;
  border-radius: 25px;
  padding-left: 50px;
  width: 0;
  position: absolute;
  top: 30px;
  left: 0;
  background: none;
  z-index: 3;
  transition: width 1s ease-out;
  
}
input[name="q"]:focus { 
  border: 1px solid black;
  border-radius: 25px;
  width: 100%;
  z-index: 1;
  transition: width 1s ease-in;
}
button { 
  height: 50px;
  width: 50px;
  background:  url('lupa.png')  center no-repeat;
  border: none;
  position: absolute;
  top: 30px;
  left: 0;
  z-index: 2;
  cursor: pointer;
}
button:focus {
  outline: none;
}
/* esconde o LABEL "Buscar" */
label {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0,0,0,0);
  border: 0;	
}
legend#tt{
	position: relative;
	font-size: 30px;
	color:#ff8d1c;
}
legend#tt:hover{
	color:#e87300;
}

	</style>
</head>
<body>

<header id="cabecalho">
	<a href="indexnormal.php"><img src="ICONES/logostar.png" id="logo" title="Voltar á página inicial"/></a> 
	<nav id="navp">
<form action=" " method="post">
  <label for="busca">Buscar</label>
  
  <div class="container" title="Click para pesquisar">  
    <input type="search" id="busca" name="q">
    <button type="submit"><img src="ICONES/lupa.png"/></button>
  </div>

</form>
	</nav>
		
</header>

<div class="principal">

<div id="nav"><center><h1 id="tt">Dúvidas frequentes</h1></center></div>
<hr>
	<ul class="menu">
		<legend id="tt">Sobre compras no site</legend>
            <li>
               <h2 onclick="abrir('resposta0')" title="Click para ver a resposta">Como faço para comprar no site Star Pet?</h2>
               <h3 id="resposta0" class="words">R= Vá até a <a href="indexnormal.php">tela inicial</a> e no menu tem um botão cadastrar, pronto agora é só se cadastra.</h3>
            </li>
            <li>
               <h2 onclick="abrir('resposta1')" title="Click para ver a resposta">Quais formas de pagamento?</h2>
               <h3 id="resposta1" class="words">R= Primeiro você precisa estar <a href="cadastro2.php">cadastrado</a> e <a href="login.php">logado</a> depois você aperta o botão no menu minhas configurações. <p>Irá aparecer um menu com 5 submenus, o 4° é o de ver informações do pet e cadastrar um novo.</p></h3>
            </li>
            <li>
               <h2 onclick="abrir('resposta2')" title="Click para ver a resposta">Como faço para comprar mais de um produto ao mesmo tempo?</h2>
               <h3 id="resposta2" class="words">R= Primeiro você precisa estar <a href="cadastro2.php">cadastrado</a> e <a href="login.php">logado</a> depois você aperta o botão no menu minhas configurações. <p>Irá aparecer um menu com 5 submenus, o 2° é o de marcar consulta.</p></h3></h3>
            </li>
             <li>
               <h2 onclick="abrir('resposta3')" title="Click para ver a resposta">Quanto tempo demora para o produto chegar?</h2>
               <h3 id="resposta3" class="words">R= Temos telefone, whatsapp e email. Todos ficam no rodapé.</h3>
            </li>
            <li>
               <h2 onclick="abrir('resposta4')" title="Click para ver a resposta">Posso escolher a data de entrega?</h2>
               <h3 id="resposta4" class="words">R= Antonio Guilherme, Diogo Sousa, Gustavo Freire, Natan Costa, Rafael Leonan e Tiago Maciel.</h3>
            </li>
            <li>
               <h2 onclick="abrir('resposta5')" title="Click para ver a resposta">O frete é pago?</h2>
               <h3 id="resposta5" class="words">R= Recebemos pagamentos de: Cartão de crédito, Débito,</h3>
            </li>
            <li>
               <h2 onclick="abrir('resposta6')" title="Click para ver a resposta">Quanto tempo demora para entregar o produto?</h2>
               <h3 id="resposta6" class="words">R= Primeiro você precisa estar <a href="cadastro2.php">cadastrado</a> e <a href="login.php">logado</a> depois você escolhe a página de produtos pelo tipo dele,<p>armazena os produtos desejados no carrinho virtual e escohe o tipo de pagamento.</p></h3>
            </li>         
	</ul>
	<ul class="menu">
		<legend id="tt">Outras Perguntas</legend>
            <li>
               <h2 onclick="abrir('resposta11')" title="Click para ver a resposta">Como faço para me cadastrar no site Star Pet?</h2>
               <h3 id="resposta11" class="words">R= Vá até a <a href="indexnormal.php">tela inicial</a> e no menu tem um botão cadastrar, pronto agora é só se cadastra.</h3>
            </li>
            <li>
               <h2 onclick="abrir('resposta12')" title="Click para ver a resposta">Como faço para marcar uma consulta?</h2>
               <h3 id="resposta12" class="words">R= Primeiro você precisa estar <a href="cadastro2.php">cadastrado</a> e <a href="login.php">logado</a> depois você aperta o botão no menu minhas configurações. <p>Irá aparecer um menu com 5 submenus, o 4° é o de ver informações do pet e cadastrar um novo.</p></h3>
            </li>
            <li>
               <h2 onclick="abrir('resposta13')" title="Click para ver a resposta">Como cadastrar um pet?</h2>
               <h3 id="resposta13" class="words">R= Primeiro você precisa estar <a href="cadastro2.php">cadastrado</a> e <a href="login.php">logado</a> depois você aperta o botão no menu minhas configurações. <p>Irá aparecer um menu com 5 submenus, o 2° é o de marcar consulta.</p></h3></h3>
            </li>
             <li>
               <h2 onclick="abrir('resposta14')" title="Click para ver a resposta">Como entrar em contato com o StarPet?</h2>
               <h3 id="resposta14" class="words">R= Temos telefone, whatsapp e email. Todos ficam no rodapé.</h3>
            </li>
            <li>
               <h2 onclick="abrir('resposta15')" title="Click para ver a resposta">Quais os Administradores do site?</h2>
               <h3 id="resposta15" class="words">R= Antonio Guilherme, Diogo Sousa, Gustavo Freire, Natan Costa, Rafael Leonan e Tiago Maciel.</h3>
            </li>
            <li>
               <h2 onclick="abrir('resposta16')" title="Click para ver a resposta">Como alterar uma avaliação sobre um produto?</h2>
               <h3 id="resposta16" class="words">R= Recebemos pagamentos de: Cartão de crédito, Débito,</h3>
            </li>
            <li>
               <h2 onclick="abrir('resposta17')" title="Click para ver a resposta">Como funciona o carrinho de compras virtual?</h2>
               <h3 id="resposta17" class="words">R= Primeiro você precisa estar <a href="cadastro2.php">cadastrado</a> e <a href="login.php">logado</a> depois você escolhe a página de produtos pelo tipo dele,<p>armazena os produtos desejados no carrinho virtual e escohe o tipo de pagamento.</p></h3>
            </li>         
	</ul>
	<fieldset id="duvida">
		<legend id="lege">Fale conosco:</legend>
		<b id="pergunta">Qual sua dúvida?</b><textarea placeholder="Escreva aqui...." id="textarea"></textarea>
		<input type="submit" name="enviar" value="Enviar" title="A resposta será encaminhada para seu email cadastrado." onclick="logar()">
	</fieldset>
</div>

<script type="text/javascript">
	function abrir(el) {
        	var display = document.getElementById(el).style.display;
        	if(display == 'none'){
            	document.getElementById(el).style.display = 'block';
            }else{
            	document.getElementById(el).style.display = 'none';
 			}
  			}
  		function logar(){
  			alert("Você precisa estar logado para enviar uma pergunta.");
  		}
</script>

</body>
</html>