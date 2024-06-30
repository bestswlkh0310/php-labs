<?php

$response = [
    'status' => 200,
    'message' => 'OK',
    'data' => [
        1,
        2,
        3,
        4
    ]
];

echo json_encode($response);
print_r(array_map('strval', $response["data"]));
echo implode(', ', array_map('strval', $response["data"]));
