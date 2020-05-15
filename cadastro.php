<!DOCTYPE html>
<html>

<head>
    <title>Cadastro | Star Pets</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/icons_png/icone-patas-caes_3.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/login.css" type="text/css">

</head>

<body>

    <header class="fixed-header">
        <div>Crie sua Conta</div>
        <a id="" href="indexnormal.php" class="icon-close"></a>
    </header>

    <div class="tela" style="height:460px;">

        <div class="container">

            <form method="POST" action="cadastro.php">
                <div class="form-group">
                    <label class="ep-label">E-mail*</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="seu@email.com">

                    <div class="form-row">
                        
                        <div class="col-xl-6 bottom-space">
                            <label class="ep-label">Nome*</label>
                            <input class="form-control" type="text" name="nome" id="nome"  maxlength="20" pattern="[A-zÀ-ú ]{2,20}" title="Seu primeiro nome deve conter ao menos 2 caracteres, use apenas letras e espaços." placeholder="Paulo" autocomplete="nome" >
                            <span class="invalid-feedback">Digite seu nome</span>
                        </div>
                        
                        <div class="col-xl-6 bottom-space">
                            <label class="ep-label">Sobrenome*</label>
                            <input class="form-control" type="text" name="sobrenome" id="sobrenome" maxlength="50" pattern="[A-zÀ-ú ]{2,50}" title="Seu sobrenome deve conter ao menos 2 caracteres, use apenas letras e espaços." placeholder="da Silva" autocomplete="sobrenome">
                            <span class="invalid-feedback">Digite seu sobrenome</span>
                        </div>
                        
                        <div class="col-xl-6 bottom-space">
                            <label class="ep-label">CPF*</label>
                            <input class="form-control" type="tel" name="cpf" id="cpf" placeholder="000.000.000-00" autocomplete="document"  value=""  maxlength="14"><span class="invalid-feedback">Digite um CPF válido</span>
                        </div>
                        
                        
                        <div class="col-xl-6 bottom-space">
                            <label class="ep-label">CEP*</label>
                            <input class="form-control" type="tel" name="cep" id="cep" placeholder="00000-000" autocomplete="document" value=""  maxlength="14"><span class="invalid-feedback">Digite um endereço válido</span>
                        </div>

                         <div class="col-xl-6 bottom-space">
                            <label class="ep-label">Endereço*</label>
                            <input class="form-control" type="tel" name="Endereco" id="Endereco" placeholder="Digite o Endereço" autocomplete="document"  value=""  maxlength="20"><span class="invalid-feedback">Digite um endereço válido</span>
                        </div>

                        <div class="col-xl-6 bottom-space">
                            <label class="ep-label">Telefone*</label>
                            <input class="form-control" type="tel" name="Telefone" id="Telefone" placeholder="(00) 00000-0000"  value=""  maxlength="15" pattern=".{10,11}" title="Seu telefone deve conter 11 ou 12 dígitos." ><span class="invalid-feedback">Digite seu número de telefone</span>
                        </div>
                    
                    </div>

                    <div class="form-row">

                        <div class="col-xl-12 col-lg-6 bottom-space">
                            <label class="ep-label">Crie uma senha*</label>
                            <input type="password" name="senha" placeholder="******" class="form-control" id="senha" minlength="6" required="">
                            <span class="invalid-feedback">Digite uma senha</span>
                             <label class="ep-label">Digite novamente a senha</label>
                            <input type="password" name="senha2" placeholder="******" class="form-control" id="senha" minlength="6" required="">
                            <span class="invalid-feedback">Digite uma nova senha</span>
                            <button type="submit" class="botao botao-primario col-xl-12" style="margin-top: 10px;" value="Cadastrar" name="cadastrar" id="cadastrar">
                                <span class="loader loader-xs white vertical-middle" style="display: none;"></span>
                                <span class="vertical-middle">Cadastrar</span>
                            </button>
                        </div>

                    </div>
                     
                    <div class="row text-center" style="margin-top: 15px; margin-left: 10px;"> 
						<p>Já é cadastrado no Star Pets? <a href="login.php">Clique aqui</a> para logar!</p>
					</div>

                </div>
            </form>
        </div>
    </div>
     <?php
  if (isset($_POST['cadastrar'])):
      include "testephp/Conexao.php";
       $nome=isset($_POST['nome'])?$_POST['nome']:null;
       $sobrenome=isset($_POST['sobrenome'])?$_POST['sobrenome']:null;
      $email=isset($_POST['email'])?$_POST['email']:null;
      $end=isset($_POST['Endereco'])?$_POST['Endereco']:null;
      $senha=isset($_POST['senha'])?$_POST['senha']:null;
      $senha2=isset($_POST['senha2'])?$_POST['senha2']:null;
      $cep=isset($_POST['cep'])?$_POST['cep']:null;
      $cpf=isset($_POST['cpf'])?$_POST['cpf']:null;
      $tel=isset($_POST['Telefone'])?$_POST['Telefone']:null;
      $nomecompleto =$nome." ".$sobrenome; 
      $novoendereco= $end . " ".$cep;
         // echo "<script>alert(' $nome //  $sobrenome //  $email // $end // $senha // $cep');</script>";
       if (!$senha2==$senha) {
           echo "<script>alert('As senhas digitadas não são iguais!');</script>";
       }else{
        
      $sql="select * from cliente where email ='$email'";
      $sql1="INSERT INTO `cliente`(`idcliente`,`nome`, `endereco`, `email`, `senha`, `imagem`, `cpf`, `cep`, `telefone`) VALUES (null,'$nomecompleto','$novoendereco','$email','$senha',default,'$cpf','$cep','$tel')";
     $res=mysqli_query($con,$sql);
      $ca=mysqli_num_rows($res);
     if ($ca>0) {
         echo "<script>alert('Este email já está sendo usado!');</script>";
          mysqli_close($con);


     }else{
 $res= mysqli_query($con,$sql1);
 if ($res) {
   
 echo "<script>alert('cadastro realizado com sucesso');</script>";
// echo "<script> window.location.href='indexnormal.php';</script>";
 }else{
echo "<script>alert('Erro ao cadastrar');</script>";

 }


     }

       }
    endif; 
 
      ?>
</body>

</html>
