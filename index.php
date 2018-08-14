<?php
	$token = "637138978:AAGPr-IXTHJ6T41qcChyogonTyXcbblEpgw";
	$api = "https://api.telegram.org/bot".$token."/";
	
	$update = file_get_contents('php://input');
	$update_array = json_decode($update, TRUE);
	$tamanho = count($update_array["result"]);
	$chatid = $update_array["result"][$tamanho-1]["message"]["chat"]["id"];
	$texto = $update_array["result"][$tamanho-1]["message"]["text"];
	
	file_get_contents($api."sendmessage/chat_id=".$chatid."&text=".$text);
?>