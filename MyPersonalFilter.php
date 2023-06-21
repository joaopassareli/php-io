<?php

class MyPersonalFilter extends php_user_filter 
{
    public $stream;

    public function onCreate(): bool
    {
         $this->stream = fopen('php://temp', 'w+');
         return $this->stream !== false;
    }

    public function filter($in, $out, &$consumed, $closing): int
    {        
        $exit = '';
        while ($bucket = stream_bucket_make_writeable($in)) {
            $lines = explode("\n", $bucket->data);

            foreach ($lines as $line) {
                if (stripos($line, 'parte') != false) {
                    $exit .= "$line\n";
                }
            }
        }

        $bucketOut = stream_bucket_new($this->stream, $exit);
        stream_bucket_append($out, $bucketOut);

        return PSFS_PASS_ON;
    }
}