<?php

$first = $_POST['firstField'];
$second = $_POST['secondField'];
$third = $_POST['thirdField'];

$pdo = require_once('dbconfig.php');
$sth=$PDO->prepare("SELECT * FROM  `$first` WHERE  `$second` like '$third%'");



$sth->execute(); 

$result = $sth ->fetchAll();
if($result){
	foreach($result as $var){
		 echo ($var['socialID'].';'.$var['name'].';'.$var['status'].';'.$var['address'].';'.$var['postalID'].'°');
	}
}else{
	echo "NONE";
}



