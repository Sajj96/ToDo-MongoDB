<?php

    require_once '../vendor/autoload.php';
        
    $collection = (new MongoDB\Client)->todo->activities; // Connecting to database collection

    $details = str_replace("'","\'",$_POST['activity_name']); 

    $insertOneResult = $collection->insertOne([
        'activity_details' => $details,
        'activity_status' => 0,
        'date' => date('Y/m/d'),
    ]);

    if($insertOneResult) {
        $activity_id = $insertOneResult->getInsertedId();

        echo '<a href="#" class="list-group-item" id="list-group-item-'.$activity_id.'" data-id="'.$activity_id.'">'.$_POST["activity_name"].' <span class="badge badge-secondary ml-5" data-id="'.$activity_id.'">X</span></a>';
    }
