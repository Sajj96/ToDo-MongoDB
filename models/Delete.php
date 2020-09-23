<?php

    require_once '../vendor/autoload.php';
                
    $collection = (new MongoDB\Client)->todo->activities; // Connecting to database collection

    $id = str_replace("'","\'",$_POST['activity_id']);  // Get activity id

    $deleteOneResults = $collection->deleteOne(
        ['_id' => new MongoDB\BSON\ObjectId($id) ]
    );

    if($deleteOneResults) {
        echo $id;
    }
