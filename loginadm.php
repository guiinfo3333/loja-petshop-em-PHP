<?php header("Content-type: text/html ; charset=utf-8",true);?>
<html>
<head>
<title>Validando Formulários com Javascript</title>
<script language="javascript" type="text/javascript">
function validar() {

var email = form1.email.value;
var senha = form1.senha.value;
if (email == "") {
alert('Preencha o campo com seu email');
form1.email.focus();
return false;
}

if (senha == "") {
alert('Preencha o campo com sua senha');
form1.senha.focus();
return false;
}

}
</script>
<style>
body{
    margin: 0;
    padding: 0;
    background: url(img/.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
.login-box{
    width: 320px;
    height: 420px;
    background-color: rgba(10,23,55,0.5);
	border-radius:30px;
    color: #aeaeae;
    position: absolute;
    margin-top:100px;
	margin-left:650px;
    box-sizing: border-box;
    padding: 70px 30px;
}
.avatar{
    width:100px;
    height:100px;
    border-radius:60px;
    position: absolute;
    top: -70px;
    left:110px;
}
h1{
    margin: 0px;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
	
}
.login-box input{
    width: 270px;
    margin-bottom: 10px;
}
.login-box input[type="text"],input[type="password"]{

    border: none;
    border-bottom: 1px solid white;
    background: transparent;
    outline: none;
    height: 50px;
    color: #aeaeae;
    font-size: 16px;
}
.login-box input[type="submit"]{
    margin-top:20px;
    border: none;
    outline: none;
    height: 45px;
	
    background: #aeaeae;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.login-box input[type="submit"]:hover{

    cursor: pointer;
    background:#1c8adb;
    color: #000;
}

</style>
</head>
<body>
 <div class="login-box">
  <img src="img/admfoto.png" class="avatar">
  <h1>Painel de Controle</h1>
<form name="form1" action="loginadm.php" method="post">
User:
<input name="emai" type="text" placeholder="enter email"><br /><br />
Senha:
<input name="senh" type="password" placeholder="enter senha"><br /><br />
<input type="submit" name="Enviar" onclick="return validar()">
</form>
 <div>

<?php
  if (isset($_POST['Enviar'])):
  include "testephp/Conexao.php";


      $c=isset($_POST['emai'])?$_POST['emai']:null;
      $d=isset($_POST['senh'])?$_POST['senh']:null;
      $sql="select * from veterinario where email ='$c' and senha='$d'";
     
     $res=mysqli_query($con,$sql);
     $oi= mysqli_affected_rows($con);
     if ($oi>0) { 
        while($vreg= mysqli_fetch_row($res)){
        session_start();
        $_SESSION['idadm']=$vreg[0];
        $_SESSION['nomeadm']=$vreg[1];
       

      }
         echo "<script>window.location.href='admin.php';</script>";
        
     }else{
         echo "<script>alert('login ou senha estão errados');</script>";
     }
     

endif;
?>
</body>
</html>
