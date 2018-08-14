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
		
	}
	
	echo "TESTE";
	
?>