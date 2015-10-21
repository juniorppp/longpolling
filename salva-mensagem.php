<?php
require_once("mysql.class.php");
$mysql = new Mysql;
extract($_POST);

$query = $mysql->sql_query("insert into teste (apelido, hora, mensagem) values('".$nick."', '".time("Y-m-d H:i:s")."', '".$mensagem."')");

if($query)
	echo "Enviada";
else
	echo "Falha no envio";;
?>