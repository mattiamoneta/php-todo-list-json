<?php

$list = [
        'Task #1',
        'Task #2',
        'Task #3',
        'Task #4',
        'Task #5'
];

header('Content-Type: application/json');
echo json_encode($list, true);