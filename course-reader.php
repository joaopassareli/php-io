<?php

$file = file_get_contents('courses-list.txt');
$fileArray = file('courses-list.txt');

var_dump($file, $fileArray);