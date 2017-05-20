<?php

$message = $_POST['message'];

$data = [];
if (file_exists('messages.json')) {
    $data = json_decode(file_get_contents('messages.json'), true);
}
$data[] = $message;

file_put_contents('messages.json', json_encode($data));
