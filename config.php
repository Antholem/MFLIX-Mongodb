<?php


require_once __DIR__ . "/autoload.php";


$collection = (new MongoDB\Client)->sample_mflix->user;


?>