<?php

class Mysql{
	
	function __construct(){
	
		$host = 'localhost';//host onde está hospedado o banco de dados
		$user = 'filipide_admin';//usuario do banco de dados
		$password = 'filipi876105';//senha
		$data_base = 'filipide_api';//schemma do banco ou nome da base de dados
		$conexao = mysql_connect($host, $user, $password);//conexao
		$database = mysql_select_db($data_base);//seleciona base de dados
			
	}
	
	function  sql_query($query){
	
			$query = mysql_query($query);
			return $query;
	}
	
	function fetch_array($sql){
	
		$array = mysql_fetch_array($sql);
		return $array;
	}
	
	function num_rows($sql){
	
		$rows = mysql_num_rows($sql);
		return $sql;
	}
}
?>