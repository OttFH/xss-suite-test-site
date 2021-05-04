<?php

$dirPath = './tmp/private';

foreach (new DirectoryIterator($dirPath) as $file) {
    if ($file->isDot() || $file->getExtension() != 'json') continue;

    echo $file->getFilename() . '<br>';
}
