<html>

<head>
    <title>Entrar | Recanto dos Bichos</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/icons_png/icone-patas-caes_3.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/login.css" type="text/css">
</head>

<body>
    
    <header class="fixed-header">
        <div>Faça seu login</div>
            <a id="header-close" href="indexnormal.php" class="icon-close"></a>
    </header>

    <div class="tela">
        
        <form method="POST" action="login.php">
            <div class="form-group">
                <label class="ep-label">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="seu@email.com">
                
                <div class="forgot-password-row">
                    
                        <label class="ep-label">Senha</label>
                    <div class="lost-password">
                        <a href="#">esqueci minha senha</a>
                    </div>
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="********">
                </div>
                
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Mantenha-me conectado</label>
            </div>
            <button type="submit" class="botao botao-primario col-xl-12" value="Entrar" id="entrar" name="entrar" style="margin-top: 10px;">Entrar</button>
            
        </form>
        
        <h4>Você ainda não possui uma conta?</h4>
        <a href="cadastro.php">Criar uma Conta</a>
    
    </div>
    <?php
    include "testephp/Conexao.php";
    if (isset($_POST['entrar'])):
       $a=isset($_POST['senha'])?$_POST['senha']:null;
      $b=isset($_POST['email'])?$_POST['email']:null;
        $sql="select * from cliente where email ='$b' and senha='$a'";
        $res=mysqli_query($con,$sql);
     $ca=mysqli_affected_rows($con);
        if ($ca>0) {
          session_start();
         while($vreg= mysqli_fetch_row($res)){
         //$vreg[0]= isset($_SESSION['id'])?$_SESSION['id']:null;
        //$vreg[1]= isset($_SESSION['nome'])?$_SESSION['nome']:null; 
         $_SESSION['id']=$vreg[0];
         $_SESSION['fotousu']=$vreg[5];
         $_SESSION['nome']=$vreg[1];


         header('Location: indexnormal.php');
        mysqli_close($con);
      }
        }else{
             echo "<script>alert('Login ou senha incorretos!');</script>";
        }
     endif;
?>
</body>

</html>