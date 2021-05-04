<?php

function deleteOldEntries($entries)
{
    while (count(array_keys(get_object_vars($entries))) > 100) {
        $oldestIndex = 0;
        $oldestTime = $entries[0]->time;

        foreach ($entries as $index => $entry) {
            if ($entry->time < $oldestTime) {
                $oldestIndex = $index;
                $oldestTime = $entry->time;
            }
        }

        unset($entries[$oldestIndex]);
        $entries = array_values($entries);
    }

    return $entries;
}

$dirPath = '../tmp';
$fileName = $dirPath . '/private_data.json';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $json = json_encode($_POST);
    if (strlen($json) < 1000) {
        $jsonData = (object)[];
        if (!file_exists($dirPath)) {
            mkdir($dirPath);
        } else if (file_exists($fileName)) {
            $jsonString = file_get_contents($fileName);
            $jsonData = json_decode($jsonString);
            $jsonData = deleteOldEntries($jsonData);
        }

        $id = rand();
        $key = 'id_' . $id;
        $newEntry = [
            'id' => $id,
            'time' => time(),
            'data' => $_POST,
        ];
        $jsonData->$key = $newEntry;
        $fileHandle = fopen($fileName, 'w');
        fwrite($fileHandle, json_encode($jsonData));
        fclose($fileHandle);

        header('Content-Type: application/json');
        echo json_encode([
            'id' => $id,
        ]);
    } else {
        http_response_code(400);
        echo 'POST body to big.';
    }
} else {
    http_response_code(400);
    echo 'Use POST.';
}

