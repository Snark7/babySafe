<?php

$data = 'null';
if (file_exists('messages.json')) {
    $data = file_get_contents('messages.json');
    unlink('messages.json');
}

echo $data;
