<?php

$list = [
        [
            'text' => 'Task #1',
            'status' => ''
        ],
        [
            'text' => 'Task #2',
            'status' => 'done'
        ],
        [
            'text' => 'Task #3',
            'status' => ''
        ],
        [
            'text' => 'Task #4',
            'status' => 'done'
        ],
        [
            'text' => 'Task #5',
            'status' => ''
        ],
];

/**
 * Storing to local
 */

//  $string = json_encode($list);
//  file_put_contents('tasks.json', $string);

/**
 * Adding more tasks
 */

if(isset($_POST['item'])){
    $list[] = $_POST['item'];
}




/** 
 * Response
 */

header('Content-Type: application/json');
echo json_encode($list, true);