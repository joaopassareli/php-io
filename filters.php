<?php

require 'MyPersonalFilter.php';

$file = fopen('php-courses.txt', 'r');

stream_filter_register('alura.partes', MyPersonalFilter::class);
stream_filter_append($file, 'alura.partes');

echo fread($file, filesize('php-courses.txt'));

fclose($file);