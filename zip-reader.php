<?php

$context = stream_context_create([
    'zip' => [
        'password' => '123456'
    ]
]);

echo file_get_contents('zip://files.zip#courses-list.txt', false, $context);