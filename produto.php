<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device=width">
        <title>Recanto dos Bichos - PetShop Online</title>
        <link rel="stylesheet" type="text/css" href="css/produto.css">
        <link rel="stylesheet" href="css/bootstrap.css">
            <script src="js/funcoes.js"></script>
            <script src="jquery/jquery-3.3.1.min.js"></script>
         <link rel="stylesheet" type="text/css" href="css/cssavaliacao.css">
<style type="text/css">
  
  input[name="enviar_ava"] {
bottom:-90px;

  }
  #ajj{
    position:relative;
    top:50px;
  }
</style>
    </head>
    
    <body>
      <?php
if (!isset($_GET['a'])) {
   header('Location:indexnormal.php');
}else{
  session_start();
  $_SESSION['prod']=$_GET['a'];
 
  //adiciona produto
}

      ?>
        <style>

body{
  overflow-x:hidden;
}
      </style>
        <?php include("includes/header.php")?>
        
        <?php require_once 'includes/menu.php'; ?>
    
        
<div class="container">
  <!-- <script type="text/javascript">
     var url = window.location;
        url = url.toString()
        url = url.split("produto.php");
        url = url[0];
        alert(url[0]);
  </script> -->


    <div class="produto" style="margin-top: 0px;">			
            
        <?php
include 'testephp/Conexao.php';
$a=$_GET['a'];
$sql1="select p.nome, p.info_aditiva,p.descricao,p.imagem,c.descricao,p.idproduto,p.valor from produto as p join categoriaproduto as c on c.idcategoriaproduto= p.categoriaproduto_idcategoriaproduto where p.idproduto=$a;";
$fica=mysqli_query($con,$sql1); 
while($vreg= mysqli_fetch_row($fica)){
                echo "
              
            <img src='imgprod/$vreg[3]' style='margin-top: 20px;' id='imageshow'>
            <div class='product-resume'>
                
            <h1>$vreg[0]</h1>
                
            -$vreg[1]<br>
            
            </div>
            
            
               
                
              <a href='sacola.php?acao=add&id=$vreg[5]'> <input type='submit' class='comprar checkout' value='Comprar' id='ajj'></a>
                
   
    </div>
    
    <hr>
    
    <div class='detalhes'>
        <h2>Detalhes do Produto</h2>
        <p>-$vreg[2]</p>
    
    <hr>
  ";
               }
        ?>
        
            
    
        
  
        
       <!--  <h2>Especificações</h2>
        <table class="tabela">
            <tbody>
                <tr>
                    <th>Indicação</th>
                    <td>Cachorros</td>
                </tr>
                <tr>
                    <th>Raça</th>
                    <td>Raças Pequenas</td>
                </tr>
                <tr>
                    <th>Idade</th>
                    <td>Idosos</td>
                </tr>
                <tr>
                    <th>Tipo de Ração</th>
                    <td>Premium</td>
                </tr>
                <tr>
                    <th>Composição</th>
                    <td>Farinha de vísceras de frango, milho integral moído, quirera de arroz, proteína isolada de suíno, gordura de frango, polpa de beterraba, fibra de cana de açúcar, farelo de arroz desengordurado, levedura seca de cervejaria, hidrolisado de frango, semente de linhaça, premix vitamínico mineral, cloreto de sódio, cloreto de potássio, parede celular de levedura, sulfato de glicosamina, sulfato e condroitina, hexametafosfato de sódio (0,1%), mananoligossacarídeos, antioxidantes BHA e BHT.</td>
                </tr>
                <tr>
                    <th>Niveis de Garantia</th>
                    <td>
                       <table>  
                           <tr>    
                               <td>Umidade (máx.)</td>    
                               <td>100 g/kg</td>    
                               <td>10%</td>  
                           </tr>  
                           <tr>    
                               <td>Proteína Bruta (mín.)</td>   <td>250 g/kg</td>    
                               <td>25%</td>  
                           </tr>  
                           <tr>    
                               <td>Extrato Etéreo (mín.)</td>   <td>110 g/kg</td>    
                               <td>11%</td>  
                           </tr>  
                           <tr>   
                               <td>Matéria Mineral (máx.)</td>   <td>75 g/kg</td>    
                               <td>7,50%</td>  
                           </tr>  
                           <tr>    
                               <td>Matéria Fibrosa (máx.)</td>   <td>45 g/kg</td>    
                               <td>4,50%</td>  
                           </tr>  
                           <tr>    
                               <td>Cálcio (máx.)</td>    
                               <td>16,0 g/kg</td>    
                               <td>1,60%</td>  
                           </tr>  
                           <tr>    
                               <td>Cálcio (mín.)</td>    
                               <td>8000 mg/kg</td>    
                               <td>0,80%</td>  
                           </tr>  
                           <tr>    
                               <td>Fósforo (mín.)</td>    
                               <td>6000 mg/kg</td>    
                               <td>0,60%</td>  </tr>  
                           <tr>    
                               <td>Sódio (mín.)</td>    
                               <td>2000 mg/kg</td>    
                               <td>0,20%</td>  
                           </tr>  
                           <tr>    
                               <td>Potássio (mín.)</td>    
                               <td>5000 mg/kg</td>    
                               <td>0,50%</td> </tr>  
                           <tr>    
                               <td>Ômega 6 (mín)</td>    
                               <td>20 g/kg</td>    
                               <td>2,00%</td>  
                           </tr> 
                           <tr>    
                               <td>Ômega 3 (mín)</td>    
                               <td>2000 mg/kg</td>    
                               <td>0,20%</td>  
                           </tr>  
                           <tr>    
                               <td>Sulfato de Condroitina</td>   <td>50 mg/kg</td>    
                               <td>&nbsp;</td> 
                           </tr>  
                           <tr>    
                               <td>Sulfato de Glicosamina</td>   <td>500 mg/kg</td>    
                               <td>&nbsp;</td> </tr>  
                           <tr>    
                               <td>Energia Metabolizável</td>   <td>3705 kcal/kg</td>    
                               <td>&nbsp;</td> 
                           </tr>  
                        </table>
                    </td>
                </tr>
            </tbody>    
        </table>
         -->
    </div>
