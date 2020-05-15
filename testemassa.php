<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php
  if (isset($_FILES['foto-da-noticia'])):
    include 'testephp/Conexao.php';
    include 'testephp/Comveterinario.php';
//criando um array com os formatos permitidos
  $formatosPermitidos = array("png","jpeg","jpg","JPG",'JPEG','PNG');

   //var_dump($_FILES);
  
$extensao =pathinfo($_FILES['foto-da-noticia']['name'],PATHINFO_EXTENSION);//funcao para peggar a extensao
//  echo" $extensao";

  //agora verificando se aquela extensao existe no noosso arrya
  if(in_array($extensao,$formatosPermitidos)):
  //echo "existe";
    $pasta ="imgvet/";   //para onde vai
      $temporario=$_FILES['foto-da-noticia']['tmp_name'];
      $novoNome= uniqid().".$extensao";
      if(move_uploaded_file($temporario,$pasta.$novoNome)):
           $mensagem= "Uploaf feito com sucesso";
              $adm = new Comveterinario();
              $adm->alterafoto($novoNome,1);
      else:
        $mensagem= "erro,nao foi possivel fazer o upload";
       endif;
     else:
      //echo "nao existe";
             echo "<script>alert('insira uma imagem nos padroes desejados')</script>";
     endif;
    
  endif;




?>
</body>
</html>