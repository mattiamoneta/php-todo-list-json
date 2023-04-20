<?php

$list = [
        'Task #1',
        'Task #2',
        'Task #3',
        'Task #4',
        'Task #5'
];

if(isset($_POST['item'])){
    $list[] = $_POST['item'];
}

/**
 * Adding more tasks
 */


/** 
 * Response
 */

header('Content-Type: application/json');
echo json_encode($list, true);