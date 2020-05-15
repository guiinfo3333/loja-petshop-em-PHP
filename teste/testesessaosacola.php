<!DOCTYPE html>
<html>
<head>
	<title>teste sacola</title>
</head>
<body>
<?php
session_start();
$array[] = '111';
$array[] = 'asasa';

$_SESSION['array'] = $array;
print_r($_SESSION['array'][1]);
?>
</body>
</html>