    <?php

    $file = new SplFileObject('courses.csv');

    while (!$file->eof()) {
        $line = $file->fgetcsv(';');

        echo $line[0].PHP_EOL;
    }