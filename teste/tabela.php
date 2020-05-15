<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title></title>

</head>
<body>

<?php

function maxDays($mm, $yyyy){
$mDay;
	if(($mm == 3) || ($mm == 5) || ($mm == 8) || ($mm == 10)){
		$mDay = 30;
  	}
  	else{
  		$mDay = 31;
  		if( $mm == 1){
   			if (($yyyy % 4 == 0  &&  $yyyy % 100 != 0) || ($yyyy % 4 != 0  &&  $yyyy % 400 == 0)  ){
   			$mDay = 29;
  			}else{
  				$mDay = 28;
  			}
		}
  }
// echo" $mDay";
}
maxDays(1,2015);
$a = date("d/m/Y");
$b=explode("/",$a);
echo $b[0]."<br>";
echo $b[1]."<br>";
echo $b[2]."<br>";
?>

 <div class="rolagemlegal" id="newtabelaproduto">
 <table class="tabelaEditavel" id="newtabelaproduto1">
        <thead>
            <tr>
                <th>Visualizar</th>
                <th>Código da venda</th>
                <th>Categoria de venda</th>
                <th>Cliente</th>
                <th>Data da venda</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#" class="link" onclick="abreinfo()">abrir</a></td>
                <td>222222</td>
                <td>no cartão</td>
                <td>Rafael Leonan</td>
                <td>24/03/2019</td>
            </tr>
            <tr>
                <td><a href="#" class="link" onclick="abreinfo()">abrir</a></td>
                <td>Maria Silva</td>
                <td>mariasilva@mail.com</td>
                <td>(81) 8787-8686</td>
                <td>(81) 8787-8686</td>
            </tr>
            <tr>
               <td><a href="#" class="link" onclick="abreinfo()">abrir</a></td>
                <td>José Pedro</td>
                <td>zepedro@meuemail.com</td>
                <td>(84) 3232-3232</td>
                  <td>(84) 3232-3232</td>
            </tr>
              <tr>
                 <td><a href="#" class="link" onclick="abreinfo()">abrir</a></td>
                <td>José Pedro</td>
                <td>zepedro@meuemail.com</td>
                <td>(84) 3232-3232</td>
                <td>(84) 3232-3232</td>
            </tr>
              <tr>
            <td><a href="#" class="link" onclick="abreinfo()">abrir</a></td>
                <td>José Pedro</td>
                <td>zepedro@meuemail.com</td>
                <td>(84) 3232-3232</td>
                <td>(84) 3232-3232</td>
            </tr>
             <tr>
                <td><a href="#" class="link" onclick="abreinfo()">abrir</a></td>
                <td>José Pedro</td>
                <td>zepedro@meuemail.com</td>
                <td>(84) 3232-3232</td>
                <td>(84) 3232-3232</td>
            </tr>
             <tr>
                <td><a href="#" class="link" onclick="abreinfo()">abrir</a></td>
                <td>José Pedro</td>
                <td>zepedro@meuemail.com</td>
                <td>(84) 3232-3232</td>
                 <td>(84) 3232-3232</td>
            </tr>
            <tr>
                <td><a href="#" class="link" onclick="abreinfo()">abrir</a></td>
                <td>José Pedro</td>
                <td>zepedro@meuemail.com</td>
                <td>(84) 3232-3232</td>
                 <td>(84) 3232-3232</td>
            </tr>
        </tbody>
    </table>

<!-- tabbbbeeellalala -->
</div>  <!--fim da div rolagem legal-->
</body>
</html>