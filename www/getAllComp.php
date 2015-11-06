<?php

$pdo = require_once('dbconfig.php');

$sth=$PDO->prepare("SELECT * FROM  `company`");

$returner = [];

$sth->execute();

$result = $sth ->fetchAll();
if($result){
    foreach($result as $var){
        array_push($returner,$var);
    }

    header('Content-Type: application/json');
    echo json_encode($returner);
}else{
    echo "NONE";
}



