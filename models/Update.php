<?php

    require_once '../vendor/autoload.php';
            
    $collection = (new MongoDB\Client)->todo->activities; // Connecting to database collection

    $id = str_replace("'","\'",$_POST['activity_id']);  // Get activity id

    $updateOneResults = $collection->updateOne(
        ['_id' => new MongoDB\BSON\ObjectId($id) ],
        ['$set' => [ 'activity_status' => 1 ]]
    );

    if($updateOneResults) {
        echo $id;
    }
