<?php 

	define('TOKEN','637138978:AAGPr-IXTHJ6T41qcChyogonTyXcbblEpgw');
	define('API','https://api.telegram.org/bot'.TOKEN.'/');
	
	function processMessage($message){
		$message_id = $message['message_id'];
		$chat_id = $message['chat']['id'];
		
		//Checa se a mensagem não está vazia
		if(isset($message['text'])){
			$text = $message['text']; //Atribui a mensagem a váriavel $text
		}
		
		if($text == "Oi"){
			sendMessage("sendMessage", array('chat_id'=>$chat_id, 'text'=>"Deu certo, Maurício.");
		}
		
	}
	
	function sendMessage($method, $parameters){
		$options = array(
			'http' => array(
				'method' => 'POST',
				'content' => $parameters,
				'header' => "Content-Type: application/json\r\n" .
							"Accept: application/json\r\n"
			)
		);
		
		$context = stream_context_create($options);
		file_get_contents(API.$method, false, $context);
	}

?>