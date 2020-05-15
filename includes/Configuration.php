<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Configuração</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?php
define("HOST", "localhost");
define("USER", "root");
define("PASS", "admin");
define ("BDNAME", "site");

mysql_connect (HOST, USER, PASS);
mysql_select_db(BDNAME);
?>
