<?php

$myCourses = file('courses-list.txt');

$otherCourses = file('php-courses.txt');

$csvFile =  fopen('courses.csv', 'w');

foreach ($myCourses as $course) {
    $line = [trim(mb_convert_encoding($course, "Windows-1252", "UTF-8")), 'Sim'];
    fputcsv($csvFile, $line, ';');
}

foreach ($otherCourses as $course) {
    $line = [trim(mb_convert_encoding($course, "Windows-1252", "UTF-8")),  'Não'];
    fputcsv($csvFile, $line, ';');
}

fclose($csvFile);