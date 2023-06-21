<?php

$dir = dir('.');
echo $dir->path.PHP_EOL;
while($file = $dir->read()) {
    echo $file.PHP_EOL;
}