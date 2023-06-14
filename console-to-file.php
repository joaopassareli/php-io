<?php

$newCourse = trim(fgets(STDIN));

file_put_contents('php-courses.txt', "\n$newCourse", FILE_APPEND);