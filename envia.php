<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Enviar Mensagem</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body>

<label>Nick</label>
<input type="text" name="nick" id="nick">

<label>Mensagem</label>
<textarea id="mensagem"></textarea>
<button onclick="" id="enviar">Enviar Mensagem</button>

 <script>
				$(function(){
		  $("#enviar").click(function(){
			  var nick = $('#nick').val();
			  var mensagem = $('#mensagem').val()
			  $.post('salva-mensagem.php', {nick:nick, mensagem:mensagem}, function(resposta){
				  alert(resposta);
				  });
			  });
		});
			  </script>
</body>
</html>