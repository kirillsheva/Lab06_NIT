<?php
include("./config.php")
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ICQ</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<script>
		$(document).ready(function(e){
function displayChat(){
$.ajax({

	url:'displayChat.php',
	type:'POST',
	success:function(data){
		$("#chatDisplay").html(data);
	}
});
}
 setInterval(function(){displayChat();},1000);

			$('#sendMessageBtn').click(function(e){
var name=$('#user_name').val();
var message=$('#message').val();

if(name!="" && message!=""){
$("#myChatForm")[0].reset();
$.ajax({

	url:'sendChat.php',
	type:'POST',
	data:{
		uname:name,
		umessage:message
	}
});
}
			});
		});

	</script>
</head>
<body>
<div class="container-fluid">
		<h3 class="text-center">MyICQ</h3>
	<div class="well" id="chatbox">
	<div id="chatDisplay"></div>

	</div>
</div>
<form id="myChatForm">
	
	<input type="text" id="user_name" placeholder="Введіть Ваше ім'я:"><br>
	<textarea name="message" id="message" cols="30" rows="4" placeholder="Введіть Ваше повідомлення:"></textarea><br>
   <button type="button" class="btn btn-lg" id="sendMessageBtn">Відправити повідомлення</button>
</form>



</body>
</html>