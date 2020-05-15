<?php
ini_set('default_charset','UTF-8');
$con=mysqli_connect("localhost","root","","starpet");
mysqli_query($con,"SET NAMES 'utf8'");
mysqli_query($con,"SET character_set_connection=utf8");
mysqli_query($con,"SET character_set_client=utf8");
mysqli_query($con,"SET character_set_results=utf8");

?>