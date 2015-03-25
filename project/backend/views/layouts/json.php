<?php
/***
 * Шаблон для вывода ответов API
 */
Header('Content-Type: application/json; charset=utf-8');

$response = array(
    'status' => $status,
    'data'   => $data
);

$jsonComponent = New CJSON();
$jsonResponse = $jsonComponent->encode($response);
echo $jsonResponse;