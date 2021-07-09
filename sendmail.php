<?php

    $aes_key = 'bUYJ3nTV6VBasdJF';

	$str = "haha";

    /*$data = openssl_encrypt($str, 'AES-128-ECB', $aes_key, OPENSSL_RAW_DATA);
    $data = base64_encode($data);

    echo "data = " . $data;*/
	echo $_GET['data'];
    $data = strval($_GET['data']);
    $decrypted = openssl_decrypt(base64_decode($data), 'AES-128-ECB', $aes_key, OPENSSL_RAW_DATA);
    
	echo "decrypted = " .$decrypted;
	
?>
