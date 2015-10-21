<?php

require_once("mysql.class.php");

$Mysql = new Mysql;



while ( true ){
	$requestedTimestamp = isset ( $_GET [ 'timestamp' ] ) ? (int)$_GET [ 'timestamp' ] : null;
	// o PHP faz cache de operações "stat" do filesystem. Por isso, devemos limpar esse cache
	//clearstatcache(); // retirar depois
	//$modifiedAt = filemtime( $dataFileName ); //usar somente se for pegar dados de um arquivo
	$query = $Mysql->sql_query("select * from teste order by id DESC");
	$linha = $Mysql->fetch_array($query);
	$modifiedAt = time($linha['hora']);
	if ( $requestedTimestamp == null || $modifiedAt > $requestedTimestamp ){
		//$data = file_get_contents( $dataFileName ); //pega conteúdo do arquivo, se os dados estiverem em um arquivo
		
		$arrData = array(
			'content' => $linha['mensagem'],
			'timestamp' => $modifiedAt,
			//'data' => date("d-m-Y H:i:s", ),
			'nick' => $linha['apelido']
		);
		
		$json = json_encode( $arrData );
		
		echo $json;
		
		break;
	}
	else
	{
		sleep( 2 );
		continue;
	}
}
