<html>
	<head>
    <style>
.balaodialogo {
position: relative;
background-color: #000;
border-radius: 10px;
width: 200px;
/*height: 150px;*/
height: auto;
min-height: 35px;
line-height: 50px; /* vertically center */
color: white;
text-align: center;
margin-left: 15px;
}

.balaodialogo:after {
content: '';
position: absolute;
width: 0;
height: 0;
border: 15px solid;
border-right-color: #000;
top: 10px;
left: -15px;
margin-left: -15px;
}
</style>
    	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
		<script type="text/javascript" src="client.js"></script>
	</head>
	<body>
		<h3>Conte&uacute;do</h3>
        <div id="msgs">
        <span id="nick"></span>
		<div id="response" class="balaodialogo"></div>
	</div> 
        
        <label>Nick</label>
<input type="text" name="nick" id="nick1">

<label>Mensagem</label>
<textarea id="mensagem"></textarea>
<button onClick="" id="enviar">Enviar Mensagem</button>

 <script>
				$(function(){
		  $("#enviar").click(function(){
			  var nick = $('#nick1').val();
			  var mensagem = $('#mensagem').val()
			  $.post('salva-mensagem.php', {nick:nick, mensagem:mensagem}, function(resposta){
				  //alert(resposta);
				  });
			  });
		});
			  </script>

	</body>
</html>