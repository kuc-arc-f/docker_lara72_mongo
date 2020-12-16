<?php

require '../vendor/autoload.php'; // include Composer's autoloader

//
function test1(){
    $client = new MongoDB\Client("mongodb://mongo:27017");
    $collection = $client->db1->books;
        $result = $collection->find();

    foreach ($result as $entry) {
        var_dump($entry);
    }
}

/// main
test1();
var_dump ("#end-test");
