<?php

$context = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => "X-From: PHP\r\nContent-type: text-plain",
         'content' => 'Teste do corpo do content'
    ]
]);

echo file_get_contents('http://httpbin.org/post', false, $context);