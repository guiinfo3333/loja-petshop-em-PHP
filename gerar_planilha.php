<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->
 <!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
		<style type="text/css">
			.tableedi
		</style>
	<head>
	<body>
		<?php
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'msgcontatos434.xls';
		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table class="tableeditavel" style="background-color:blue;font-family:arial;text-align:center;color:white;">';
		$html .= '<tr>';
		$html .= '<td colspan="5">Planilha Mensagem de Contatos</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>ID</b></td>';
		$html .= '<td><b>Nome</b></td>';
		$html .= '<td><b>E-mail</b></td>';
		$html .= '<td><b>Assunto</b></td>';
		$html .= '<td><b>Data</b></td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td>1</td>';
		$html .= '<td>Cesar</td>';
		$html .= '<td>cesar@celke.com.br</td>';
		$html .= '<td>Dúvida sobre o curso</td>';
		$html .= '<td>01/01/2016</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td>1</td>';
		$html .= '<td>Kelly</td>';
		$html .= '<td>kelly@celke.com.br</td>';
		$html .= '<td>Dúvida sobre o curso</td>';
		$html .= '<td>01/01/2016</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td>1</td>';
		$html .= '<td>Jessica</td>';
		$html .= '<td>jessica@celke.com.br</td>';
		$html .= '<td>Dúvida sobre o curso</td>';
		$html .= '<td>01/01/2016</td>';
		$html .= '</tr>';
		
		$html .= '</table>';
		
		// Configurações header para forçar o download
		header ("Expires: Mon, 07 Jul 2016 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit;?>
	</body>
</html>