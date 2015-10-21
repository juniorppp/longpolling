function getContent( timestamp )
{
	var queryString = { 'timestamp' : timestamp };
	
	$.get ( 'server.php' , queryString , function ( data )
	{
		var obj = jQuery.parseJSON( data );

		//$( '#response' ).html( obj.content );
		$('<div id="response" class="balaodialogo">' + obj.content + '</div>').appendTo('#msgs');
		//$('#data').html("<i class='fa fa-clock-o'></i> "+obj.data);
		$('#nick').html(obj.nick);
		
		// reconecta ao receber uma resposta do servidor
		getContent( obj.timestamp );
	});
}

$( document ).ready ( function ()
{
	getContent();
});

