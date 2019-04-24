<?php
require_once 'sm4.php';

$sm4 = new \SM4();
//16字节的HEX编码字符串 32个hex字符
$original_plain_text_data = 'a test by trimps';

$key = 'ce68d4fc82980612f8dc094fee2ba106';
$origin_encrypted_text = '2864b5c828b25d5768c943337f83dcab426913236b8f3cc2f0b0ccd8f6239d32';
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

