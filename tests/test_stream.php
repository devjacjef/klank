<?php

/*
  TEST FOR HTTP/STREAM CLASS.
 */

require_once __DIR__ . '/../vendor/autoload.php';

use Src\Http\Stream;

// Opening a file
$stream = new Stream();
$file = null;

var_dump($stream->open("./test.txt", "r+", STREAM_USE_PATH, $file));
//var_dump($stream->open("./test.txt", "r+", 0, $file));

var_dump($file);
var_dump($stream);

// Reading file

echo $stream->read(2) . PHP_EOL;
