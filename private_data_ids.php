<?php

$fileName = './tmp/private_data.json';
if (file_exists($fileName)) {
    $jsonString = file_get_contents($fileName);
    if ($jsonString) {
        $jsonData = json_decode($jsonString);
        $keys = array_keys(get_object_vars($jsonData));
        foreach ($keys as $key) {
            echo $key . '<br>';
        }
    } else {
        echo 'No content';
    }
} else {
    echo 'Data file not found';
}