</div>   
<div id="ficaaqui">
        <?php
        $id=$_GET['a'];
        include 'testephp/Conexao.php';
$sql1= "select co.data,co.corpo,co.avaliacao,p.idproduto,c.nome,c.imagem from comentario as co join produto as p
on p.idproduto = co.produto_idproduto
join cliente c
on c.idcliente=co.cliente_idcliente
 where p.idproduto=$id;";
$fica=mysqli_query($con,$sql1); 
  $ca=mysqli_num_rows($fica);
if ($ca==0) {
 echo " 
       <div id='oi'>
        <fieldset id='fiel'>
        <form action='php/addcatcomentario.php' method='POST' id='neewcom'>
            <legend>Seja o primeiro a avaliar este produto:</legend>
            <ul>
                <li><img src='imgcliente/usuario.png' id='fotoP'/></li>
                <li><b id='name_p'>$vreg[4]</b></li>
                <li><textarea placeholder='Digite sua critica ou sugestão...' name='nnewcom'></textarea></li>
            </ul>
     
    <input type='submit' name='enviar_ava' value='Enviar'/>
        </form>
        </fieldset>
    </div>";
}else if($ca==1){
  echo " 
       <div id='oi'>
        <fieldset id='fiel'>
         <form action='php/addcatcomentario.php' method='POST' id='neewcom'>
            <legend>1 avaliação feita , deixe também sua avaliação !</legend>
            <ul>
                <li><img src='imgcliente/usuario.png' id='fotoP'/></li>
                <li><b id='name_p'>$vreg[4]</b></li>
                <li><textarea placeholder='Digite sua critica ou sugestão...' name='nnewcom'></textarea></li>
            </ul>
    <input type='submit' name='enviar_ava' value='Enviar'/>
        </form>
        </fieldset>
    </div>";
}else if($ca>1){
  echo " 
       <div id='oi'>
        <fieldset id='fiel'>
         <form action='php/addcatcomentario.php' method='POST' id='neewcom'>
            <legend>$ca avaliações feitas , deixe também sua avaliação !</legend>
            <ul>
                <li><img src='imgcliente/usuario.png' id='fotoP'/></li>
                <li><b id='name_p'>$vreg[4]</b></li>
                <li><textarea placeholder='Digite sua critica ou sugestão...' name='nnewcom'></textarea></li>
            </ul>
       
    <input type='submit' name='enviar_ava' value='Enviar'/>
        
        </fieldset>
        </form>
    </div>";
}

while($vreg= mysqli_fetch_row($fica)){
  if (empty($vreg[5])) {
    $new=explode("-",$vreg[0]);
              echo " 
       <div id='oi'>
        <fieldset id='fiel'>
            <ul>
                <li><img src='imgcliente/usuario.png' id='fotoP'/></li>
                <li><b id='name_p'>$vreg[4]<br>$new[2]/$new[1]/$new[0]</b></li>
                <li><textarea placeholder='Digite sua critica ou sugestão...' disabled>$vreg[1]</textarea></li>
            </ul>
            
        </fieldset>
    </div>";
  }else{
     $new=explode("-",$vreg[0]);
       echo " 
       <div id='oi'>
        <fieldset id='fiel'>
            <ul>
                <li><img src='imgcliente/$vreg[5]' id='fotoP'/></li>
                <li><b id='name_p'>$vreg[4]<br>$new[2]/$new[1]/$new[0]</b></li>
                <li><textarea placeholder='Digite sua critica ou sugestão...'>$vreg[1]</textarea></li>
            </ul>
        
        
        </fieldset>
    </div>";
  }
       
}
    ?>
  </div>
  <script type="text/javascript">
     $(document).ready(function(){

    $(document).on('submit','#neewcom',function(event){
       event.preventDefault();
      var dados=$(this).serialize();
      var res=confirm("Deseja realizar mesmo esta ação ?");
      if (res) {
        if(dados===""){
          alert("Você precisa escrever algo!");
        }else{
        $.ajax({
            url: 'php/addcatcomentario.php',
            method: 'post',
            dataType: 'html',
            data: dados,
            success: function(data){
                $('#ficaaqui').html(data);
            }
        });
        //coloco aqui o resto das chaves
      }
      }
    });


});
</script>
    </body>
    
</html>