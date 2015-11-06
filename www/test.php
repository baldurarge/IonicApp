<?php
header('Content-Type: application/json');
$pdo = require_once('dbconfig.php');
$sth=$PDO->prepare("SELECT * FROM  `company`");
$returner = [];
$sth->execute();
$result = $sth ->fetchAll();
if($result){
    foreach($result as $var){
        array_push($returner,$var);
    }


    $fp = fopen('results.json', 'w');
    fwrite($fp, json_encode($returner));
    fclose($fp);

}else{
    echo "NONE";
}



