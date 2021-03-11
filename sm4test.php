<?php
require_once 'sm4.php';

$sm4 = new \SM4();
//16字节的HEX编码字符串 32个hex字符
$original_plain_text_data = 'A test by trimps';

$key = 'ce68d4fc82980612f8dc094fee2ba106';
$origin_encrypted_text = '37DEDABEFEDD9F147695BE409C8EA2D0426913236B8F3CC2F0B0CCD8F6239D32';
$encrypted_text_data = $sm4->setKey($key)->encryptData($original_plain_text_data);
$encrypted_text_2_plain_text = $sm4->setKey($key)->decryptData($encrypted_text_data);
$original_decrypted_text = $sm4->setKey($key)->decryptData($origin_encrypted_text);

echo sprintf("加密key：%s\n原始字符串：%s\n加密后字符串：%s\n加密后字符串解密串：%s\n原始加密后字符串：%s\n原始加密后字符串解密字符串：%s",
             $key,
             $original_plain_text_data,
             $encrypted_text_data,
             $encrypted_text_2_plain_text,
             $origin_encrypted_text,
             $original_decrypted_text
    ) . PHP_EOL;

