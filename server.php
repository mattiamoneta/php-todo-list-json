<?php

/**
 * Getting tasks from local JSON file (if exist)
 */

 $taskList = [];

 if (file_exists('tasks.json')){
    $fileContent = file_get_contents('tasks.json');
    $taskList = json_decode($fileContent, true);
 } 


 /**
 * Delete specific task
 */

 if(isset($_POST['remove'])){
    unset($taskList[(int)$_POST['remove']]);
}

/**
 * Toggle specific task status
 */

 if(isset($_POST['toggle'])){

    $currentStatus = $taskList[(int)$_POST['toggle']]['status'];

    if($currentStatus == ''){
        $taskList[(int)$_POST['toggle']]['status'] = 'done';
    } else {
        $taskList[(int)$_POST['toggle']]['status'] = '';
    }
    
}

/**
 * Adding more tasks
 */

if(isset($_POST['item'])){
    $taskList[] = [
        'text' => $_POST['item'],
        'status' => ''
    ];
}



/**
 * Update JSON
 */

$string = json_encode($taskList);
file_put_contents('tasks.json', $string);


/** 
 * Response
 */

header('Content-Type: application/json');
echo json_encode($taskList, true);