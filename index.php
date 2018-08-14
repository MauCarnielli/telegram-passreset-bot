<?php
	
	$api = "https://api.telegram.org/bot637138978:AAGPr-IXTHJ6T41qcChyogonTyXcbblEpgw/";
	
	function processaMensagem($mensagem){
		$message_id = $mensagem['message_id'];
		$chat_id = $mensagem['chat']['id'];
		if(isset($mensagem['text'])){
			$text = $mensagem['text'];
		}
	}
	
	function mandaMensagem($metodo, $parametros){
		$options = array(
			'http' => array(
				'method' => 'POST',
				'content' => json_encode($parametros),
				'headers' => "Content-Type: application/json\r\n" .
							 "Accept: application/json\r\n"
			)
		);
		$contexto = stream_context_create($options);
		file_get_contents($api.$metodo, false, $contexto);
	}
	
	echo "TESTE";
	
?>